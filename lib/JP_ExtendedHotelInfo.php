<?php

namespace Juniper\Webservice;

class JP_ExtendedHotelInfo extends JP_HotelSimpleInfo
{

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $AreaID
     */
    protected $AreaID = null;

    /**
     * @var string $CityName
     */
    protected $CityName = null;

    /**
     * @var string $CountryName
     */
    protected $CountryName = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @var string $Latitude
     */
    protected $Latitude = null;

    /**
     * @var string $Longitude
     */
    protected $Longitude = null;

    /**
     * @var JP_HotelCategory $HotelCategory
     */
    protected $HotelCategory = null;

    /**
     * @param string $Code
     * @param string $JPCode
     * @param string $SupplierCode
     */
    public function __construct($Code, $JPCode, $SupplierCode)
    {
      parent::__construct($Code, $JPCode, $SupplierCode);
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return JP_ExtendedHotelInfo
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getAreaID()
    {
      return $this->AreaID;
    }

    /**
     * @param string $AreaID
     * @return JP_ExtendedHotelInfo
     */
    public function setAreaID($AreaID)
    {
      $this->AreaID = $AreaID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
      return $this->CityName;
    }

    /**
     * @param string $CityName
     * @return JP_ExtendedHotelInfo
     */
    public function setCityName($CityName)
    {
      $this->CityName = $CityName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
      return $this->CountryName;
    }

    /**
     * @param string $CountryName
     * @return JP_ExtendedHotelInfo
     */
    public function setCountryName($CountryName)
    {
      $this->CountryName = $CountryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return JP_ExtendedHotelInfo
     */
    public function setZipCode($ZipCode)
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return JP_ExtendedHotelInfo
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return JP_ExtendedHotelInfo
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
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
     * @return JP_ExtendedHotelInfo
     */
    public function setHotelCategory($HotelCategory)
    {
      $this->HotelCategory = $HotelCategory;
      return $this;
    }

}
