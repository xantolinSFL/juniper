<?php


namespace StayForLong\Juniper\Application\Hotel;


use Carbon\Carbon;
use Juniper\Webservice\JP_ReadRQ;
use Juniper\Webservice\BookingDate;
use Juniper\Webservice\ReadBooking;
use Juniper\Webservice\BookingList;
use Juniper\Webservice\JP_ReadRequest;
use Juniper\Webservice\JP_BookingListRQ;
use Juniper\Webservice\ReadBookingResponse;
use Juniper\Webservice\JP_BookingListRequest;
use StayForLong\Juniper\Application\Hotel\Exception\BookingInfoListException;
use StayForLong\Juniper\Domain\Hotel\DateRange;
use StayForLong\Juniper\Domain\Hotel\BookingInfo;
use StayForLong\Juniper\Infrastructure\Services\WebService;
use StayForLong\Juniper\Infrastructure\Services\JuniperWebService;

class BookingInfoList
{
	/**
	 * @var JuniperWebService
	 */
	private $juniperWebService;

	/**
	 * @var DateRange
	 */
	private $dateRange;

	/**
	 * BookingList constructor.
	 * @param JuniperWebService $juniperWebService
	 * @param DateRange $dateRange
	 */
	public function __construct(JuniperWebService $juniperWebService, DateRange $dateRange)
	{
		$this->juniperWebService = $juniperWebService;
		$this->dateRange         = $dateRange;
	}

	/**
	 * @return BookingInfo[]
	 */
	public function __invoke()
	{
		$bookingListRQ = new JP_BookingListRQ(WebService::JUNIPER_WS_VERSION, WebService::DEFAULT_LANGUAGE);
		$bookingListRQ->setLogin($this->juniperWebService->login());

		$bookingListRequest = new JP_BookingListRequest();

		$bookingListRequest->setBookingDate(new BookingDate(
				$this->dateRange->startToString(),
				$this->dateRange->endToString()
			)

		);

		$bookingListRQ->setBookingListRequest($bookingListRequest);

		$response = $this->juniperWebService->service()->BookingList(new BookingList($bookingListRQ));

		$bookingList = [];

		foreach ($response->getBookingListRS()->getReservations() as $reservation) {

			$booking = $this->getBooking($reservation->getLocator());

			$bookingList[] = $this->transformBooking($booking);
		}


		return $bookingList;
	}

	/**
	 * @param $reservationLocator
	 * @return ReadBookingResponse
	 */
	private function getBooking(string $reservationLocator)
	{
		$readBookingRQ = new JP_ReadRQ(WebService::JUNIPER_WS_VERSION, WebService::JUNIPER_WS_VERSION);
		$readBookingRQ->setLogin($this->juniperWebService->login());
		$readBookingRQ->setReadRequest(new JP_ReadRequest($reservationLocator));
		$readBooking = new ReadBooking($readBookingRQ);

		return $this->juniperWebService->service()->ReadBooking($readBooking);

	}

	/**
	 * @param ReadBookingResponse $bookingResponse
	 * @return BookingInfo
	 */
	private function transformBooking(ReadBookingResponse $bookingResponse): BookingInfo
	{
		if (empty($reservation = $bookingResponse->getBookingRS()->getReservations()[0])) {
			$message = sprintf('No reservations in Juniper Booking Reservation response, throwed in class %s',
				__CLASS__);
			BookingInfoListException::throwBecauseOf($message);
		}
		if (empty($hotelData = $reservation->getItems()->getHotelItem()[0])) {
			$message = sprintf('No hotel item in Juniper Booking Reservation response, throwed in class %s',
				__CLASS__);
			BookingInfoListException::throwBecauseOf($message);
		}
		$reservation = $bookingResponse->getBookingRS()->getReservations()[0];

		$hotelData = $reservation->getItems()->getHotelItem()[0];

		$bookingInfo = new BookingInfo(
			$reservation->getLocator(),
			$reservation->getStatus(),
			new DateRange(
				new Carbon($hotelData->getStart()),
				new Carbon($hotelData->getEnd())
			)
		);
		$bookingInfo->setClientReference($reservation->getExternalBookingReference())
			->setHotelCode($hotelData->getHotelInfo()->getCode())
			->setAmount($hotelData->getPrices()->getPrice()[0]->getTotalFixAmounts()->getService()->getAmount())
			->setCurrency($hotelData->getPrices()->current()->getCurrency());


		return $bookingInfo;
	}
}
