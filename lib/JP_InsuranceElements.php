<?php

namespace Juniper\Webservice;

class JP_InsuranceElements
{

    /**
     * @var JP_InsuranceElement $InsuranceElement
     */
    protected $InsuranceElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_InsuranceElement
     */
    public function getInsuranceElement()
    {
      return $this->InsuranceElement;
    }

    /**
     * @param JP_InsuranceElement $InsuranceElement
     * @return JP_InsuranceElements
     */
    public function setInsuranceElement($InsuranceElement)
    {
      $this->InsuranceElement = $InsuranceElement;
      return $this;
    }

}
