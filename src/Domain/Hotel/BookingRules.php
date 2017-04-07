<?php

namespace StayForLong\Juniper\Domain\Hotel;

use Juniper\Webservice\JP_BookingCode;
use Juniper\Webservice\JP_HotelOptionBookingRules;

class BookingRules
{
	/**
	 * @var JP_BookingCode
	 */
	private $bookingCode;

	/**
	 * @var string
	 */
	private $hotel_code;

	/**
	 * @var string
	 */
	private $reference;

	/**
	 * @var array
	 */
	private $comments;

	/**
	 * @var float
	 */
	private $min_price;

	/**
	 * @var float
	 */
	private $max_price;

	/**
	 * @var string
	 */
	private $currency;

	/**
	 * BookingRules constructor.
	 * @param JP_HotelOptionBookingRules $bookingRules
	 * @param string $hotel_code
	 * @param string $reference
	 * @param array $comments
	 */
	public function __construct(JP_HotelOptionBookingRules $bookingRules, $hotel_code, $reference, array $comments = [])
	{
		$this->bookingCode = new JP_BookingCode($bookingRules->getBookingCode()->get_(),
			$bookingRules->getBookingCode()->getExpirationDate());

		$this->hotel_code = $hotel_code;
		$this->reference  = $reference;
		$this->comments   = $comments;

		$prices           = $bookingRules->getPriceInformation()->getPrices();
		$number_of_prices = $bookingRules->getPriceInformation()->getPrices()->count();
		$this->currency   = $prices[0]->getCurrency();
		$this->min_price  = $prices[0]->getTotalFixAmounts()->getNett();
		$this->max_price  = $prices[$number_of_prices-1]->getTotalFixAmounts()->getNett();
	}

	/**
	 * @return JP_BookingCode
	 */
	public function bookingCode()
	{
		return $this->bookingCode;
	}

	/**
	 * @return string
	 */
	public function hotelCode()
	{
		return $this->hotel_code;
	}

	/**
	 * @return string
	 */
	public function reference()
	{
		return $this->reference;
	}

	/**
	 * @return array
	 */
	public function comments()
	{
		return $this->comments;
	}

	/**
	 * @return float
	 */
	public function minPrice()
	{
		return $this->min_price;
	}

	/**
	 * @return float
	 */
	public function maxPrice()
	{
		return $this->max_price;
	}

	/**
	 * @return string
	 */
	public function currency()
	{
		return $this->currency;
	}
}