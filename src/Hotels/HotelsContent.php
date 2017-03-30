<?php

namespace StayForLong\Juniper\Hotels;

use StayForLong\Juniper\JuniperService;
use StayForLong\Juniper\ServiceRequest;

class HotelsContent
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
	 * @param array $hotels_code
	 * @return array
	 */
	public function __invoke(array $hotels_code)
	{
		if (empty($hotels_code)) {
			ServiceHotelsContentException::throwBecauseOfHotelCodeEmpty();
		}

		$hotelsCodes = [];
		foreach ($hotels_code as $hotel_code) {
			$hotelsCodes[] = new \JP_HotelSimpleContent($hotel_code, null);
		}

		$hotelContentList = $this->getHotelContentList($hotelsCodes);
		$hotelContentRQ   = $this->getHotelContentRQ($hotelContentList, $this->juniperService->getLanguage());
		$response         = $this->getHotelContent($hotelContentRQ);

		if ($response->getContentRS()->getErrors()) {
			foreach ($response->getContentRS()->getErrors()->getError() as $error) {
				ServiceHotelsContentException::throwBecauseOf($error->getText());
			}
		}

		$result         = $response->getContentRS()->getContents()->getHotelContent();
		$hotels_content = [];
		foreach ($result as $item) {

			$descriptions = $this->getHotelDescription($item);
			$features = $this->getHotelFeatures($item);
			$rooms = $this->getHotelRooms($item);
			$contact_info = $this->getContactInfo($item);

			$hotels_content[] = [
				"code"        => $item->getCode(),
				"name"        => $item->getHotelName(),
				"category"    => $item->getHotelCategory()->getType(),
				"address"     => $item->getAddress()->getAddress(),
				"latitude"    => $item->getAddress()->getLatitude(),
				"longitude"   => $item->getAddress()->getLongitude(),
				"description" => $descriptions,
				"contact_info"      => $contact_info,
				"features"    => $features,
				"rooms"       => $rooms,
				"providers"   => $item->getContentProviders(),
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
		$hotelContentRQ->setLogin($this->juniperService->getLogin());
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
		$response     = $this->juniperService->getService()->HotelContent($hotelContent);
		return $response;
	}

	/**
	 * @param \JP_HotelContent $item
	 * @return array
	 */
	private function getHotelDescription(\JP_HotelContent $item)
	{
		$descriptions = [];
		if ($item->getDescriptions()) {
			$hotelDescription = new HotelDescriptions($item->getDescriptions());
			$descriptions     = $hotelDescription();
			return $descriptions;
		}
		return $descriptions;
	}

	/**
	 * @param \JP_HotelContent $item
	 * @return array
	 */
	private function getHotelFeatures(\JP_HotelContent $item)
	{
		$features = [];
		if ($item->getFeatures()) {
			$hotelFeatures = new HotelFeatures($item->getFeatures());
			$features      = $hotelFeatures();
			return $features;
		}
		return $features;
	}

	/**
	 * @param \JP_HotelContent $item
	 * @return array
	 */
	private function getHotelRooms(\JP_HotelContent $item)
	{
		$rooms = [];
		if ($item->getHotelRooms()) {
			$hotelRooms = new HotelRooms($item->getHotelRooms());
			$rooms      = $hotelRooms();
			return $rooms;
		}
		return $rooms;
	}

	/**
	 * @param \JP_HotelContent $item
	 * @return array
	 */
	private function getContactInfo(\JP_HotelContent $item)
	{
		$contact_info = [];
		if ($item->getContactInfo()) {
			$hotelContactInfo = new HotelContactInfo($item->getContactInfo());
			$contact_info = [
				"phones" => $hotelContactInfo->getPhones(),
				"emails" => $hotelContactInfo->getEmails(),
				"faxes" => $hotelContactInfo->getFaxes(),
			];
		}

		return $contact_info;
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
