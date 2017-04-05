<?php

namespace StayForLong\Juniper\Domain\Hotel;

use Carbon\Carbon;

class Nights
{
	const JUNIPER_DATE_FORMAT = 'Y-m-d';

	/**
	 * @var Carbon
	 */
	private $start;

	/**
	 * @var Carbon
	 */
	private $end;

	/**
	 * Nights constructor.
	 *
	 * @param Carbon $start
	 * @param Carbon $end
	 */
	public function __construct(Carbon $start, Carbon $end)
	{
		$this->start = $start;
		$this->end   = $end;
	}

	/**
	 * @return Carbon
	 */
	public function start()
	{
		return $this->start;
	}

	/**
	 * @return Carbon
	 */
	public function end()
	{
		return $this->end;
	}

	/**
	 * @return string
	 */
	public function startToString()
	{
		return $this->start->format(static::JUNIPER_DATE_FORMAT);
	}

	/**
	 * @return string
	 */
	public function endToString()
	{
		return $this->end->format(static::JUNIPER_DATE_FORMAT);
	}

	/**
	 * @return int
	 */
	public function number()
	{
		return $this->start->diffInDays($this->end);
	}
}