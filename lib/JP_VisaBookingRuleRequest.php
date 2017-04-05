<?php

namespace Juniper\Webservice;

class JP_VisaBookingRuleRequest
{

    /**
     * @var JP_VisaRuleOptionRQ $VisaRuleOption
     */
    protected $VisaRuleOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_VisaRuleOptionRQ
     */
    public function getVisaRuleOption()
    {
      return $this->VisaRuleOption;
    }

    /**
     * @param JP_VisaRuleOptionRQ $VisaRuleOption
     * @return JP_VisaBookingRuleRequest
     */
    public function setVisaRuleOption($VisaRuleOption)
    {
      $this->VisaRuleOption = $VisaRuleOption;
      return $this;
    }

}
