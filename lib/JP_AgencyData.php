<?php

class JP_AgencyData
{

    /**
     * @var boolean $ReferencedAgency
     */
    protected $ReferencedAgency = null;

    /**
     * @var int $AgencyCode
     */
    protected $AgencyCode = null;

    /**
     * @var string $AgencyName
     */
    protected $AgencyName = null;

    /**
     * @var string $AgencyHandledBy
     */
    protected $AgencyHandledBy = null;

    /**
     * @var string $AgencyEmail
     */
    protected $AgencyEmail = null;

    /**
     * @var string $AgencyCommercialPhone
     */
    protected $AgencyCommercialPhone = null;

    /**
     * @var string $AgencyReference
     */
    protected $AgencyReference = null;

    /**
     * @var string $AgencyFile
     */
    protected $AgencyFile = null;

    /**
     * @param boolean $ReferencedAgency
     * @param int $AgencyCode
     */
    public function __construct($ReferencedAgency, $AgencyCode)
    {
      $this->ReferencedAgency = $ReferencedAgency;
      $this->AgencyCode = $AgencyCode;
    }

    /**
     * @return boolean
     */
    public function getReferencedAgency()
    {
      return $this->ReferencedAgency;
    }

    /**
     * @param boolean $ReferencedAgency
     * @return JP_AgencyData
     */
    public function setReferencedAgency($ReferencedAgency)
    {
      $this->ReferencedAgency = $ReferencedAgency;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgencyCode()
    {
      return $this->AgencyCode;
    }

    /**
     * @param int $AgencyCode
     * @return JP_AgencyData
     */
    public function setAgencyCode($AgencyCode)
    {
      $this->AgencyCode = $AgencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgencyName()
    {
      return $this->AgencyName;
    }

    /**
     * @param string $AgencyName
     * @return JP_AgencyData
     */
    public function setAgencyName($AgencyName)
    {
      $this->AgencyName = $AgencyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgencyHandledBy()
    {
      return $this->AgencyHandledBy;
    }

    /**
     * @param string $AgencyHandledBy
     * @return JP_AgencyData
     */
    public function setAgencyHandledBy($AgencyHandledBy)
    {
      $this->AgencyHandledBy = $AgencyHandledBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgencyEmail()
    {
      return $this->AgencyEmail;
    }

    /**
     * @param string $AgencyEmail
     * @return JP_AgencyData
     */
    public function setAgencyEmail($AgencyEmail)
    {
      $this->AgencyEmail = $AgencyEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgencyCommercialPhone()
    {
      return $this->AgencyCommercialPhone;
    }

    /**
     * @param string $AgencyCommercialPhone
     * @return JP_AgencyData
     */
    public function setAgencyCommercialPhone($AgencyCommercialPhone)
    {
      $this->AgencyCommercialPhone = $AgencyCommercialPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgencyReference()
    {
      return $this->AgencyReference;
    }

    /**
     * @param string $AgencyReference
     * @return JP_AgencyData
     */
    public function setAgencyReference($AgencyReference)
    {
      $this->AgencyReference = $AgencyReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgencyFile()
    {
      return $this->AgencyFile;
    }

    /**
     * @param string $AgencyFile
     * @return JP_AgencyData
     */
    public function setAgencyFile($AgencyFile)
    {
      $this->AgencyFile = $AgencyFile;
      return $this;
    }

}
