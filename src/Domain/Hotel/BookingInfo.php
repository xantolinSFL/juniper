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
	public function setClientReference(string $clientReference)
	{
		$this->clientReference = $clientReference;

		return $this;
	}

	/**
	 * @param string $hotelCode
	 * @return BookingInfo
	 */
	public function setHotelCode(string $hotelCode)
	{
		$this->hotelCode = $hotelCode;

		return $this;
	}

	/**
	 * @param string $amount
	 * @return BookingInfo
	 */
	public function setAmount(string $amount)
	{
		$this->amount = $amount;

		return $this;
	}

	/**
	 * @return string
	 */
	public function BookingVoucher()
	{
		return $this->bookingVoucher;
	}

	/**
	 * @return string
	 */
	public function BookingStatus()
	{
		return $this->bookingStatus;
	}

	/**
	 * @return DateRange
	 */
	public function DateRange()
	{
		return $this->dateRange;
	}

	/**
	 * @return string
	 */
	public function ClientReference()
	{
		return $this->clientReference;
	}

	/**
	 * @return string
	 */
	public function HotelCode()
	{
		return $this->hotelCode;
	}

	/**
	 * @return string
	 */
	public function Amount()
	{
		return $this->amount;
	}

	/**
	 * @param string $currency
	 * @return BookingInfo
	 */
	public function setCurrency(string $currency)
	{
		$this->currency = $currency;

		return $this;
	}

	/**
	 * @return string
	 */
	public function Currency()
	{
		return $this->currency;
	}

}