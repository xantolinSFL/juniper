<?php

class JP_RequestInsurancesAvail
{

    /**
     * @var JP_SearchSegmentsInsurance $SearchSegmentsInsurance
     */
    protected $SearchSegmentsInsurance = null;

    /**
     * @var ArrayOfJP_InsuranceRelPaxDist $RelPaxesDist
     */
    protected $RelPaxesDist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentsInsurance
     */
    public function getSearchSegmentsInsurance()
    {
      return $this->SearchSegmentsInsurance;
    }

    /**
     * @param JP_SearchSegmentsInsurance $SearchSegmentsInsurance
     * @return JP_RequestInsurancesAvail
     */
    public function setSearchSegmentsInsurance($SearchSegmentsInsurance)
    {
      $this->SearchSegmentsInsurance = $SearchSegmentsInsurance;
      return $this;
    }

    /**
     * @return ArrayOfJP_InsuranceRelPaxDist
     */
    public function getRelPaxesDist()
    {
      return $this->RelPaxesDist;
    }

    /**
     * @param ArrayOfJP_InsuranceRelPaxDist $RelPaxesDist
     * @return JP_RequestInsurancesAvail
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

}
