<?php

namespace StayForLong\Juniper\Domain\Hotel;

use Juniper\Webservice\ArrayOfJP_Feature;

/**
 * Class Features
 * @package StayForLong\Juniper\Domain\Hotel
 */
class Features
{
	/**
	 * @var array|\$arrayOfJP_Feature
	 */
	private $arrayOfJP_Feature = [];

	/**
	 * Features constructor.
	 * @param ArrayOfJP_Feature $arrayOfJP_Feature
	 */
	public function __construct(ArrayOfJP_Feature $arrayOfJP_Feature)
	{
		$this->arrayOfJP_Feature = $arrayOfJP_Feature;
	}

	/**
	 * @return array
	 */
	public function __invoke()
	{
		$features = [];
		foreach ($this->arrayOfJP_Feature as $feature) {
			$features[] = new Feature($feature);
		}

		return $features;
	}
}