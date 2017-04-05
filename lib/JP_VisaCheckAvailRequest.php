<?php

namespace Juniper\Webservice;

class JP_VisaCheckAvailRequest
{

    /**
     * @var JP_VisaOptionRQ $VisaCheckOption
     */
    protected $VisaCheckOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_VisaOptionRQ
     */
    public function getVisaCheckOption()
    {
      return $this->VisaCheckOption;
    }

    /**
     * @param JP_VisaOptionRQ $VisaCheckOption
     * @return JP_VisaCheckAvailRequest
     */
    public function setVisaCheckOption($VisaCheckOption)
    {
      $this->VisaCheckOption = $VisaCheckOption;
      return $this;
    }

}
