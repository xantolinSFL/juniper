<?php

namespace StayForLong\Juniper\Hotels;

use StayForLong\Juniper\JuniperService;
use StayForLong\Juniper\ServiceRequest;

class HotelsList
{
	/**
	 * @var JuniperService
	 */
	private $juniperService;

	/**
	 * ServiceZoneList constructor.
	 * @param JuniperService $juniperService
	 */
	public function __construct(JuniperService $juniperService)
	{
		$this->juniperService = $juniperService;
	}

	/**
	 * @param $zone_code
	 * @param bool $show_basic_info
	 * @return array
	 */
	public function __invoke($zone_code, $show_basic_info = false)
	{
		$hotelListRequest = new \JP_HotelListRequest($zone_code, $show_basic_info);
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
	 * @param \JP_HotelListRequest $hotelListRequest
	 * @return \JP_HotelListRQ
	 */
	private function getHotelListRQ(\JP_HotelListRequest $hotelListRequest)
	{
		$hotelListRQ = new \JP_HotelListRQ(ServiceRequest::JUNIPER_WS_VERSION, $this->juniperService->getLanguage());
		$hotelListRQ->setLogin($this->juniperService->getLogin());
		$hotelListRQ->setHotelListRequest($hotelListRequest);
		return $hotelListRQ;
	}

	/**
	 * @param \JP_HotelListRQ $hotelListRQ
	 * @return \HotelListResponse
	 */
	private function getHotelList(\JP_HotelListRQ $hotelListRQ)
	{
		$hotelList = new \HotelList($hotelListRQ);
		$response  = $this->juniperService->getService()->HotelList($hotelList);
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