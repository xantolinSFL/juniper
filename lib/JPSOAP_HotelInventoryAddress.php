<?php

namespace Juniper\Webservice;

class JPSOAP_HotelInventoryAddress
{

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var JPSOAP_IdName $Zone
     */
    protected $Zone = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var float $Latitude
     */
    protected $Latitude = null;

    /**
     * @var float $Longitude
     */
    protected $Longitude = null;

    
    public function __construct()
    {
    
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
     * @return JPSOAP_HotelInventoryAddress
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return JPSOAP_IdName
     */
    public function getZone()
    {
      return $this->Zone;
    }

    /**
     * @param JPSOAP_IdName $Zone
     * @return JPSOAP_HotelInventoryAddress
     */
    public function setZone($Zone)
    {
      $this->Zone = $Zone;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return JPSOAP_HotelInventoryAddress
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param float $Latitude
     * @return JPSOAP_HotelInventoryAddress
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param float $Longitude
     * @return JPSOAP_HotelInventoryAddress
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

}
