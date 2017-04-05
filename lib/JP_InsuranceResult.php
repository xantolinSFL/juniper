<?php

namespace Juniper\Webservice;

class JP_InsuranceResult
{

    /**
     * @var JP_InsuranceInfo $InsuranceInfo
     */
    protected $InsuranceInfo = null;

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $DestinationZone
     */
    protected $DestinationZone = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

    /**
     * @param string $Code
     * @param string $DestinationZone
     * @param string $RatePlanCode
     * @param JP_AvailStatus $Status
     */
    public function __construct($Code, $DestinationZone, $RatePlanCode, $Status)
    {
      $this->Code = $Code;
      $this->DestinationZone = $DestinationZone;
      $this->RatePlanCode = $RatePlanCode;
      $this->Status = $Status;
    }

    /**
     * @return JP_InsuranceInfo
     */
    public function getInsuranceInfo()
    {
      return $this->InsuranceInfo;
    }

    /**
     * @param JP_InsuranceInfo $InsuranceInfo
     * @return JP_InsuranceResult
     */
    public function setInsuranceInfo($InsuranceInfo)
    {
      $this->InsuranceInfo = $InsuranceInfo;
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
     * @return JP_InsuranceResult
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
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
     * @return JP_InsuranceResult
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationZone()
    {
      return $this->DestinationZone;
    }

    /**
     * @param string $DestinationZone
     * @return JP_InsuranceResult
     */
    public function setDestinationZone($DestinationZone)
    {
      $this->DestinationZone = $DestinationZone;
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
     * @return JP_InsuranceResult
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
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
     * @return JP_InsuranceResult
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
