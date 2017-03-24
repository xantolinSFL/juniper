<?php

class JP_AgencyStaticData
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var JP_PhoneNumber $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var JP_AgencyGroup $AgencyGroup
     */
    protected $AgencyGroup = null;

    /**
     * @param int $Code
     */
    public function __construct($Code)
    {
      $this->Code = $Code;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return JP_AgencyStaticData
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
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
     * @return JP_AgencyStaticData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
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
     * @return JP_AgencyStaticData
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return JP_PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param JP_PhoneNumber $PhoneNumber
     * @return JP_AgencyStaticData
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return JP_AgencyGroup
     */
    public function getAgencyGroup()
    {
      return $this->AgencyGroup;
    }

    /**
     * @param JP_AgencyGroup $AgencyGroup
     * @return JP_AgencyStaticData
     */
    public function setAgencyGroup($AgencyGroup)
    {
      $this->AgencyGroup = $AgencyGroup;
      return $this;
    }

}
