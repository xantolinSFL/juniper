<?php

namespace StayForLong\Juniper\Infrastructure\Services;

use Juniper\Webservice\JP_Login;
use Juniper\Webservice\WebServiceJP;

/**
 * Class JuniperWebService
 * @package StayForLong\Juniper\Infrastructure\Services
 */
class JuniperWebService
{
	/**
	 * @var Login
	 */
	protected $login;

	/**
	 * @var WebService
	 */
	protected $service;

	/**
	 * @var string
	 */
	protected $language;

	/**
	 * Service constructor.
	 * @param Login $login
	 * @param WebService $webService
	 * @param string $language
	 */
	public function __construct(
		Login $login,
		WebService $webService,
		$language = WebService::DEFAULT_LANGUAGE
	) {
		$this->login    = $login;
		$this->service  = $webService;
		$this->language = $language;
	}

	/**
	 * @return JP_Login
	 */
	public function login()
	{
		return $this->login->getJPLogin();
	}

	/**
	 * @return WebServiceJP
	 */
	public function service()
	{
		return $this->service->getWebServiceJP();
	}

	/**
	 * @return string
	 */
	public function language()
	{
		return $this->language;
	}
	
	/**
	 * @param string $language
	 * @return $this
	 */
	public function setLanguage(string $language)
	{
		$this->language = $language;
		return $this;
	}
}
