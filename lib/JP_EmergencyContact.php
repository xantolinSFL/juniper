<?php

class JP_EmergencyContact
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ArrayOfJP_PhoneNumber $PhoneNumbers
     */
    protected $PhoneNumbers = null;

    /**
     * @var boolean $Allowed
     */
    protected $Allowed = null;

    /**
     * @param boolean $Allowed
     */
    public function __construct($Allowed)
    {
      $this->Allowed = $Allowed;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JP_EmergencyContact
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return JP_EmergencyContact
     */
    public function setPhoneNumbers($PhoneNumbers)
    {
      $this->PhoneNumbers = $PhoneNumbers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowed()
    {
      return $this->Allowed;
    }

    /**
     * @param boolean $Allowed
     * @return JP_EmergencyContact
     */
    public function setAllowed($Allowed)
    {
      $this->Allowed = $Allowed;
      return $this;
    }

}
