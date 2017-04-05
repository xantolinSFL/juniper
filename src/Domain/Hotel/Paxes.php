<?php

namespace StayForLong\Juniper\Domain\Hotel;

class Paxes
{
	/**
	 * @var Pax[]
	 */
	private $paxes;

	/**
	 * Paxes constructor.
	 * @param Pax[] $paxes
	 */
	public function __construct(array $paxes)
	{
		$this->paxes = $paxes;
	}

	/**
	 * @return Pax[]
	 */
	public function paxes()
	{
		return $this->paxes;
	}
}