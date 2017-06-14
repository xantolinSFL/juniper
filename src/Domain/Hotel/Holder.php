<?php


namespace StayForLong\Juniper\Domain\Hotel;

class Holder extends Pax
{
	/**
	 * Pax constructor.
	 * @param string $name
	 * @param string $surname
	 */
	public function __construct($name, $surname)
	{
		$this->name    = $name;
		$this->surname = $surname;
	}

}