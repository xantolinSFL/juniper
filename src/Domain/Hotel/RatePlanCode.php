<?php

namespace StayForLong\Juniper\Domain\Hotel;

class Rate
{
	/**
	 * @var string
	 */
	private $rate_plan_code;

	/**
	 * @var Nights
	 */
	private $nights;

	/**
	 * Rate constructor.
	 * @param $rate_plan_code
	 * @param Nights $nights
	 */
	public function __construct($rate_plan_code, Nights $nights)
	{
		$this->rate_plan_code = $rate_plan_code;
		$this->nights         = $nights;
	}

	/**
	 * @return string
	 */
	public function planCode()
	{
		return $this->rate_plan_code;
	}

	/**
	 * @return string
	 */
	public function start()
	{
		return $this->nights->startToString();
	}

	/**
	 * @return string
	 */
	public function end()
	{
		return $this->nights->endToString();
	}
}