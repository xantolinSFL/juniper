<?php

namespace StayForLong\Juniper;

require_once __DIR__.'/../lib/autoload.php';

/**
 * Class Login
 * @package StayForLong\Juniper
 */
class Login
{
	/**
	 * @var \JP_Login
	 */
	private $login;

	/**
	 * Login constructor.
	 * @param $email
	 * @param $password
	 */
	public function __construct($email, $password)
	{
		$this->login = new \JP_Login($email, $password);
	}

	/**
	 * @return \JP_Login
	 */
	public function __invoke()
	{
		return $this->login;
	}
}