<?php

namespace StayForLong\Juniper\Domain\Hotel;

use Juniper\Webservice\ArrayOfJP_ImageLong;
use Juniper\Webservice\ArrayOfJP_MultimediaContent;
use Juniper\Webservice\JP_ContentProvider;
use Juniper\Webservice\JP_HotelCategory;

/**
 * Class Provider
 * @package StayForLong\Juniper\Domain\Hotel
 */
class Provider
{
	/**
	 * @var JP_ContentProvider
	 */
	private $provider;

	/**
	 * Provider constructor.
	 * @param JP_ContentProvider $provider
	 */
	public function __construct(JP_ContentProvider $provider)
	{
		$this->provider = $provider;
	}

	/**
	 * @return string
	 */
	public function getCode()
	{
		return $this->provider->getCode();
	}

	/**
	 * @return string
	 */
	public function getExternalCode()
	{
		return $this->provider->getExternalCode();
	}

	/**
	 * @return JP_HotelCategory
	 */
	public function getHotelCategory()
	{
		return $this->provider->getHotelCategory();
	}

	/**
	 * @return ArrayOfJP_ImageLong
	 */
	public function getImages()
	{
		return $this->provider->getImages();
	}

	/**
	 * @return ArrayOfJP_MultimediaContent
	 */
	public function getMultimediaContents()
	{
		return $this->provider->getMultimediaContents();
	}
}