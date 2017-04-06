<?php

namespace StayForLong\Juniper\Application\Hotel;

use Juniper\Webservice\ArrayOfString5;
use Juniper\Webservice\HotelCheckAvail;
use Juniper\Webservice\JP_HotelCheckAvail;
use Juniper\Webservice\JP_HotelCheckAvailRequest;
use Juniper\Webservice\JP_HotelOptionRequest;
use Juniper\Webservice\JP_SearchSegmentHotels;
use Juniper\Webservice\JP_SearchSegmentsHotels;
use StayForLong\Juniper\Domain\Hotel\Rate;
use StayForLong\Juniper\Infrastructure\Services\JuniperWebService;
use StayForLong\Juniper\Infrastructure\Services\WebService;

/**
 * Class CheckAvailability
 * @package StayForLong\Juniper\Application\Hotel
 */
class CheckAvailability
{
	/**
	 * @var JuniperWebService
	 */
	private $juniperWebService;

	/**
	 * CheckAvailability constructor.
	 * @param JuniperWebService $juniperWebService
	 */
	public function __construct(JuniperWebService $juniperWebService)
	{
		$this->juniperWebService = $juniperWebService;
	}

	/**
	 * @param Rate $rate
	 * @param array $hotels_code
	 * @return \Juniper\Webservice\HotelCheckAvailResponse
	 */
	public function __invoke(Rate $rate, array $hotels_code)
	{
		$arrayOfString        = new ArrayOfString5();
		$hotelCodes           = $arrayOfString->setHotelCode($hotels_code);
		$searchSegmentHotels  = new JP_SearchSegmentHotels($rate->start(), $rate->end(), $OriginZone = null,
			$JPDCode = null, $DestinationZone = null);
		$searchSegmentsHotels = new JP_SearchSegmentsHotels();
		$searchSegmentsHotels->setHotelCodes($hotelCodes);
		$searchSegmentsHotels->setSearchSegmentHotels($searchSegmentHotels);
		$hotelCheckAvailRequest = new JP_HotelCheckAvailRequest();
		$JP_HotelOptionRequest  = new JP_HotelOptionRequest($rate->planCode());
		$hotelCheckAvailRequest->setHotelOption($JP_HotelOptionRequest)
			->setSearchSegmentsHotels($searchSegmentsHotels);
		$JP_HotelCheckAvail = new JP_HotelCheckAvail(WebService::JUNIPER_WS_VERSION,
			$this->juniperWebService->language());
		$JP_HotelCheckAvail->setLogin($this->juniperWebService->login())
			->setHotelCheckAvailRequest($hotelCheckAvailRequest);

		$hotelCheckAvail = new HotelCheckAvail($JP_HotelCheckAvail);
		$response        = $this->juniperWebService->service()->HotelCheckAvail($hotelCheckAvail);

		return $response;
	}
}

final class CheckAvailabilityException extends \Exception
{
	public static function throwBecauseOf($messages)
	{
		throw new self($messages);
	}
}