<?php

class JP_PackageResult
{

    /**
     * @var JP_PackageInfo $PackageInfo
     */
    protected $PackageInfo = null;

    /**
     * @var ArrayOfJP_PackageInfoAFIPAmount $AFIPInformation
     */
    protected $AFIPInformation = null;

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var ArrayOfJP_PackageStay $Stays
     */
    protected $Stays = null;

    /**
     * @var JP_PackageAdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var boolean $Recommended
     */
    protected $Recommended = null;

    /**
     * @var boolean $BestDeal
     */
    protected $BestDeal = null;

    /**
     * @var boolean $LastMinute
     */
    protected $LastMinute = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var date $End
     */
    protected $End = null;

    /**
     * @var int $OriginZone
     */
    protected $OriginZone = null;

    /**
     * @var int $DestinationZone
     */
    protected $DestinationZone = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @param boolean $Recommended
     * @param boolean $BestDeal
     * @param boolean $LastMinute
     * @param date $Start
     * @param date $End
     * @param int $OriginZone
     * @param int $DestinationZone
     * @param string $Code
     * @param JP_AvailStatus $Status
     * @param string $RatePlanCode
     */
    public function __construct($Recommended, $BestDeal, $LastMinute, $Start, $End, $OriginZone, $DestinationZone, $Code, $Status, $RatePlanCode)
    {
      $this->Recommended = $Recommended;
      $this->BestDeal = $BestDeal;
      $this->LastMinute = $LastMinute;
      $this->Start = $Start;
      $this->End = $End;
      $this->OriginZone = $OriginZone;
      $this->DestinationZone = $DestinationZone;
      $this->Code = $Code;
      $this->Status = $Status;
      $this->RatePlanCode = $RatePlanCode;
    }

    /**
     * @return JP_PackageInfo
     */
    public function getPackageInfo()
    {
      return $this->PackageInfo;
    }

    /**
     * @param JP_PackageInfo $PackageInfo
     * @return JP_PackageResult
     */
    public function setPackageInfo($PackageInfo)
    {
      $this->PackageInfo = $PackageInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_PackageInfoAFIPAmount
     */
    public function getAFIPInformation()
    {
      return $this->AFIPInformation;
    }

    /**
     * @param ArrayOfJP_PackageInfoAFIPAmount $AFIPInformation
     * @return JP_PackageResult
     */
    public function setAFIPInformation($AFIPInformation)
    {
      $this->AFIPInformation = $AFIPInformation;
      return $this;
    }

    /**
     * @return ArrayOfJP_Price
     */
    public function getPrices()
    {
      return $this->Prices;
    }

    /**
     * @param ArrayOfJP_Price $Prices
     * @return JP_PackageResult
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return ArrayOfJP_PackageStay
     */
    public function getStays()
    {
      return $this->Stays;
    }

    /**
     * @param ArrayOfJP_PackageStay $Stays
     * @return JP_PackageResult
     */
    public function setStays($Stays)
    {
      $this->Stays = $Stays;
      return $this;
    }

    /**
     * @return JP_PackageAdditionalElements
     */
    public function getAdditionalElements()
    {
      return $this->AdditionalElements;
    }

    /**
     * @param JP_PackageAdditionalElements $AdditionalElements
     * @return JP_PackageResult
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRecommended()
    {
      return $this->Recommended;
    }

    /**
     * @param boolean $Recommended
     * @return JP_PackageResult
     */
    public function setRecommended($Recommended)
    {
      $this->Recommended = $Recommended;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBestDeal()
    {
      return $this->BestDeal;
    }

    /**
     * @param boolean $BestDeal
     * @return JP_PackageResult
     */
    public function setBestDeal($BestDeal)
    {
      $this->BestDeal = $BestDeal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLastMinute()
    {
      return $this->LastMinute;
    }

    /**
     * @param boolean $LastMinute
     * @return JP_PackageResult
     */
    public function setLastMinute($LastMinute)
    {
      $this->LastMinute = $LastMinute;
      return $this;
    }

    /**
     * @return date
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param date $Start
     * @return JP_PackageResult
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return date
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param date $End
     * @return JP_PackageResult
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

    /**
     * @return int
     */
    public function getOriginZone()
    {
      return $this->OriginZone;
    }

    /**
     * @param int $OriginZone
     * @return JP_PackageResult
     */
    public function setOriginZone($OriginZone)
    {
      $this->OriginZone = $OriginZone;
      return $this;
    }

    /**
     * @return int
     */
    public function getDestinationZone()
    {
      return $this->DestinationZone;
    }

    /**
     * @param int $DestinationZone
     * @return JP_PackageResult
     */
    public function setDestinationZone($DestinationZone)
    {
      $this->DestinationZone = $DestinationZone;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return JP_PackageResult
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return JP_AvailStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param JP_AvailStatus $Status
     * @return JP_PackageResult
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanCode()
    {
      return $this->RatePlanCode;
    }

    /**
     * @param string $RatePlanCode
     * @return JP_PackageResult
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}
