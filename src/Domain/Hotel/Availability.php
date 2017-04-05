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
use StayForLong\Juniper\Infrastructure\Services\ServiceRequest;

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
	 * @param array $paxes
	 * @param $start
	 * @param $end
	 * @param $country_of_residence
	 */
	public function __invoke(array $hotels_code, array $paxes, $start, $end, $country_of_residence)
	{
		if (empty($hotels_code)) {
			ServiceHotelAvailabilityException::throwBecauseOfHotelCodeEmpty();
		}

		$searchSegmentsHotels = $this->getSearchSegmentsHotels($hotels_code, $start, $end, $country_of_residence);
		$relPaxesDist         = $this->getRelPaxesDist($paxes);
		$hotelRequest         = $this->getHotelRequest($searchSegmentsHotels, $relPaxesDist);
		$advancedOptions      = $this->getAdvancedOptions();
		$hotelAvailRQ         = $this->getHotelAvailRQ($paxes, $advancedOptions, $hotelRequest);
		$response             = $this->getHotelAvail($hotelAvailRQ);

		if ($response->getAvailabilityRS()->getErrors()) {
			foreach ($response->getAvailabilityRS()->getErrors()->getError() as $error) {
				ServiceHotelAvailabilityException::throwBecauseOf($error->getText());
			}
			return;
		}

		return $response->getAvailabilityRS()->getResults();
	}

	/**
	 * @param array $hotels_code
	 * @param $start
	 * @param $end
	 * @param $country_of_residence
	 * @return JP_SearchSegmentsHotels
	 */
	private function getSearchSegmentsHotels(array $hotels_code, $start, $end, $country_of_residence)
	{
		$nights = Carbon::parse($start)->diffInDays(Carbon::parse($end));

		$searchSegmentHotels = new JP_SearchSegmentHotels($start, $end, $OriginZone = null, $JPDCode = null,
			$DestinationZone = null);

		$arrayOfString        = new ArrayOfString5();
		$hotelCodes           = $arrayOfString->setHotelCode($hotels_code);
		$searchSegmentsHotels = new JP_SearchSegmentsHotels();
		$searchSegmentsHotels->setSearchSegmentHotels($searchSegmentHotels)
			->setCountryOfResidence($country_of_residence)
			->setNights($nights)
			->setHotelCodes($hotelCodes);

		return $searchSegmentsHotels;
	}

	/**
	 * @param array $paxes
	 * @return JP_RelPaxesDist
	 */
	private function getRelPaxesDist(array $paxes)
	{
		$relPax = [];
		foreach ($paxes as $key => $pax_parameter) {
			$relPax[] = new JP_RelPax($key + 1);
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
	 * @param array $paxes
	 * @param JP_HotelAvailAdvancedOptions $JP_HotelAvailAdvancedOptions
	 * @param JP_RequestHotelsAvail $JP_RequestHotelsAvail
	 * @return JP_HotelAvail
	 */
	private function getHotelAvailRQ(array $paxes, JP_HotelAvailAdvancedOptions $JP_HotelAvailAdvancedOptions, JP_RequestHotelsAvail $JP_RequestHotelsAvail)
	{
		$hotelAvailRQ = new JP_HotelAvail(ServiceRequest::JUNIPER_WS_VERSION, $this->juniperWebService->getLanguage());
		$hotelAvailRQ->setAdvancedOptions($JP_HotelAvailAdvancedOptions);
		$hotelAvailRQ->setHotelRequest($JP_RequestHotelsAvail);
		$hotelAvailRQ->setLogin($this->juniperWebService->getLogin());

		$pax = [];
		foreach ($paxes as $key => $pax_parameter) {
			$pax[$key] = new JP_Pax($key + 1, $gender = null);
			$pax[$key]->setAge(30);
		}

		$paxes = new JP_Paxes($AdultsFree = 0, $ChildrenFree = 0);
		$paxes->setPax($pax);
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
		$response   = $this->juniperWebService->getService()->HotelAvail($hotelAvail);
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