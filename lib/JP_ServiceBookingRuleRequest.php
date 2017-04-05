<?php

namespace Juniper\Webservice;

class JP_ServiceBookingRuleRequest
{

    /**
     * @var JP_ServiceRuleOptionRQ $ServiceRuleOption
     */
    protected $ServiceRuleOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ServiceRuleOptionRQ
     */
    public function getServiceRuleOption()
    {
      return $this->ServiceRuleOption;
    }

    /**
     * @param JP_ServiceRuleOptionRQ $ServiceRuleOption
     * @return JP_ServiceBookingRuleRequest
     */
    public function setServiceRuleOption($ServiceRuleOption)
    {
      $this->ServiceRuleOption = $ServiceRuleOption;
      return $this;
    }

}
