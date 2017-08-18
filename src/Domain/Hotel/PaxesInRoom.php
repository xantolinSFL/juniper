<?php


namespace StayForLong\Juniper\Domain\Hotel;


class PaxesInRoom
{
	/**
	 * @var array
	 */
	private $idPaxes;

	/**
	 * PaxesInRoom constructor.
	 * @param PaxId[] | $idPaxes
	 */
	public function __construct(array $idPaxes)
	{
		$this->idPaxes = $idPaxes;
	}

	/**
	 * @return PaxId[]
	 */
	public function value()
	{
		return $this->idPaxes;
	}
}