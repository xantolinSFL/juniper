<?php

namespace StayForLong\Juniper;

class ServiceHotelsContent
{
	private $login;
	private $service;

	public function __construct(\JP_Login $login, \WebServiceJP $service)
	{
		$this->login   = $login;
		$this->service = $service;
	}

	/**
	 * @param array $hotels_code
	 * @param string $language
	 * @return array
	 */
	public function __invoke(array $hotels_code, $language = ServiceRequest::DEFAULT_LANGUAGE)
	{
		if (empty($hotels_code)) {
			ServiceHotelsContentException::throwBecauseOfHotelCodeEmpty();
		}

		$hotelsCodes = [];
		foreach ($hotels_code as $hotel_code) {
			$hotelsCodes[] = new \JP_HotelSimpleContent($hotel_code, null);
		}

		$hotelContentList = $this->getHotelContentList($hotelsCodes);
		$hotelContentRQ   = $this->getHotelContentRQ($hotelContentList, $language);
		$response         = $this->getHotelContent($hotelContentRQ);

		if ($response->getContentRS()->getErrors()) {
			foreach ($response->getContentRS()->getErrors()->getError() as $error) {
				ServiceHotelsContentException::throwBecauseOf($error->getText());
			}
		}

		$result         = $response->getContentRS()->getContents()->getHotelContent();
		$hotels_content = [];
		foreach ($result as $item) {
			$hotels_content = [
				"code"      => $item->getCode(),
				"name"      => $item->getHotelName(),
				"category"  => $item->getHotelCategory()->getType(),
				"address"   => $item->getAddress()->getAddress(),
				"latitude"  => $item->getAddress()->getLatitude(),
				"longitude" => $item->getAddress()->getLongitude(),
			];
		}

		return $hotels_content;
	}

	/**
	 * @param \JP_HotelSimpleContent[] $hotelsCodes
	 * @return \ArrayOfJP_HotelSimpleContent
	 */
	private function getHotelContentList($hotelsCodes)
	{
		$hotelContentList = new \ArrayOfJP_HotelSimpleContent();
		$hotelContentList->setHotel($hotelsCodes);
		return $hotelContentList;
	}

	/**
	 * @param \ArrayOfJP_HotelSimpleContent $hotelContentList
	 * @param $language
	 * @return \JP_HotelContentRQ
	 */
	private function getHotelContentRQ(\ArrayOfJP_HotelSimpleContent $hotelContentList, $language)
	{
		$hotelContentRQ = new \JP_HotelContentRQ(ServiceRequest::JUNIPER_WS_VERSION, $language);
		$hotelContentRQ->setLogin($this->login);
		$hotelContentRQ->setHotelContentList($hotelContentList);
		return $hotelContentRQ;
	}

	/**
	 * @param \JP_HotelContentRQ $hotelContentRQ
	 * @return \HotelContentResponse
	 */
	private function getHotelContent(\JP_HotelContentRQ $hotelContentRQ)
	{
		$hotelContent = new \HotelContent($hotelContentRQ);
		$response     = $this->service->HotelContent($hotelContent);
		return $response;
	}
}

final class ServiceHotelsContentException extends \Exception
{
	public static function throwBecauseOf($messages)
	{
		throw new self($messages);
	}

	public static function throwBecauseOfHotelCodeEmpty()
	{
		throw new self("The hotels_code parameter is empty.");
	}
}
