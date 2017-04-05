<?php

namespace Juniper\Webservice;

class PackageBookingRules
{

    /**
     * @var JP_PackageBookingRulesRQ $PackageBookingRulesRQ
     */
    protected $PackageBookingRulesRQ = null;

    /**
     * @param JP_PackageBookingRulesRQ $PackageBookingRulesRQ
     */
    public function __construct($PackageBookingRulesRQ)
    {
      $this->PackageBookingRulesRQ = $PackageBookingRulesRQ;
    }

    /**
     * @return JP_PackageBookingRulesRQ
     */
    public function getPackageBookingRulesRQ()
    {
      return $this->PackageBookingRulesRQ;
    }

    /**
     * @param JP_PackageBookingRulesRQ $PackageBookingRulesRQ
     * @return PackageBookingRules
     */
    public function setPackageBookingRulesRQ($PackageBookingRulesRQ)
    {
      $this->PackageBookingRulesRQ = $PackageBookingRulesRQ;
      return $this;
    }

}
