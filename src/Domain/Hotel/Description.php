<?php

namespace StayForLong\Juniper\Domain\Hotel;

use Juniper\Webservice\JP_Description;

/**
 * Class Descriptions
 * @package StayForLong\Juniper\Domain\Hotel
 */
class Description
{
	/**
	 * @var JP_Description
	 */
	private $description;

	/**
	 * Description constructor.
	 * @param JP_Description $description
	 */
	public function __construct(JP_Description $description)
	{
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->description->getType();
	}

	/**
	 * @return string
	 */
	public function text()
	{
		return $this->description->get_();
	}
}