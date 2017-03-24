<?php

class JP_PackageContent
{

    /**
     * @var string $PackageName
     */
    protected $PackageName = null;

    /**
     * @var ArrayOfJP_PackageZone $Origins
     */
    protected $Origins = null;

    /**
     * @var ArrayOfJP_PackageZone $Destinations
     */
    protected $Destinations = null;

    /**
     * @var ArrayOfJP_PackageZone $StayDestinations
     */
    protected $StayDestinations = null;

    /**
     * @var ArrayOfJP_PackageDate $Dates
     */
    protected $Dates = null;

    /**
     * @var ArrayOfJP_PriceFrom $Prices
     */
    protected $Prices = null;

    /**
     * @var ArrayOfString1 $Images
     */
    protected $Images = null;

    /**
     * @var ArrayOfJP_Description $Descriptions
     */
    protected $Descriptions = null;

    /**
     * @var JP_PackageCalendarPriceItems[] $PackageCalendarPriceItems
     */
    protected $PackageCalendarPriceItems = null;

    /**
     * @var ArrayOfJP_ProductType $ProductTypes
     */
    protected $ProductTypes = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var duration $Duration
     */
    protected $Duration = null;

    /**
     * @var boolean $Master
     */
    protected $Master = null;

    /**
     * @param string $Code
     * @param duration $Duration
     * @param boolean $Master
     */
    public function __construct($Code, $Duration, $Master)
    {
      $this->Code = $Code;
      $this->Duration = $Duration;
      $this->Master = $Master;
    }

    /**
     * @return string
     */
    public function getPackageName()
    {
      return $this->PackageName;
    }

    /**
     * @param string $PackageName
     * @return JP_PackageContent
     */
    public function setPackageName($PackageName)
    {
      $this->PackageName = $PackageName;
      return $this;
    }

    /**
     * @return ArrayOfJP_PackageZone
     */
    public function getOrigins()
    {
      return $this->Origins;
    }

    /**
     * @param ArrayOfJP_PackageZone $Origins
     * @return JP_PackageContent
     */
    public function setOrigins($Origins)
    {
      $this->Origins = $Origins;
      return $this;
    }

    /**
     * @return ArrayOfJP_PackageZone
     */
    public function getDestinations()
    {
      return $this->Destinations;
    }

    /**
     * @param ArrayOfJP_PackageZone $Destinations
     * @return JP_PackageContent
     */
    public function setDestinations($Destinations)
    {
      $this->Destinations = $Destinations;
      return $this;
    }

    /**
     * @return ArrayOfJP_PackageZone
     */
    public function getStayDestinations()
    {
      return $this->StayDestinations;
    }

    /**
     * @param ArrayOfJP_PackageZone $StayDestinations
     * @return JP_PackageContent
     */
    public function setStayDestinations($StayDestinations)
    {
      $this->StayDestinations = $StayDestinations;
      return $this;
    }

    /**
     * @return ArrayOfJP_PackageDate
     */
    public function getDates()
    {
      return $this->Dates;
    }

    /**
     * @param ArrayOfJP_PackageDate $Dates
     * @return JP_PackageContent
     */
    public function setDates($Dates)
    {
      $this->Dates = $Dates;
      return $this;
    }

    /**
     * @return ArrayOfJP_PriceFrom
     */
    public function getPrices()
    {
      return $this->Prices;
    }

    /**
     * @param ArrayOfJP_PriceFrom $Prices
     * @return JP_PackageContent
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return ArrayOfString1
     */
    public function getImages()
    {
      return $this->Images;
    }

    /**
     * @param ArrayOfString1 $Images
     * @return JP_PackageContent
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

    /**
     * @return ArrayOfJP_Description
     */
    public function getDescriptions()
    {
      return $this->Descriptions;
    }

    /**
     * @param ArrayOfJP_Description $Descriptions
     * @return JP_PackageContent
     */
    public function setDescriptions($Descriptions)
    {
      $this->Descriptions = $Descriptions;
      return $this;
    }

    /**
     * @return JP_PackageCalendarPriceItems[]
     */
    public function getPackageCalendarPriceItems()
    {
      return $this->PackageCalendarPriceItems;
    }

    /**
     * @param JP_PackageCalendarPriceItems[] $PackageCalendarPriceItems
     * @return JP_PackageContent
     */
    public function setPackageCalendarPriceItems(array $PackageCalendarPriceItems = null)
    {
      $this->PackageCalendarPriceItems = $PackageCalendarPriceItems;
      return $this;
    }

    /**
     * @return ArrayOfJP_ProductType
     */
    public function getProductTypes()
    {
      return $this->ProductTypes;
    }

    /**
     * @param ArrayOfJP_ProductType $ProductTypes
     * @return JP_PackageContent
     */
    public function setProductTypes($ProductTypes)
    {
      $this->ProductTypes = $ProductTypes;
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
     * @return JP_PackageContent
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return duration
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param duration $Duration
     * @return JP_PackageContent
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMaster()
    {
      return $this->Master;
    }

    /**
     * @param boolean $Master
     * @return JP_PackageContent
     */
    public function setMaster($Master)
    {
      $this->Master = $Master;
      return $this;
    }

}
