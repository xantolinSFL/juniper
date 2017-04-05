<?php

namespace StayForLong\Juniper\Hotels;

use Juniper\Webservice\ArrayOfJP_HotelSimpleContent;
use Juniper\Webservice\HotelContent;
use Juniper\Webservice\JP_ContactInfo;
use Juniper\Webservice\JP_HotelContent;
use Juniper\Webservice\JP_HotelContentRQ;
use Juniper\Webservice\JP_HotelSimpleContent;
use StayForLong\Juniper\Domain\Hotel\ContactInfo;
use StayForLong\Juniper\Domain\Hotel\Descriptions;
use StayForLong\Juniper\Domain\Hotel\Features;
use StayForLong\Juniper\Domain\Hotel\Rooms;
use StayForLong\Juniper\Infrastructure\Services\JuniperWebService;
use StayForLong\Juniper\Infrastructure\Services\WebService;

/**
 * Class HotelsContent
 * @package StayForLong\Juniper\Hotels
 */
class HotelsContent
{
	/**
	 * @var JuniperWebService
	 */
	private $juniperWebService;

	/**
	 * ServiceZoneList constructor.
	 * @param JuniperWebService $juniperWebService
	 */
	public function __construct(JuniperWebService $juniperWebService)
	{
		$this->juniperWebService = $juniperWebService;
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
			$hotelsCodes[] = new JP_HotelSimpleContent($hotel_code, null);
		}

		$hotelContentList = $this->getHotelContentList($hotelsCodes);
		$hotelContentRQ   = $this->getHotelContentRQ($hotelContentList, $this->juniperWebService->language());
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
			$features     = $this->getHotelFeatures($item);
			$rooms        = $this->getHotelRooms($item);
			$contact_info = $this->getContactInfo($item);

			$hotels_content[] = [
				"code"         => $item->getCode(),
				"name"         => $item->getHotelName(),
				"category"     => $item->getHotelCategory()->getType(),
				"address"      => $item->getAddress()->getAddress(),
				"latitude"     => $item->getAddress()->getLatitude(),
				"longitude"    => $item->getAddress()->getLongitude(),
				"description"  => $descriptions,
				"contact_info" => $contact_info,
				"features"     => $features,
				"rooms"        => $rooms,
				"providers"    => $item->getContentProviders(),
			];

		}

		return $hotels_content;
	}

	/**
	 * @param $hotelsCodes
	 * @return ArrayOfJP_HotelSimpleContent
	 */
	private function getHotelContentList($hotelsCodes)
	{
		$hotelContentList = new ArrayOfJP_HotelSimpleContent();
		$hotelContentList->setHotel($hotelsCodes);
		return $hotelContentList;
	}


	/**
	 * @param ArrayOfJP_HotelSimpleContent $hotelContentList
	 * @param $language
	 * @return JP_HotelContentRQ
	 */
	private function getHotelContentRQ(ArrayOfJP_HotelSimpleContent $hotelContentList, $language)
	{
		$hotelContentRQ = new JP_HotelContentRQ(WebService::JUNIPER_WS_VERSION, $language);
		$hotelContentRQ->setLogin($this->juniperWebService->login());
		$hotelContentRQ->setHotelContentList($hotelContentList);
		return $hotelContentRQ;
	}

	/**
	 * @param JP_HotelContentRQ $hotelContentRQ
	 * @return \Juniper\Webservice\HotelContentResponse
	 */
	private function getHotelContent(JP_HotelContentRQ $hotelContentRQ)
	{
		$hotelContent = new HotelContent($hotelContentRQ);
		$response     = $this->juniperWebService->service()->HotelContent($hotelContent);
		return $response;
	}

	/**
	 * @param JP_HotelContent $item
	 * @return array
	 */
	private function getHotelDescription(JP_HotelContent $item)
	{
		$descriptions = [];
		if ($item->getDescriptions()) {
			$hotelDescription = new Descriptions($item->getDescriptions());
			$descriptions     = $hotelDescription->__invoke();
			return $descriptions;
		}
		return $descriptions;
	}

	/**
	 * @param JP_HotelContent $JP_HotelContent
	 * @return array
	 */
	private function getHotelFeatures(JP_HotelContent $JP_HotelContent)
	{
		$features = [];
		if ($JP_HotelContent->getFeatures()) {
			$hotelFeatures = new Features($JP_HotelContent->getFeatures());
			$features      = $hotelFeatures->__invoke();
			return $features;
		}
		return $features;
	}

	/**
	 * @param JP_HotelContent $JP_HotelContent
	 * @return array
	 */
	private function getHotelRooms(JP_HotelContent $JP_HotelContent)
	{
		$rooms = [];
		if ($JP_HotelContent->getHotelRooms()) {
			$hotelRooms = new Rooms($JP_HotelContent->getHotelRooms());
			$rooms      = $hotelRooms->__invoke();
			return $rooms;
		}
		return $rooms;
	}

	/**
	 * @param JP_HotelContent $JP_HotelContent
	 * @return ContactInfo
	 */
	private function getContactInfo(JP_HotelContent $JP_HotelContent)
	{
		if (!$JP_HotelContent->getContactInfo()) {
			return new ContactInfo(new JP_ContactInfo());
		}

		$hotelContactInfo = new ContactInfo($JP_HotelContent->getContactInfo());
		return $hotelContactInfo;
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
