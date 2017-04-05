<?php

namespace StayForLong\Juniper\Domain\Hotel;

use Juniper\Webservice\ArrayOfJP_ContentProvider;

/**
 * Class Providers
 * @package StayForLong\Juniper\Domain\Hotel
 */
class Providers
{
	/**
	 * @var ArrayOfJP_ContentProvider
	 */
	private $arrayOfJP_ContentProvider;

	/**
	 * Provider constructor.
	 * @param $arrayOfJP_ContentProvider $arrayOfJP_ContentProvider
	 */
	public function __construct(ArrayOfJP_ContentProvider $arrayOfJP_ContentProvider)
	{
		$this->arrayOfJP_ContentProvider = $arrayOfJP_ContentProvider;
	}

	/**
	 * @return array
	 */
	public function __invoke()
	{
		$providers = [];
		foreach ($this->arrayOfJP_ContentProvider as $contentProvider) {
			$providers[] = new Provider($contentProvider);
		}

		return $providers;
	}


}