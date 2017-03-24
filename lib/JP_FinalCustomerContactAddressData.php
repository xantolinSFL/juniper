<?php

class JP_FinalCustomerContactAddressData
{

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return JP_FinalCustomerContactAddressData
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return JP_FinalCustomerContactAddressData
     */
    public function setState($State)
    {
      $this->State = $State;
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
     * @return JP_FinalCustomerContactAddressData
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
     * @return JP_FinalCustomerContactAddressData
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
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
     * @return JP_FinalCustomerContactAddressData
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
