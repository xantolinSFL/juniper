<?php

namespace StayForLong\Juniper\Infrastructure\Services;

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
	 * @return Login
	 */
	public function getLogin()
	{
		return $this->login;
	}

	/**
	 * @return WebService
	 */
	public function getService()
	{
		return $this->service;
	}

	/**
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}
}