<?php

class JP_FinalCustomerContactStaticData
{

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var ArrayOfJP_PhoneNumber $PhoneNumbers
     */
    protected $PhoneNumbers = null;

    
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
     * @return JP_FinalCustomerContactStaticData
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
     * @return JP_FinalCustomerContactStaticData
     */
    public function setPhoneNumbers($PhoneNumbers)
    {
      $this->PhoneNumbers = $PhoneNumbers;
      return $this;
    }

}
