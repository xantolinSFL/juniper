<?php

namespace StayForLong\Juniper\Infrastructure\Services;

use Juniper\Webservice\WebServiceJP;

/**
 * Class ServiceRequest
 * @package StayForLong\Juniper\Infrastructure\Services
 */
class WebService
{
	const JUNIPER_WS_VERSION = "1.1";

	const DEFAULT_LANGUAGE = "en";

	/**
	 * @var WebServiceJP
	 */
	private $service;

	/**
	 * ServiceRequest constructor.
	 * @param Wsdl $wsdl
	 * @param bool $trace
	 */
	public function __construct(Wsdl $wsdl = null, $trace = false)
	{
		$wsdl_url = (null == $wsdl) ? null : $wsdl->url();

		$this->service = new WebServiceJP([
			"compression" => SOAP_COMPRESSION_ACCEPT
				| SOAP_COMPRESSION_GZIP
				| SOAP_COMPRESSION_DEFLATE,
			"trace" => $trace,
		],
			$wsdl_url
		);
	}

	/**
	 * @return WebServiceJP
	 */
	public function getWebServiceJP()
	{
		return $this->service;
	}
}