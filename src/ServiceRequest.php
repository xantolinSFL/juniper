<?php

namespace StayForLong\Juniper;

require_once __DIR__.'/../lib/autoload.php';

/**
 * Class ServiceRequest
 * @package StayForLong\Juniper
 */
class ServiceRequest
{
	const JUNIPER_WS_VERSION = "1.1";

	const DEFAULT_LANGUAGE = "en";

	/**
	 * @var \WebServiceJP
	 */
	private $service;

	/**
	 * ServiceRequest constructor.
	 */
	public function __construct()
	{
		$this->service = new \WebServiceJP([
				"compression" => SOAP_COMPRESSION_ACCEPT
					| SOAP_COMPRESSION_GZIP
					| SOAP_COMPRESSION_DEFLATE,
			]
		);
	}

	/**
	 * @return \WebServiceJP
	 */
	public function __invoke()
	{
		return $this->service;
	}
}