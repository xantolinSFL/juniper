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

	public function __construct($bookingVoucher, $bookingStatus, DateRange $dateRange)
	{

		$this->bookingVoucher = $bookingVoucher;
		$this->bookingStatus  = $bookingStatus;
		$this->dateRange      = $dateRange;
	}

	/**
	 * @param string $clientReference
	 * @return BookingInfo
	 */
	public function setClientReference($clientReference)
	{
		$this->clientReference = $clientReference;

		return $this;
	}

	/**
	 * @param string $hotelCode
	 * @return BookingInfo
	 */
	public function setHotelCode($hotelCode)
	{
		$this->hotelCode = $hotelCode;

		return $this;
	}

	/**
	 * @param string $currency
	 * @return BookingInfo
	 */
	public function setCurrency($currency)
	{
		$this->currency = $currency;

		return $this;
	}

	/**
	 * @param string $amount
	 * @return BookingInfo
	 */
	public function setAmount($amount)
	{
		$this->amount = $amount;

		return $this;
	}

	/**
	 * @return string
	 */
	public function bookingVoucher()
	{
		return $this->bookingVoucher;
	}

	/**
	 * @return string
	 */
	public function bookingStatus()
	{
		return $this->bookingStatus;
	}

	/**
	 * @return DateRange
	 */
	public function dateRange()
	{
		return $this->dateRange;
	}

	/**
	 * @return string
	 */
	public function clientReference()
	{
		return $this->clientReference;
	}

	/**
	 * @return string
	 */
	public function hotelCode()
	{
		return $this->hotelCode;
	}

	/**
	 * @return string
	 */
	public function amount()
	{
		return $this->amount;
	}


	/**
	 * @return string
	 */
	public function currency()
	{
		return $this->currency;
	}

}