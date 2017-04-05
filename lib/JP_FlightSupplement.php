<?php

namespace Juniper\Webservice;

class JP_FlightSupplement
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ArrayOfJP_ExtendedRelPax $RelPaxes
     */
    protected $RelPaxes = null;

    /**
     * @var JP_Price $Price
     */
    protected $Price = null;

    /**
     * @var int $Units
     */
    protected $Units = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @param int $Units
     * @param string $RatePlanCode
     */
    public function __construct($Units, $RatePlanCode)
    {
      $this->Units = $Units;
      $this->RatePlanCode = $RatePlanCode;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JP_FlightSupplement
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ArrayOfJP_ExtendedRelPax
     */
    public function getRelPaxes()
    {
      return $this->RelPaxes;
    }

    /**
     * @param ArrayOfJP_ExtendedRelPax $RelPaxes
     * @return JP_FlightSupplement
     */
    public function setRelPaxes($RelPaxes)
    {
      $this->RelPaxes = $RelPaxes;
      return $this;
    }

    /**
     * @return JP_Price
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param JP_Price $Price
     * @return JP_FlightSupplement
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return int
     */
    public function getUnits()
    {
      return $this->Units;
    }

    /**
     * @param int $Units
     * @return JP_FlightSupplement
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
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
     * @return JP_FlightSupplement
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}
