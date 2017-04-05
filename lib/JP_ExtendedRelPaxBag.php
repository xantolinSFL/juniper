<?php

namespace Juniper\Webservice;

class JP_ExtendedRelPaxBag extends JP_RelPax
{

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @param int $IdPax
     * @param string $RatePlanCode
     */
    public function __construct($IdPax, $RatePlanCode)
    {
      parent::__construct($IdPax);
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
     * @return JP_ExtendedRelPaxBag
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}
