<?php

class JP_CruiseStation
{

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var StationsType $Type
     */
    protected $Type = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var int $Days
     */
    protected $Days = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @param StationsType $Type
     * @param string $Code
     * @param int $Days
     * @param string $RatePlanCode
     */
    public function __construct($Type, $Code, $Days, $RatePlanCode)
    {
      $this->Type = $Type;
      $this->Code = $Code;
      $this->Days = $Days;
      $this->RatePlanCode = $RatePlanCode;
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
     * @return JP_CruiseStation
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return StationsType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param StationsType $Type
     * @return JP_CruiseStation
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return JP_CruiseStation
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getDays()
    {
      return $this->Days;
    }

    /**
     * @param int $Days
     * @return JP_CruiseStation
     */
    public function setDays($Days)
    {
      $this->Days = $Days;
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
     * @return JP_CruiseStation
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}
