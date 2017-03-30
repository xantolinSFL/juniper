<?php

namespace StayForLong\Juniper\Hotels;

class HotelDescriptions
{
	/**
	 * @var array|\ArrayOfJP_Description
	 */
	private $arrayOfJP_Description = [];

	/**
	 * HotelDescriptions constructor.
	 * @param \ArrayOfJP_Description $arrayOfJP_Description
	 */
	public function __construct(\ArrayOfJP_Description $arrayOfJP_Description)
	{
		$this->arrayOfJP_Description = $arrayOfJP_Description;
	}

	/**
	 * @return array
	 */
	public function __invoke()
	{
		$descriptions = [];
		foreach ($this->arrayOfJP_Description as $description) {
			$type = $description->getType();
			$descriptions[$type] = [
				"text" => $description->get_(),
				"type" => $description->getType(),
			];
		}

		return $descriptions;
	}
}