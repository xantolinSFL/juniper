<?php

namespace Juniper\Webservice;

class JP_CruiseSupplement
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ArrayOfJP_CruiseExtendedRelPax $RelPaxes
     */
    protected $RelPaxes = null;

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var int $Units
     */
    protected $Units = null;

    /**
     * @var SuplementsType $Type
     */
    protected $Type = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @param int $Units
     * @param SuplementsType $Type
     * @param string $RatePlanCode
     */
    public function __construct($Units, $Type, $RatePlanCode)
    {
      $this->Units = $Units;
      $this->Type = $Type;
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
     * @return JP_CruiseSupplement
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return JP_CruiseSupplement
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfJP_CruiseExtendedRelPax
     */
    public function getRelPaxes()
    {
      return $this->RelPaxes;
    }

    /**
     * @param ArrayOfJP_CruiseExtendedRelPax $RelPaxes
     * @return JP_CruiseSupplement
     */
    public function setRelPaxes($RelPaxes)
    {
      $this->RelPaxes = $RelPaxes;
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
     * @return JP_CruiseSupplement
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
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
     * @return JP_CruiseSupplement
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

    /**
     * @return SuplementsType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param SuplementsType $Type
     * @return JP_CruiseSupplement
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return JP_CruiseSupplement
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}
