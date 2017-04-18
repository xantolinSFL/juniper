<?php

namespace StayForLong\Juniper\Application\Hotel;

use Juniper\Webservice\ArrayOfJP_Comment;
use Juniper\Webservice\ArrayOfJP_HotelElement;
use Juniper\Webservice\ArrayOfJP_RelPax;
use Juniper\Webservice\ArrayOfJP_RelPaxDist;
use Juniper\Webservice\HotelBooking;
use Juniper\Webservice\JP_BookingPrice;
use Juniper\Webservice\JP_Comment;
use Juniper\Webservice\JP_CommentType;
use Juniper\Webservice\JP_Holder;
use Juniper\Webservice\JP_HotelBooking;
use Juniper\Webservice\JP_HotelBookingInfo;
use Juniper\Webservice\JP_HotelElement;
use Juniper\Webservice\JP_HotelRelPaxDist;
use Juniper\Webservice\JP_Pax;
use Juniper\Webservice\JP_Paxes;
use Juniper\Webservice\JP_PriceRange;
use Juniper\Webservice\JP_RelPax;
use StayForLong\Juniper\Domain\Hotel\BookingRules;
use StayForLong\Juniper\Domain\Hotel\Nights;
use StayForLong\Juniper\Domain\Hotel\Pax;
use StayForLong\Juniper\Infrastructure\Services\JuniperWebService;
use StayForLong\Juniper\Infrastructure\Services\WebService;

/**
 * Class Booking
 * @package StayForLong\Juniper\Application\Hotel
 */
class Booking
{
	/**
	 * @var JuniperWebService
	 */
	private $juniperWebService;

	/**
	 * @var Pax[]
	 */
	private $paxes;

	/**
	 * @var Nights
	 */
	private $nights;

	/**
	 * BookingRules constructor.
	 * @param JuniperWebService $juniperWebService
	 * @param Pax[] $paxes
	 * @param Nights $nights
	 */
	public function __construct(JuniperWebService $juniperWebService, $paxes, Nights $nights)
	{
		$this->juniperWebService = $juniperWebService;
		$this->paxes             = $paxes;
		$this->nights            = $nights;
	}

	/**
	 * @param BookingRules $bookingRules
	 * @return \Juniper\Webservice\ArrayOfJP_Reservation
	 */
	public function __invoke(BookingRules $bookingRules)
	{
		$jp_pax = [];
		foreach ($this->paxes as $key => $pax) {
			$jpPax = new JP_Pax($pax->idPax(), $gender = null);
			$jpPax->setAge($pax->age())
				->setName($pax->name())
				->setSurname($pax->surname());

			$jp_pax[$key] = new JP_Pax($pax->idPax(), $gender = null);
			$jp_pax[$key]->setAge($pax->age());
			$jp_pax[$key]->setName($pax->name());
			$jp_pax[$key]->setSurname($pax->surname());
		}

		$paxes = new JP_Paxes($AdultsFree = 0, $ChildrenFree = 0);
		$paxes->setPax($jp_pax);

		$jpHolder = new JP_Holder();
		$this->setRelPaxes($jpHolder);

		$comments = new ArrayOfJP_Comment();
		if ($bookingRules->comments()) {
			$jpComment = [];
			foreach ($bookingRules->comments() as $comment) {
				$jpComment[] = new JP_Comment($comment, JP_CommentType::HOT);
			}

			$comments->setComment($jpComment);
		}

		$priceRange   = new JP_PriceRange($bookingRules->minPrice(), $bookingRules->maxPrice(),
			$bookingRules->currency());
		$bookingPrice = new JP_BookingPrice();
		$bookingPrice->setPriceRange($priceRange);

		$JP_HotelBookingInfo = new JP_HotelBookingInfo($this->nights->startToString(), $this->nights->endToString());
		$JP_HotelBookingInfo
			->setHotelCode($bookingRules->hotelCode()[0]) // TODO: Hotel code is array but the seter wait a string.
			->setPrice($bookingPrice);

		$HotelElement = new JP_HotelElement(0); // TODO: Only set one element.
		$HotelElement
			->setHotelBookingInfo($JP_HotelBookingInfo)
			->setBookingCode($bookingRules->bookingCode())
			->setRelPaxesDist($this->getRelPaxesDist());

		$hotelElements = new ArrayOfJP_HotelElement();
		$hotelElements->setHotelElement([$HotelElement]);

		$JP_HotelBooking = new JP_HotelBooking(WebService::JUNIPER_WS_VERSION, $this->juniperWebService->language());
		$JP_HotelBooking
			->setLogin($this->juniperWebService->login())
			->setPaxes($paxes)
			->setHolder($jpHolder)
			->setComments($comments)
			->setExternalBookingReference($bookingRules->reference())
			->setElements($hotelElements);
		$hotelBooking = new HotelBooking($JP_HotelBooking);

		$response = $this->juniperWebService->service()
			->HotelBooking($hotelBooking);

		if ($response->getBookingRS()->getErrors()) {
			foreach ($response->getBookingRS()->getErrors()->getError() as $error) {
				BookingException::throwBecauseOf($error->getText());
			}

			return;
		}

		return $response->getBookingRS()->getReservations();
	}

	/**
	 * @return ArrayOfJP_RelPaxDist
	 */
	private function getRelPaxesDist()
	{
		$relPax = [];
		foreach ($this->paxes as $key => $pax) {
			$pax->idPax();
			$relPax[] = new JP_RelPax($pax->idPax());
		}

		$arrayOfJP_RelPax = new ArrayOfJP_RelPax();
		$arrayOfJP_RelPax->setRelPax($relPax);

		$arrayOfJP_RelPaxDist = new ArrayOfJP_RelPaxDist();
		$relPaxDist           = new JP_HotelRelPaxDist();
		$relPaxDist->setRelPaxes($arrayOfJP_RelPax);
		$arrayOfJP_RelPaxDist->setRelPaxDist([$relPaxDist]);

		return $arrayOfJP_RelPaxDist;
	}

	/**
	 * @param JP_Holder $jpHolder
	 */
	private function setRelPaxes(JP_Holder &$jpHolder)
	{
		$pax = $this->paxes[0];
		$pax->idPax();
		$relPax = new JP_RelPax($pax->idPax());
		$jpHolder->setRelPax($relPax);
	}
}

final class BookingException extends \Exception
{
	public static function throwBecauseOf($messages)
	{
		throw new self($messages);
	}
}