<?php

namespace Juniper\Webservice;

class JP_FlightOptionRequest
{

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @param string $RatePlanCode
     */
    public function __construct($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
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
     * @return JP_FlightOptionRequest
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}
