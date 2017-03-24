<?php

namespace StayForLong\Juniper;

class ServiceHotelsList
{
	/**
	 * @var \JP_Login
	 */
	private $login;

	/**
	 * @var ServiceRequest
	 */
	private $service;

	/**
	 * ServiceHotelsList constructor.
	 * @param \JP_Login $login
	 * @param \WebServiceJP $service
	 */
	public function __construct(\JP_Login $login, \WebServiceJP $service)
	{
		$this->login   = $login;
		$this->service = $service;
	}

	/**
	 * @param $zone_code
	 * @param string $language
	 * @param bool $show_basic_info
	 * @return array
	 */
	public function __invoke($zone_code, $language = ServiceRequest::DEFAULT_LANGUAGE, $show_basic_info = false)
	{
		$hotelListRequest = new \JP_HotelListRequest($zone_code, $show_basic_info);
		$hotelListRQ      = $this->getHotelListRQ($language, $hotelListRequest);

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
	 * @param $language
	 * @param $hotelListRequest
	 * @return \JP_HotelListRQ
	 */
	private function getHotelListRQ($language, $hotelListRequest)
	{
		$hotelListRQ = new \JP_HotelListRQ(ServiceRequest::JUNIPER_WS_VERSION, $language);
		$hotelListRQ->setLogin($this->login);
		$hotelListRQ->setHotelListRequest($hotelListRequest);
		return $hotelListRQ;
	}

	/**
	 * @param $hotelListRQ
	 * @return \HotelListResponse
	 */
	private function getHotelList($hotelListRQ)
	{
		$hotelList = new \HotelList($hotelListRQ);
		$response  = $this->service->HotelList($hotelList);
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