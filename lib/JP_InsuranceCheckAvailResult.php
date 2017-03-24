<?php

class JP_InsuranceCheckAvailResult
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
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

    /**
     * @param string $RatePlanCode
     * @param JP_AvailStatus $Status
     */
    public function __construct($RatePlanCode, $Status)
    {
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
     * @return JP_InsuranceCheckAvailResult
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
     * @return JP_InsuranceCheckAvailResult
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
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
     * @return JP_InsuranceCheckAvailResult
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
     * @return JP_InsuranceCheckAvailResult
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
