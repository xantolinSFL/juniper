<?php

namespace StayForLong\Juniper;

class JuniperService
{
	/**
	 * @var \JP_Login
	 */
	protected $login;

	/**
	 * @var \WebServiceJP
	 */
	protected $service;

	/**
	 * @var string
	 */
	protected $language;

	/**
	 * Service constructor.
	 * @param \JP_Login $JP_Login
	 * @param \WebServiceJP $webServiceJP
	 * @param string $language
	 */
	public function __construct(
		\JP_Login $JP_Login,
		\WebServiceJP $webServiceJP,
		$language = ServiceRequest::DEFAULT_LANGUAGE
	) {
		$this->login    = $JP_Login;
		$this->service  = $webServiceJP;
		$this->language = $language;
	}

	/**
	 * @return \JP_Login
	 */
	public function getLogin()
	{
		return $this->login;
	}

	/**
	 * @return \WebServiceJP
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