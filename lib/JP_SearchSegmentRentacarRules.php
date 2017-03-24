<?php

class JP_SearchSegmentRentacarRules extends JP_SearchSegmentBase
{

    /**
     * @var string $CountryOfResidence
     */
    protected $CountryOfResidence = null;

    /**
     * @var int $AgeDriver
     */
    protected $AgeDriver = null;

    /**
     * @var time $Hour
     */
    protected $Hour = null;

    /**
     * @var time $HourEnd
     */
    protected $HourEnd = null;

    /**
     * @var string $PickUpCode
     */
    protected $PickUpCode = null;

    /**
     * @var string $DropOffCode
     */
    protected $DropOffCode = null;

    /**
     * @var string $AcrissCode
     */
    protected $AcrissCode = null;

    /**
     * @var string $ProductID
     */
    protected $ProductID = null;

    /**
     * @param date $Start
     * @param date $End
     * @param int $OriginZone
     * @param string $JPDCode
     * @param int $DestinationZone
     * @param int $AgeDriver
     * @param time $Hour
     * @param time $HourEnd
     * @param string $PickUpCode
     * @param string $DropOffCode
     * @param string $AcrissCode
     * @param string $ProductID
     */
    public function __construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone, $AgeDriver, $Hour, $HourEnd, $PickUpCode, $DropOffCode, $AcrissCode, $ProductID)
    {
      parent::__construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone);
      $this->AgeDriver = $AgeDriver;
      $this->Hour = $Hour;
      $this->HourEnd = $HourEnd;
      $this->PickUpCode = $PickUpCode;
      $this->DropOffCode = $DropOffCode;
      $this->AcrissCode = $AcrissCode;
      $this->ProductID = $ProductID;
    }

    /**
     * @return string
     */
    public function getCountryOfResidence()
    {
      return $this->CountryOfResidence;
    }

    /**
     * @param string $CountryOfResidence
     * @return JP_SearchSegmentRentacarRules
     */
    public function setCountryOfResidence($CountryOfResidence)
    {
      $this->CountryOfResidence = $CountryOfResidence;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgeDriver()
    {
      return $this->AgeDriver;
    }

    /**
     * @param int $AgeDriver
     * @return JP_SearchSegmentRentacarRules
     */
    public function setAgeDriver($AgeDriver)
    {
      $this->AgeDriver = $AgeDriver;
      return $this;
    }

    /**
     * @return time
     */
    public function getHour()
    {
      return $this->Hour;
    }

    /**
     * @param time $Hour
     * @return JP_SearchSegmentRentacarRules
     */
    public function setHour($Hour)
    {
      $this->Hour = $Hour;
      return $this;
    }

    /**
     * @return time
     */
    public function getHourEnd()
    {
      return $this->HourEnd;
    }

    /**
     * @param time $HourEnd
     * @return JP_SearchSegmentRentacarRules
     */
    public function setHourEnd($HourEnd)
    {
      $this->HourEnd = $HourEnd;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickUpCode()
    {
      return $this->PickUpCode;
    }

    /**
     * @param string $PickUpCode
     * @return JP_SearchSegmentRentacarRules
     */
    public function setPickUpCode($PickUpCode)
    {
      $this->PickUpCode = $PickUpCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDropOffCode()
    {
      return $this->DropOffCode;
    }

    /**
     * @param string $DropOffCode
     * @return JP_SearchSegmentRentacarRules
     */
    public function setDropOffCode($DropOffCode)
    {
      $this->DropOffCode = $DropOffCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcrissCode()
    {
      return $this->AcrissCode;
    }

    /**
     * @param string $AcrissCode
     * @return JP_SearchSegmentRentacarRules
     */
    public function setAcrissCode($AcrissCode)
    {
      $this->AcrissCode = $AcrissCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductID()
    {
      return $this->ProductID;
    }

    /**
     * @param string $ProductID
     * @return JP_SearchSegmentRentacarRules
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

}
