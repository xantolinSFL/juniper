<?php

namespace StayForLong\Juniper\Hotels;

use Juniper\Webservice\HotelList;
use Juniper\Webservice\JP_HotelListRequest;
use Juniper\Webservice\JP_HotelListRQ;
use StayForLong\Juniper\Infrastructure\Services\JuniperWebService;
use StayForLong\Juniper\Infrastructure\Services\WebService;

/**
 * Class HotelsList
 * @package StayForLong\Juniper\Hotels
 */
class HotelsList
{
	/**
	 * @var JuniperWebService
	 */
	private $juniperWebService;

	/**
	 * HotelsList constructor.
	 * @param JuniperWebService $juniperWebService
	 */
	public function __construct(JuniperWebService $juniperWebService)
	{
		$this->juniperWebService = $juniperWebService;
	}

	/**
	 * @param $zone_code
	 * @param bool $show_basic_info
	 * @return array
	 */
	public function __invoke($zone_code, $show_basic_info = false)
	{
		$hotelListRequest = new JP_HotelListRequest($zone_code, $show_basic_info);
		$hotelListRQ      = $this->getHotelListRQ($hotelListRequest);

		$response = $this->getHotelList($hotelListRQ);

		if ($response->getHotelListRS()->getErrors()) {
			foreach ($response->getHotelListRS()->getErrors()->getError() as $error) {
				ServiceHotelsListException::throwBecauseOf($error->getText());
			}
		}

		$result      = $response->getHotelListRS();
		$hotels_code = [];
		foreach ($result->getHotelList()->getHotel() as $item) {
			$hotels_code[] = $item->getCode();
		}

		return $hotels_code;
	}

	/**
	 * @param JP_HotelListRequest $hotelListRequest
	 * @return JP_HotelListRQ
	 */
	private function getHotelListRQ(JP_HotelListRequest $hotelListRequest)
	{
		$hotelListRQ = new JP_HotelListRQ(WebService::JUNIPER_WS_VERSION, $this->juniperWebService->language());
		$hotelListRQ->setLogin($this->juniperWebService->login());
		$hotelListRQ->setHotelListRequest($hotelListRequest);
		return $hotelListRQ;
	}

	/**
	 * @param JP_HotelListRQ $hotelListRQ
	 * @return \Juniper\Webservice\HotelListResponse
	 */
	private function getHotelList(JP_HotelListRQ $hotelListRQ)
	{
		$hotelList = new HotelList($hotelListRQ);
		$response  = $this->juniperWebService->service()->HotelList($hotelList);
		return $response;
	}
}

final class ServiceHotelsListException extends \Exception
{
	public static function throwBecauseOf($messages)
	{
		throw new self($messages);
	}
}