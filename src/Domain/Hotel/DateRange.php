<?php


namespace StayForLong\Juniper\Domain\Hotel;


use Carbon\Carbon;

class DateRange
{
	const JUNIPER_DATE_FORMAT = 'Y-m-d';
	/**
	 * @var Carbon
	 */
	private $dateStart;
	/**
	 * @var Carbon
	 */
	private $dateEnd;

	/**
	 * DateRange constructor.
	 * @param Carbon $dateStart
	 * @param Carbon $dateEnd
	 */
	public function __construct(Carbon $dateStart, Carbon $dateEnd)
	{
		$this->dateStart = $dateStart;
		$this->dateEnd   = $dateEnd;

		$this->checkIsSameDate();
		$this->isLessThanDate();
	}

	/**
	 * @return Carbon
	 */
	public function dateStart()
	{
		return $this->dateStart;
	}

	/**
	 * @return Carbon
	 */
	public function dateEnd()
	{
		return $this->dateEnd;
	}

	/**
	 * @return int
	 */
	public function diffInDays()
	{
		return $this->dateEnd()->diffInDays($this->dateStart(), true);
	}


	/**
	 * @return string
	 */
	public function startToString()
	{
		return $this->dateStart->format(static::JUNIPER_DATE_FORMAT);
	}

	/**
	 * @return string
	 */
	public function endToString()
	{
		return $this->dateEnd->format(static::JUNIPER_DATE_FORMAT);
	}

	/**
	 * @throws DateRangeException
	 */
	private function isLessThanDate()
	{
		if ($this->dateEnd()->lessThan($this->dateStart())) {
			throw DateRangeException::ofIsLessThan($this->dateStart(), $this->dateEnd());
		}
	}

	/**
	 * @throws DateRangeException
	 */
	private function checkIsSameDate()
	{
		if ($this->dateStart()->isSameDay($this->dateEnd())) {
			throw DateRangeException::ofIsSameDate($this->dateStart(), $this->dateEnd());
		}
	}
}

final class DateRangeException extends \Exception
{
	public static function ofIsSameDate(Carbon $dateStart, Carbon $dateEnd)
	{
		$message = "The start date %s is the same than end date %s";

		return new self(sprintf($message, $dateStart->toDateString(), $dateEnd->toDateString()));
	}

	public static function ofIsLessThan(Carbon $dateToCompare, Carbon $dateBase)
	{
		$message = "The date %s is less than date %s";

		return new self(sprintf($message, $dateToCompare->toDateString(), $dateBase->toDateString()));
	}
}
