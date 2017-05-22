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
	 * CancellationPolicy constructor.
	 * @param Carbon $dateFrom
	 * @param Carbon $dateTo
	 * @param float $fixedPrice
	 * @param float $percentPrice
	 */
	public function __construct(Carbon $dateFrom, Carbon $dateTo, $fixedPrice, $percentPrice)
	{
		$this->dateFrom     = $dateFrom;
		$this->dateTo       = $dateTo;
		$this->fixedPrice   = $fixedPrice;
		$this->percentPrice = $percentPrice;
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
	
}