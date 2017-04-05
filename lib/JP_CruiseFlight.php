<?php

namespace Juniper\Webservice;

class JP_CruiseFlight
{

    /**
     * @var ArrayOfJP_CruiseFlightRoute $Routes
     */
    protected $Routes = null;

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var string $Direction
     */
    protected $Direction = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @param string $Direction
     * @param string $RatePlanCode
     */
    public function __construct($Direction, $RatePlanCode)
    {
      $this->Direction = $Direction;
      $this->RatePlanCode = $RatePlanCode;
    }

    /**
     * @return ArrayOfJP_CruiseFlightRoute
     */
    public function getRoutes()
    {
      return $this->Routes;
    }

    /**
     * @param ArrayOfJP_CruiseFlightRoute $Routes
     * @return JP_CruiseFlight
     */
    public function setRoutes($Routes)
    {
      $this->Routes = $Routes;
      return $this;
    }

    /**
     * @return ArrayOfJP_Price
     */
    public function getPrices()
    {
      return $this->Prices;
    }

    /**
     * @param ArrayOfJP_Price $Prices
     * @return JP_CruiseFlight
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param string $Direction
     * @return JP_CruiseFlight
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
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
     * @return JP_CruiseFlight
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}
