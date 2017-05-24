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

	/** @var BookingRules */
	private $bookingRules;

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
		$this->bookingRules = $bookingRules;

		$JP_HotelBooking = new JP_HotelBooking(WebService::JUNIPER_WS_VERSION, $this->juniperWebService->language());
		$JP_HotelBooking
			->setLogin($this->juniperWebService->login())
			->setPaxes($this->getPaxes())
			->setHolder($this->getHolder())
			->setComments($this->getComments())
			->setExternalBookingReference($bookingRules->reference())
			->setElements($this->getHotelElements());

		$hotelBooking = new HotelBooking($JP_HotelBooking);
		
		$response = $this->juniperWebService->service()->HotelBooking($hotelBooking);

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
	 * @return JP_Holder
	 */
	private function getHolder()
	{
		$jpHolder = new JP_Holder();
		$pax      = $this->paxes[0];
		$relPax   = new JP_RelPax($pax->idPax());
		$jpHolder->setRelPax($relPax);
		return $jpHolder;
	}

	/**
	 * @return JP_Paxes
	 */
	private function getPaxes()
	{
		$jp_pax = array_map(function (Pax $pax) {
			return (new JP_Pax($pax->idPax(), $gender = null))
				->setAge($pax->age())
				->setName($pax->name())
				->setSurname($pax->surname());
		}, $this->paxes);

		$paxes = new JP_Paxes($AdultsFree = 0, $ChildrenFree = 0);
		$paxes->setPax($jp_pax);
		return $paxes;
	}

	/**
	 * @return ArrayOfJP_Comment
	 */
	private function getComments(): ArrayOfJP_Comment
	{
		if (empty($this->bookingRules->comments())) {
			return new ArrayOfJP_Comment();
		}

		$jpComments = array_map(function ($comment) {
			return new JP_Comment($comment, JP_CommentType::HOT);
		}, $this->bookingRules->comments());

		$comments = new ArrayOfJP_Comment();
		$comments->setComment($jpComments);
		return $comments;
	}

	/**
	 * @return ArrayOfJP_HotelElement
	 */
	private function getHotelElements(): ArrayOfJP_HotelElement
	{
		$priceRange   = new JP_PriceRange($this->bookingRules->minPrice(), $this->bookingRules->maxPrice(),
			$this->bookingRules->currency());
		$bookingPrice = new JP_BookingPrice();
		$bookingPrice->setPriceRange($priceRange);

		$JP_HotelBookingInfo = new JP_HotelBookingInfo($this->nights->startToString(), $this->nights->endToString());
		$JP_HotelBookingInfo
			->setHotelCode($this->bookingRules->hotelCode())
			->setPrice($bookingPrice);


		$HotelElement = new JP_HotelElement(0); // TODO: Only set one element.
		$HotelElement
			->setHotelBookingInfo($JP_HotelBookingInfo)
			->setBookingCode($this->bookingRules->bookingCode())
			->setRelPaxesDist($this->getRelPaxesDist());

		$hotelElements = new ArrayOfJP_HotelElement();
		$hotelElements->setHotelElement([$HotelElement]);
		return $hotelElements;
	}
}

final class BookingException extends \Exception
{
	public static function throwBecauseOf($messages)
	{
		throw new self($messages);
	}
}