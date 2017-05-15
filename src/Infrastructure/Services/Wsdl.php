<?php

namespace StayForLong\Juniper\Infrastructure\Services;


class Wsdl
{
	/** @var string */
	private $wsdl;

	/**
	 * Wsdl constructor.
	 * @param string $wsdl
	 */
	public function __construct($wsdl)
	{
		$this->wsdl = $wsdl;
	}

	/**
	 * @return string
	 */
	public function url()
	{
		return $this->wsdl;
	}

}