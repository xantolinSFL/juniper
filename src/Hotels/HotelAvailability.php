<?php

namespace StayForLong\Juniper;

use Carbon\Carbon;

class HotelAvailability
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

		$result = $response->getAvailabilityRS()->getResults();
	}

	/**
	 * @param array $hotels_code
	 * @param string $start
	 * @param string $end
	 * @param $country_of_residence
	 * @return \JP_SearchSegmentsHotels
	 */
	private function getSearchSegmentsHotels(array $hotels_code, $start, $end, $country_of_residence)
	{
		$nights = Carbon::parse($start)->diffInDays(Carbon::parse($end));

		$searchSegmentHotels = new \JP_SearchSegmentHotels($start, $end, $OriginZone = null, $JPDCode = null,
			$DestinationZone = null);

		$arrayOfString        = new \ArrayOfString5();
		$hotelCodes           = $arrayOfString->setHotelCode($hotels_code);
		$searchSegmentsHotels = new \JP_SearchSegmentsHotels();
		$searchSegmentsHotels->setSearchSegmentHotels($searchSegmentHotels)
			->setCountryOfResidence($country_of_residence)
			->setNights($nights)
			->setHotelCodes($hotelCodes);
		return $searchSegmentsHotels;
	}

	/**
	 * @param array $paxes
	 * @return \JP_RelPaxesDist
	 */
	private function getRelPaxesDist(array $paxes)
	{
		$relPax = [];
		foreach ($paxes as $key => $pax_parameter) {
			$relPax[] = new \JP_RelPax($key + 1);
		}

		$arrayOfJP_RelPax = new \ArrayOfJP_RelPax();
		$arrayOfJP_RelPax->setRelPax($relPax);

		$relPaxDist[0] = new \JP_HotelRelPaxDist();
		$relPaxDist[0]->setRelPaxes($arrayOfJP_RelPax);

		$relPaxesDist = new \JP_RelPaxesDist();
		$relPaxesDist->setRelPaxDist($relPaxDist);
		return $relPaxesDist;
	}

	/**
	 * @param \JP_SearchSegmentsHotels $searchSegmentsHotels
	 * @param \JP_RelPaxesDist $relPaxesDist
	 * @return \JP_RequestHotelsAvail
	 */
	private function getHotelRequest($searchSegmentsHotels, $relPaxesDist)
	{
		$hotelRequest = new \JP_RequestHotelsAvail();
		$hotelRequest->setSearchSegmentsHotels($searchSegmentsHotels);
		$hotelRequest->setRelPaxesDist($relPaxesDist);
		return $hotelRequest;
	}

	/**
	 * @return \JP_HotelAvailAdvancedOptions
	 */
	private function getAdvancedOptions()
	{
		$advancedOptions = new \JP_HotelAvailAdvancedOptions();
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
	 * @param $advancedOptions
	 * @param $hotelRequest
	 * @return \JP_HotelAvail
	 */
	private function getHotelAvailRQ(array $paxes, $advancedOptions, $hotelRequest)
	{
		$hotelAvailRQ = new \JP_HotelAvail(ServiceRequest::JUNIPER_WS_VERSION, $this->juniperService->getLanguage());
		$hotelAvailRQ->setAdvancedOptions($advancedOptions);
		$hotelAvailRQ->setHotelRequest($hotelRequest);
		$hotelAvailRQ->setLogin($this->juniperService->getLogin());

		$pax = [];
		foreach ($paxes as $key => $pax_parameter) {
			$pax[$key] = new \JP_Pax($key + 1, $gender = null);
			$pax[$key]->setAge(30);
		}

		$paxes = new \JP_Paxes($AdultsFree = 0, $ChildrenFree = 0);
		$paxes->setPax($pax);
		$hotelAvailRQ->setPaxes($paxes);
		return $hotelAvailRQ;
	}

	/**
	 * @param $hotelAvailRQ
	 * @return \HotelAvailResponse
	 */
	private function getHotelAvail($hotelAvailRQ)
	{
		$hotelAvail = new \HotelAvail($hotelAvailRQ);
		$response   = $this->juniperService->getService()->HotelAvail($hotelAvail);
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