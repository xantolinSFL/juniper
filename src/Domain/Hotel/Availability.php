<?php

namespace StayForLong\Juniper\Domain\Hotel;

use Carbon\Carbon;
use Juniper\Webservice\ArrayOfJP_RelPax;
use Juniper\Webservice\ArrayOfString5;
use Juniper\Webservice\HotelAvail;
use Juniper\Webservice\JP_HotelAvail;
use Juniper\Webservice\JP_HotelAvailAdvancedOptions;
use Juniper\Webservice\JP_HotelRelPaxDist;
use Juniper\Webservice\JP_Pax;
use Juniper\Webservice\JP_Paxes;
use Juniper\Webservice\JP_RelPax;
use Juniper\Webservice\JP_RelPaxesDist;
use Juniper\Webservice\JP_RequestHotelsAvail;
use Juniper\Webservice\JP_SearchSegmentHotels;
use Juniper\Webservice\JP_SearchSegmentsHotels;
use StayForLong\Juniper\Infrastructure\Services\JuniperWebService;
use StayForLong\Juniper\Infrastructure\Services\WebService;

/**
 * Class Availability
 * @package StayForLong\Juniper\Domain\Hotel
 */
class Availability
{
	/**
	 * @var JuniperWebService
	 */
	private $juniperWebService;

	private $paxes;
	private $nights;
	private $country;

	/**
	 * Availability constructor.
	 * @param JuniperWebService $juniperWebService
	 * @param Pax[] $paxes
	 * @param Nights $nights
	 * @param Country $country
	 */
	public function __construct(JuniperWebService $juniperWebService, $paxes, Nights $nights, Country $country)
	{
		$this->juniperWebService = $juniperWebService;
		$this->paxes             = $paxes;
		$this->nights            = $nights;
		$this->country           = $country;
	}

	/**
	 * @param array $hotels_code
	 * @return \Juniper\Webservice\JP_HotelResult[]
	 */
	public function __invoke(array $hotels_code)
	{
		if (empty($hotels_code)) {
			ServiceHotelAvailabilityException::throwBecauseOfHotelCodeEmpty();
		}

		$searchSegmentsHotels = $this->getSearchSegmentsHotels($hotels_code);
		$relPaxesDist         = $this->getRelPaxesDist();
		$hotelRequest         = $this->getHotelRequest($searchSegmentsHotels, $relPaxesDist);
		$hotelAvailRQ         = $this->getHotelAvailRQ($hotelRequest);
		$response             = $this->getHotelAvail($hotelAvailRQ);

		if ($response->getAvailabilityRS()->getErrors()) {
			foreach ($response->getAvailabilityRS()->getErrors()->getError() as $error) {
				ServiceHotelAvailabilityException::throwBecauseOf($error->getText());
			}

			return;
		}

		return $response->getAvailabilityRS()->getResults()->getHotelResult();
	}

	/**
	 * @param array $hotels_code
	 * @return JP_SearchSegmentsHotels
	 */
	private function getSearchSegmentsHotels(array $hotels_code)
	{
		$searchSegmentHotels  = new JP_SearchSegmentHotels($this->nights->startToString(), $this->nights->endToString(),
			$OriginZone = null, $JPDCode = null,
			$DestinationZone = null);
		$arrayOfString        = new ArrayOfString5();
		$hotelCodes           = $arrayOfString->setHotelCode($hotels_code);
		$searchSegmentsHotels = new JP_SearchSegmentsHotels();
		$searchSegmentsHotels->setSearchSegmentHotels($searchSegmentHotels)
			->setCountryOfResidence($this->country->isoCode())
			->setNights($this->nights->number())
			->setHotelCodes($hotelCodes);

		return $searchSegmentsHotels;
	}

	/**
	 * @return JP_RelPaxesDist
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

		$relPaxDist[0] = new JP_HotelRelPaxDist();
		$relPaxDist[0]->setRelPaxes($arrayOfJP_RelPax);

		$relPaxesDist = new JP_RelPaxesDist();
		$relPaxesDist->setRelPaxDist($relPaxDist);
		return $relPaxesDist;
	}


	/**
	 * @param JP_SearchSegmentsHotels $searchSegmentsHotels
	 * @param $relPaxesDist
	 * @return JP_RequestHotelsAvail
	 */
	private function getHotelRequest(JP_SearchSegmentsHotels $searchSegmentsHotels, $relPaxesDist)
	{
		$hotelRequest = new JP_RequestHotelsAvail();
		$hotelRequest->setSearchSegmentsHotels($searchSegmentsHotels);
		$hotelRequest->setRelPaxesDist($relPaxesDist);

		return $hotelRequest;
	}

	/**
	 * @return JP_HotelAvailAdvancedOptions
	 */
	private function getAdvancedOptions()
	{
		$advancedOptions = new JP_HotelAvailAdvancedOptions();
		$advancedOptions->setShowHotelInfo(false);
		$advancedOptions->setShowOnlyAvailable(true);
		$advancedOptions->setExcludeNonRefundable(false);
		$advancedOptions->setShowCancellationPolicies(true);
		$advancedOptions->setShowAllCombinations(false);
		$advancedOptions->setShowOnlyBestPriceCombination(false);
		$advancedOptions->setShowAllChildrenCombinations(true);

		return $advancedOptions;
	}

	/**
	 * @param JP_RequestHotelsAvail $JP_RequestHotelsAvail
	 * @return JP_HotelAvail
	 */
	private function getHotelAvailRQ(
		JP_RequestHotelsAvail $JP_RequestHotelsAvail
	) {
		$JP_HotelAvailAdvancedOptions = $this->getAdvancedOptions();

		$hotelAvailRQ = new JP_HotelAvail(WebService::JUNIPER_WS_VERSION, $this->juniperWebService->language());
		$hotelAvailRQ->setAdvancedOptions($JP_HotelAvailAdvancedOptions);
		$hotelAvailRQ->setHotelRequest($JP_RequestHotelsAvail);
		$hotelAvailRQ->setLogin($this->juniperWebService->login());

		$jp_pax = [];
		foreach ($this->paxes as $key => $pax) {
			$jp_pax[$key] = new JP_Pax($pax->idPax(), $gender = null);
			$jp_pax[$key]->setAge($pax->age());
		}

		$paxes = new JP_Paxes($AdultsFree = 0, $ChildrenFree = 0);
		$paxes->setPax($jp_pax);
		$hotelAvailRQ->setPaxes($paxes);

		return $hotelAvailRQ;
	}

	/**
	 * @param $hotelAvailRQ
	 * @return \Juniper\Webservice\HotelAvailResponse
	 */
	private function getHotelAvail($hotelAvailRQ)
	{
		$hotelAvail = new HotelAvail($hotelAvailRQ);
		$response   = $this->juniperWebService->service()->HotelAvail($hotelAvail);
		return $response;
	}
}

final class ServiceHotelAvailabilityException extends \Exception
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