<?php

namespace StayForLong\Juniper\Zones;

use Juniper\Webservice\JP_ProductType;
use Juniper\Webservice\JP_ZoneListRequest;
use Juniper\Webservice\JP_ZoneListRQ;
use Juniper\Webservice\ZoneList as JuniperZoneList;
use StayForLong\Juniper\Infrastructure\Services\JuniperWebService;
use StayForLong\Juniper\Infrastructure\Services\WebService;

/**
 * Class ZoneList
 * @package StayForLong\Juniper\Zones
 */
class ZoneList
{
	/**
	 * Hotel type.
	 * @var string
	 */
	const HOTEL = JP_ProductType::HOT;
	/**
	 * Car type.
	 * @var string
	 */
	const CAR = JP_ProductType::CAR;
	/**
	 * Ticket type.
	 * @var string
	 */
	const TICKET = JP_ProductType::TKT;
	/**
	 * transfer type.
	 * @var string
	 */
	const TRANSFER = JP_ProductType::TRF;
	/**
	 * visa type.
	 * @var string
	 */
	const VISA = JP_ProductType::VSD;
	/**
	 * Flight type.
	 * @var string
	 */
	const FLIGHT = JP_ProductType::FLH;
	/**
	 * Insurance type.
	 * @var string
	 */
	const INSURANCE = JP_ProductType::INS;
	/**
	 * Cruise type.
	 * @var string
	 */
	const CRUISE = JP_ProductType::CRU;

	/**
	 * Country level.
	 * @var integer
	 */
	const COUNTRY_LEVEL = 1;

	/**
	 * Default max. level.
	 * @var integer
	 */
	const DEFAULT_MAX_LEVEL = self::COUNTRY_LEVEL;

	/**
	 * IATA code.
	 * @var boolean
	 */
	const SHOW_IATA = true;

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
	 * @param $zone_list_type
	 * @param bool $show_iata
	 * @param int $max_level
	 * @return array
	 */
	public function __invoke($zone_list_type, $show_iata = self::SHOW_IATA, $max_level = self::DEFAULT_MAX_LEVEL)
	{
		$zoneListRequest = new JP_ZoneListRequest($zone_list_type, $show_iata, $max_level);
		$zoneListRQ      = $this->getZoneListRQ($zoneListRequest);
		$response        = $this->getZoneList($zoneListRQ);

		if ($response->getZoneListRS()->getErrors()) {
			foreach ($response->getZoneListRS()->getErrors()->getError() as $error) {
				ServiceZoneListException::throwBecauseOf($error->getText());
			}
		}

		$result     = $response->getZoneListRS();
		$zone_codes = [];

		foreach ($result->getZoneList()->getZone() as $item) {
			$zone_codes[] = [
				'code'        => $item->getCode(),
				'name'        => $item->getName(),
				'iata'        => $item->getIATA(),
				'parent_code' => $item->getParentCode(),
			];
		}

		return $zone_codes;
	}

	/**
	 * @param JP_ZoneListRequest $zoneListRequest
	 * @return JP_ZoneListRQ
	 */
	private function getZoneListRQ(JP_ZoneListRequest $zoneListRequest)
	{
		$zoneListRQ = new JP_ZoneListRQ(WebService::JUNIPER_WS_VERSION, $this->juniperWebService->getLanguage());
		$zoneListRQ->setLogin($this->juniperWebService->getLogin());
		$zoneListRQ->setZoneListRequest($zoneListRequest);

		return $zoneListRQ;
	}

	/**
	 * @param JP_ZoneListRQ $zoneListRQ
	 * @return \Juniper\Webservice\ZoneListResponse
	 */
	private function getZoneList(JP_ZoneListRQ $zoneListRQ)
	{
		$zoneList = new JuniperZoneList($zoneListRQ);
		$response = $this->juniperWebService->getService()->ZoneList($zoneList);
		return $response;
	}
}

final class ServiceZoneListException extends \Exception
{
	public static function throwBecauseOf($messages)
	{
		throw new self($messages);
	}
}