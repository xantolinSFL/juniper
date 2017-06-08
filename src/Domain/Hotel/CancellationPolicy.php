<?php


namespace StayForLong\Juniper\Domain\Hotel;


use Carbon\Carbon;

class CancellationPolicy
{
	/** @var Carbon */
	private $dateFrom;

	/** @var Carbon */
	private $dateTo;

	/** @var float */
	private $fixedPrice;

	/** @var float */
	private $percentPrice;
	/**
	 * @var string
	 */
	private $currencyCode;

	/**
	 * CancellationPolicy constructor.
	 * @param Carbon $dateFrom
	 * @param Carbon $dateTo
	 * @param float $fixedPrice
	 * @param float $percentPrice
	 * @param string $currencyCode
	 */
	public function __construct(Carbon $dateFrom, Carbon $dateTo, $fixedPrice, $percentPrice, $currencyCode)
	{
		$this->dateFrom     = $dateFrom;
		$this->dateTo       = $dateTo;
		$this->fixedPrice   = $fixedPrice;
		$this->percentPrice = $percentPrice;
		$this->currencyCode = $currencyCode;
	}

	/**
	 * @return Carbon
	 */
	public function dateFrom(): Carbon
	{
		return $this->dateFrom;
	}

	/**
	 * @return Carbon
	 */
	public function dateTo(): Carbon
	{
		return $this->dateTo;
	}

	/**
	 * @return float
	 */
	public function fixedPrice()
	{
		return $this->fixedPrice;
	}

	/**
	 * @return float
	 */
	public function percentPrice()
	{
		return $this->percentPrice;
	}
	
	/**
	 * @return string
	 */
	public function currencyCode()
	{
		return $this->currencyCode;
	}

}