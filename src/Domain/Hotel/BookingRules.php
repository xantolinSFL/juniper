<?php

namespace StayForLong\Juniper\Domain\Hotel;

use Juniper\Webservice\JP_BookingCode;

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

	/** @var array */
	private $cancellationPolicies;

	/** @var float */
	private $recommended;

	/**
	 * BookingRules constructor.
	 * @param JP_BookingCode $code
	 * @param string $hotel_code
	 * @param string $reference
	 */
	public function __construct(JP_BookingCode $code, $hotel_code, $reference)
	{
		$this->bookingCode = $code;
		$this->hotel_code  = $hotel_code;
		$this->reference   = $reference;
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

	/**
	 * @param array $comments
	 * @return $this
	 */
	public function setComments(array $comments)
	{
		$this->comments = $comments;
		return $this;
	}

	/**
	 * @param float $min_price
	 * @return $this
	 */
	public function setMinPrice(float $min_price)
	{
		$this->min_price = $min_price;
		return $this;
	}

	/**
	 * @param float $max_price
	 * @return $this
	 */
	public function setMaxPrice(float $max_price)
	{
		$this->max_price = $max_price;
		return $this;
	}

	/**
	 * @return float | null
	 */
	public function recommended()
	{
		return $this->recommended;
	}

	/**
	 * @param float $recommended
	 * @return $this
	 */
	public function setRecommended(float $recommended = null)
	{
		$this->recommended = $recommended;
		return $this;
	}

	/**
	 * @param string $currency
	 * @return $this
	 */
	public function setCurrency(string $currency)
	{
		$this->currency = $currency;
		return $this;
	}

	/**
	 * @return array
	 */
	public function cancellationPolicies()
	{
		return $this->cancellationPolicies;
	}

	/**
	 * @param array $cancellationPolicies
	 * @return $this
	 */
	public function setCancellationPolicies(array $cancellationPolicies)
	{
		$this->cancellationPolicies = $cancellationPolicies;
		return $this;
	}

}