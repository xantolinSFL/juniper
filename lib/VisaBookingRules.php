<?php

namespace Juniper\Webservice;

class VisaBookingRules
{

    /**
     * @var JP_VisaBookingRulesRQ $VisaBookingRulesRQ
     */
    protected $VisaBookingRulesRQ = null;

    /**
     * @param JP_VisaBookingRulesRQ $VisaBookingRulesRQ
     */
    public function __construct($VisaBookingRulesRQ)
    {
      $this->VisaBookingRulesRQ = $VisaBookingRulesRQ;
    }

    /**
     * @return JP_VisaBookingRulesRQ
     */
    public function getVisaBookingRulesRQ()
    {
      return $this->VisaBookingRulesRQ;
    }

    /**
     * @param JP_VisaBookingRulesRQ $VisaBookingRulesRQ
     * @return VisaBookingRules
     */
    public function setVisaBookingRulesRQ($VisaBookingRulesRQ)
    {
      $this->VisaBookingRulesRQ = $VisaBookingRulesRQ;
      return $this;
    }

}
