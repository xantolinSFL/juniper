<?php

class JP_SearchSegmentRentacar extends JP_SearchSegmentBase
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
     * @var string $CarCategory
     */
    protected $CarCategory = null;

    /**
     * @var string $CarType
     */
    protected $CarType = null;

    /**
     * @var string $CarTransmission
     */
    protected $CarTransmission = null;

    /**
     * @var string $CarDriveAC
     */
    protected $CarDriveAC = null;

    /**
     * @param date $Start
     * @param date $End
     * @param int $OriginZone
     * @param string $JPDCode
     * @param int $DestinationZone
     * @param int $AgeDriver
     * @param time $Hour
     * @param time $HourEnd
     * @param string $CarCategory
     * @param string $CarType
     * @param string $CarTransmission
     * @param string $CarDriveAC
     */
    public function __construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone, $AgeDriver, $Hour, $HourEnd, $CarCategory, $CarType, $CarTransmission, $CarDriveAC)
    {
      parent::__construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone);
      $this->AgeDriver = $AgeDriver;
      $this->Hour = $Hour;
      $this->HourEnd = $HourEnd;
      $this->CarCategory = $CarCategory;
      $this->CarType = $CarType;
      $this->CarTransmission = $CarTransmission;
      $this->CarDriveAC = $CarDriveAC;
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
     * @return JP_SearchSegmentRentacar
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
     * @return JP_SearchSegmentRentacar
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
     * @return JP_SearchSegmentRentacar
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
     * @return JP_SearchSegmentRentacar
     */
    public function setHourEnd($HourEnd)
    {
      $this->HourEnd = $HourEnd;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarCategory()
    {
      return $this->CarCategory;
    }

    /**
     * @param string $CarCategory
     * @return JP_SearchSegmentRentacar
     */
    public function setCarCategory($CarCategory)
    {
      $this->CarCategory = $CarCategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarType()
    {
      return $this->CarType;
    }

    /**
     * @param string $CarType
     * @return JP_SearchSegmentRentacar
     */
    public function setCarType($CarType)
    {
      $this->CarType = $CarType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarTransmission()
    {
      return $this->CarTransmission;
    }

    /**
     * @param string $CarTransmission
     * @return JP_SearchSegmentRentacar
     */
    public function setCarTransmission($CarTransmission)
    {
      $this->CarTransmission = $CarTransmission;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarDriveAC()
    {
      return $this->CarDriveAC;
    }

    /**
     * @param string $CarDriveAC
     * @return JP_SearchSegmentRentacar
     */
    public function setCarDriveAC($CarDriveAC)
    {
      $this->CarDriveAC = $CarDriveAC;
      return $this;
    }

}
