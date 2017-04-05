<?php

namespace Juniper\Webservice;

class JP_InsurancePriceInformation
{

    /**
     * @var JP_InsuranceInfo $InsuranceInfo
     */
    protected $InsuranceInfo = null;

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    
    public function __construct()
    {
    
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
     * @return JP_InsurancePriceInformation
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
     * @return JP_InsurancePriceInformation
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

}
