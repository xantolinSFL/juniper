<?php

namespace StayForLong\Juniper\Domain\Hotel;

use Juniper\Webservice\ArrayOfJP_Description;

/**
 * Class Descriptions
 * @package StayForLong\Juniper\Domain\Hotel
 */
class Descriptions
{
	/**
	 * @var ArrayOfJP_Description
	 */
	private $arrayOfJP_Description = [];

	/**
	 * Descriptions constructor.
	 * @param ArrayOfJP_Description $arrayOfJP_Description
	 */
	public function __construct(ArrayOfJP_Description $arrayOfJP_Description)
	{
		$this->arrayOfJP_Description = $arrayOfJP_Description;
	}

	/**
	 * @return array
	 */
	public function __invoke()
	{
		$descriptions = [];
		foreach ($this->arrayOfJP_Description as $JP_description) {
			$description  =new Description($JP_description);
			$type = $description->getType();
			$descriptions[$type] = $description;
		}

		return $descriptions;
	}
}