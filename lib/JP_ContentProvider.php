<?php

namespace Juniper\Webservice;

class JP_ContentProvider
{

    /**
     * @var ArrayOfJP_ImageLong $Images
     */
    protected $Images = null;

    /**
     * @var ArrayOfJP_MultimediaContent $MultimediaContents
     */
    protected $MultimediaContents = null;

    /**
     * @var JP_HotelCategory $HotelCategory
     */
    protected $HotelCategory = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $ExternalCode
     */
    protected $ExternalCode = null;

    /**
     * @param string $Code
     * @param string $ExternalCode
     */
    public function __construct($Code, $ExternalCode)
    {
      $this->Code = $Code;
      $this->ExternalCode = $ExternalCode;
    }

    /**
     * @return ArrayOfJP_ImageLong
     */
    public function getImages()
    {
      return $this->Images;
    }

    /**
     * @param ArrayOfJP_ImageLong $Images
     * @return JP_ContentProvider
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

    /**
     * @return ArrayOfJP_MultimediaContent
     */
    public function getMultimediaContents()
    {
      return $this->MultimediaContents;
    }

    /**
     * @param ArrayOfJP_MultimediaContent $MultimediaContents
     * @return JP_ContentProvider
     */
    public function setMultimediaContents($MultimediaContents)
    {
      $this->MultimediaContents = $MultimediaContents;
      return $this;
    }

    /**
     * @return JP_HotelCategory
     */
    public function getHotelCategory()
    {
      return $this->HotelCategory;
    }

    /**
     * @param JP_HotelCategory $HotelCategory
     * @return JP_ContentProvider
     */
    public function setHotelCategory($HotelCategory)
    {
      $this->HotelCategory = $HotelCategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return JP_ContentProvider
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalCode()
    {
      return $this->ExternalCode;
    }

    /**
     * @param string $ExternalCode
     * @return JP_ContentProvider
     */
    public function setExternalCode($ExternalCode)
    {
      $this->ExternalCode = $ExternalCode;
      return $this;
    }

}
