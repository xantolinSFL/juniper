<?php

namespace StayForLong\Juniper\Infrastructure\Services;

use Juniper\Webservice\JP_Login;

/**
 * Class Login
 * @package StayForLong\Juniper\Infrastructure\Services
 */
class Login
{
	/**
	 * @var JP_Login
	 */
	private $login;

	/**
	 * Login constructor.
	 * @param string $email
	 * @param string $password
	 */
	public function __construct($email, $password)
	{
		$this->login = new JP_Login($password, $email);
	}

	/**
	 * @return JP_Login
	 */
	public function __invoke()
	{
		return $this->login;
	}
}