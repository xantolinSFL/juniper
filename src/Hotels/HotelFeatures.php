<?php

namespace StayForLong\Juniper\Hotels;

class HotelFeatures
{
	/**
	 * @var array|\$arrayOfJP_Feature
	 */
	private $arrayOfJP_Feature = [];

	/**
	 * HotelDescriptions constructor.
	 * @param \ArrayOfJP_Feature $arrayOfJP_Feature
	 */
	public function __construct(\ArrayOfJP_Feature $arrayOfJP_Feature)
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
			$features[] = [
				"feature" => $feature->get_(),
				"type" => $feature->getType(),
			];
		}

		return $features;
	}
}