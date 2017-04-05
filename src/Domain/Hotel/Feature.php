<?php

namespace StayForLong\Juniper\Domain\Hotel;

use Juniper\Webservice\JP_Feature;

/**
 * Class Feature
 * @package StayForLong\Juniper\Domain\Hotel
 */
class Feature
{
	/**
	 * @var JP_Feature
	 */
	private $feature;

	/**
	 * Description constructor.
	 * @param JP_Feature $feature
	 */
	public function __construct(JP_Feature $feature)
	{
		$this->feature = $feature;
	}

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->feature->getType();
	}

	/**
	 * @return string
	 */
	public function name()
	{
		return $this->feature->get_();
	}
}