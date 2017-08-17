<?php


namespace StayForLong\Juniper\Domain\Hotel;


class PaxId
{
	/**
	 * @var int
	 */
	private $pax_id;

	/**
	 * PaxId constructor.
	 * @param int $pax_id
	 */
	public function __construct(int $pax_id)
	{
		$this->pax_id = $pax_id;
	}

	/**
	 * @return int
	 */
	public function value(): int
	{
		return $this->pax_id;
	}
}