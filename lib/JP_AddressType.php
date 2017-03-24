<?php

class JP_AddressType
{

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var JP_StateProv $StateProv
     */
    protected $StateProv = null;

    /**
     * @var JP_Country $Country
     */
    protected $Country = null;

    /**
     * @var string $Latitude
     */
    protected $Latitude = null;

    /**
     * @var string $Longitude
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
     * @return JP_AddressType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return JP_AddressType
     */
    public function setCity($City)
    {
      $this->City = $City;
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
     * @return JP_AddressType
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return JP_StateProv
     */
    public function getStateProv()
    {
      return $this->StateProv;
    }

    /**
     * @param JP_StateProv $StateProv
     * @return JP_AddressType
     */
    public function setStateProv($StateProv)
    {
      $this->StateProv = $StateProv;
      return $this;
    }

    /**
     * @return JP_Country
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param JP_Country $Country
     * @return JP_AddressType
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
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
     * @return JP_AddressType
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
     * @return JP_AddressType
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

}
