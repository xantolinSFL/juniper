<?php


namespace StayForLong\Juniper\Domain\Hotel;


class BookingInfo
{
	/**
	 * @var string
	 */
	private $bookingVoucher;
	/**
	 * @var string
	 */
	private $bookingStatus;
	/**
	 * @var DateRange
	 */
	private $dateRange;

	/**
	 * @var string
	 */
	private $clientReference;
	/**
	 * @var string
	 */
	private $hotelCode;
	/**
	 * @var string
	 */
	private $amount;
	/**
	 * @var string
	 */
	private $currency;

	public function __construct(string $bookingVoucher, string $bookingStatus, DateRange $dateRange)
	{

		$this->bookingVoucher = $bookingVoucher;
		$this->bookingStatus = $bookingStatus;
		$this->dateRange = $dateRange;
	}

	/**
	 * @param string $clientReference
	 * @return BookingInfo
	 */
	public function setClientReference(string $clientReference): BookingInfo
	{
		$this->clientReference = $clientReference;

		return $this;
	}

	/**
	 * @param string $hotelCode
	 * @return BookingInfo
	 */
	public function setHotelCode(string $hotelCode): BookingInfo
	{
		$this->hotelCode = $hotelCode;

		return $this;
	}

	/**
	 * @param string $amount
	 * @return BookingInfo
	 */
	public function setAmount(string $amount): BookingInfo
	{
		$this->amount = $amount;

		return $this;
	}

	/**
	 * @return string
	 */
	public function BookingVoucher(): string
	{
		return $this->bookingVoucher;
	}

	/**
	 * @return string
	 */
	public function BookingStatus(): string
	{
		return $this->bookingStatus;
	}

	/**
	 * @return DateRange
	 */
	public function DateRange(): DateRange
	{
		return $this->dateRange;
	}

	/**
	 * @return string
	 */
	public function ClientReference(): string
	{
		return $this->clientReference;
	}

	/**
	 * @return string
	 */
	public function HotelCode(): string
	{
		return $this->hotelCode;
	}

	/**
	 * @return string
	 */
	public function Amount(): string
	{
		return $this->amount;
	}

	/**
	 * @param string $currency
	 * @return BookingInfo
	 */
	public function setCurrency(string $currency): BookingInfo
	{
		$this->currency = $currency;

		return $this;
	}

	/**
	 * @return string
	 */
	public function Currency(): string
	{
		return $this->currency;
	}

}