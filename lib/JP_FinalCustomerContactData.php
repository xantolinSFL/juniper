<?php

class JP_FinalCustomerContactData
{

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var ArrayOfJP_PhoneNumber $PhoneNumbers
     */
    protected $PhoneNumbers = null;

    /**
     * @var JP_FinalCustomerContactAddressData $AddressData
     */
    protected $AddressData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return JP_FinalCustomerContactData
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return ArrayOfJP_PhoneNumber
     */
    public function getPhoneNumbers()
    {
      return $this->PhoneNumbers;
    }

    /**
     * @param ArrayOfJP_PhoneNumber $PhoneNumbers
     * @return JP_FinalCustomerContactData
     */
    public function setPhoneNumbers($PhoneNumbers)
    {
      $this->PhoneNumbers = $PhoneNumbers;
      return $this;
    }

    /**
     * @return JP_FinalCustomerContactAddressData
     */
    public function getAddressData()
    {
      return $this->AddressData;
    }

    /**
     * @param JP_FinalCustomerContactAddressData $AddressData
     * @return JP_FinalCustomerContactData
     */
    public function setAddressData($AddressData)
    {
      $this->AddressData = $AddressData;
      return $this;
    }

}
