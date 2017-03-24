<?php

class JP_SearchSegmentPackages extends JP_SearchSegmentBase
{

    /**
     * @var string $CountryOfResidence
     */
    protected $CountryOfResidence = null;

    /**
     * @var ArrayOfString4 $PackageCodes
     */
    protected $PackageCodes = null;

    /**
     * @var string $HotelName
     */
    protected $HotelName = null;

    /**
     * @var ArrayOfJP_HotelCategory $HotelCategories
     */
    protected $HotelCategories = null;

    /**
     * @var ArrayOfString3 $Suppliers
     */
    protected $Suppliers = null;

    /**
     * @var int $DestinationZoneForHotel
     */
    protected $DestinationZoneForHotel = null;

    /**
     * @var JP_ProductType $ProductChangeType
     */
    protected $ProductChangeType = null;

    /**
     * @param date $Start
     * @param date $End
     * @param int $OriginZone
     * @param string $JPDCode
     * @param int $DestinationZone
     * @param int $DestinationZoneForHotel
     * @param JP_ProductType $ProductChangeType
     */
    public function __construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone, $DestinationZoneForHotel, $ProductChangeType)
    {
      parent::__construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone);
      $this->DestinationZoneForHotel = $DestinationZoneForHotel;
      $this->ProductChangeType = $ProductChangeType;
    }

    /**
     * @return string
     */
    public function getCountryOfResidence()
    {
      return $this->CountryOfResidence;
    }

    /**
     * @param string $CountryOfResidence
     * @return JP_SearchSegmentPackages
     */
    public function setCountryOfResidence($CountryOfResidence)
    {
      $this->CountryOfResidence = $CountryOfResidence;
      return $this;
    }

    /**
     * @return ArrayOfString4
     */
    public function getPackageCodes()
    {
      return $this->PackageCodes;
    }

    /**
     * @param ArrayOfString4 $PackageCodes
     * @return JP_SearchSegmentPackages
     */
    public function setPackageCodes($PackageCodes)
    {
      $this->PackageCodes = $PackageCodes;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelName()
    {
      return $this->HotelName;
    }

    /**
     * @param string $HotelName
     * @return JP_SearchSegmentPackages
     */
    public function setHotelName($HotelName)
    {
      $this->HotelName = $HotelName;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelCategory
     */
    public function getHotelCategories()
    {
      return $this->HotelCategories;
    }

    /**
     * @param ArrayOfJP_HotelCategory $HotelCategories
     * @return JP_SearchSegmentPackages
     */
    public function setHotelCategories($HotelCategories)
    {
      $this->HotelCategories = $HotelCategories;
      return $this;
    }

    /**
     * @return ArrayOfString3
     */
    public function getSuppliers()
    {
      return $this->Suppliers;
    }

    /**
     * @param ArrayOfString3 $Suppliers
     * @return JP_SearchSegmentPackages
     */
    public function setSuppliers($Suppliers)
    {
      $this->Suppliers = $Suppliers;
      return $this;
    }

    /**
     * @return int
     */
    public function getDestinationZoneForHotel()
    {
      return $this->DestinationZoneForHotel;
    }

    /**
     * @param int $DestinationZoneForHotel
     * @return JP_SearchSegmentPackages
     */
    public function setDestinationZoneForHotel($DestinationZoneForHotel)
    {
      $this->DestinationZoneForHotel = $DestinationZoneForHotel;
      return $this;
    }

    /**
     * @return JP_ProductType
     */
    public function getProductChangeType()
    {
      return $this->ProductChangeType;
    }

    /**
     * @param JP_ProductType $ProductChangeType
     * @return JP_SearchSegmentPackages
     */
    public function setProductChangeType($ProductChangeType)
    {
      $this->ProductChangeType = $ProductChangeType;
      return $this;
    }

}
