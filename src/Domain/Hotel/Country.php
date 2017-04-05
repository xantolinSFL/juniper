<?php

namespace StayForLong\Juniper\Domain\Hotel;

class Country
{
	/**
	 * @var string
	 */
	private $iso_code;

	/**
	 * @var string
	 */
	private $name;

	/**
	 * Country constructor.
	 * @param string $iso_code
	 * @param string $name
	 */
	public function __construct($iso_code, $name = "")
	{
		$this->iso_code = $iso_code;
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function isoCode()
	{
		return $this->iso_code;
	}
}