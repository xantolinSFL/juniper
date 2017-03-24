<?php

class JPSOAP_StayRestrictions
{

    /**
     * @var JPSOAP_LengthOfStay[] $LengthOfStay
     */
    protected $LengthOfStay = null;

    /**
     * @var JPSOAP_StayRestrictionsApplication $Application
     */
    protected $Application = null;

    /**
     * @var int $MinNights
     */
    protected $MinNights = null;

    /**
     * @var int $MaxNights
     */
    protected $MaxNights = null;

    /**
     * @var boolean $ApplyToLengthStayOnly
     */
    protected $ApplyToLengthStayOnly = null;

    /**
     * @param JPSOAP_StayRestrictionsApplication $Application
     * @param int $MinNights
     * @param int $MaxNights
     * @param boolean $ApplyToLengthStayOnly
     */
    public function __construct($Application, $MinNights, $MaxNights, $ApplyToLengthStayOnly)
    {
      $this->Application = $Application;
      $this->MinNights = $MinNights;
      $this->MaxNights = $MaxNights;
      $this->ApplyToLengthStayOnly = $ApplyToLengthStayOnly;
    }

    /**
     * @return JPSOAP_LengthOfStay[]
     */
    public function getLengthOfStay()
    {
      return $this->LengthOfStay;
    }

    /**
     * @param JPSOAP_LengthOfStay[] $LengthOfStay
     * @return JPSOAP_StayRestrictions
     */
    public function setLengthOfStay(array $LengthOfStay = null)
    {
      $this->LengthOfStay = $LengthOfStay;
      return $this;
    }

    /**
     * @return JPSOAP_StayRestrictionsApplication
     */
    public function getApplication()
    {
      return $this->Application;
    }

    /**
     * @param JPSOAP_StayRestrictionsApplication $Application
     * @return JPSOAP_StayRestrictions
     */
    public function setApplication($Application)
    {
      $this->Application = $Application;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinNights()
    {
      return $this->MinNights;
    }

    /**
     * @param int $MinNights
     * @return JPSOAP_StayRestrictions
     */
    public function setMinNights($MinNights)
    {
      $this->MinNights = $MinNights;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNights()
    {
      return $this->MaxNights;
    }

    /**
     * @param int $MaxNights
     * @return JPSOAP_StayRestrictions
     */
    public function setMaxNights($MaxNights)
    {
      $this->MaxNights = $MaxNights;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApplyToLengthStayOnly()
    {
      return $this->ApplyToLengthStayOnly;
    }

    /**
     * @param boolean $ApplyToLengthStayOnly
     * @return JPSOAP_StayRestrictions
     */
    public function setApplyToLengthStayOnly($ApplyToLengthStayOnly)
    {
      $this->ApplyToLengthStayOnly = $ApplyToLengthStayOnly;
      return $this;
    }

}
