<?php

class ServiceBookingRules
{

    /**
     * @var JP_ServiceBookingRulesRQ $ServiceBookingRulesRQ
     */
    protected $ServiceBookingRulesRQ = null;

    /**
     * @param JP_ServiceBookingRulesRQ $ServiceBookingRulesRQ
     */
    public function __construct($ServiceBookingRulesRQ)
    {
      $this->ServiceBookingRulesRQ = $ServiceBookingRulesRQ;
    }

    /**
     * @return JP_ServiceBookingRulesRQ
     */
    public function getServiceBookingRulesRQ()
    {
      return $this->ServiceBookingRulesRQ;
    }

    /**
     * @param JP_ServiceBookingRulesRQ $ServiceBookingRulesRQ
     * @return ServiceBookingRules
     */
    public function setServiceBookingRulesRQ($ServiceBookingRulesRQ)
    {
      $this->ServiceBookingRulesRQ = $ServiceBookingRulesRQ;
      return $this;
    }

}
