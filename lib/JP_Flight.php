<?php

namespace Juniper\Webservice;

class JP_Flight
{

    /**
     * @var JP_Routes $Routes
     */
    protected $Routes = null;

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var JP_AdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var ArrayOfJP_FlightRule $Rules
     */
    protected $Rules = null;

    /**
     * @var string $FareType
     */
    protected $FareType = null;

    /**
     * @var int $AvailableSeats
     */
    protected $AvailableSeats = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $Direction
     */
    protected $Direction = null;

    /**
     * @var boolean $LowCost
     */
    protected $LowCost = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $ICode
     */
    protected $ICode = null;

    /**
     * @var boolean $SearchMore
     */
    protected $SearchMore = null;

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @param string $FareType
     * @param int $AvailableSeats
     * @param string $Number
     * @param string $Direction
     * @param boolean $LowCost
     * @param string $RatePlanCode
     * @param JP_AvailStatus $Status
     * @param string $ICode
     * @param boolean $SearchMore
     * @param int $Order
     */
    public function __construct($FareType, $AvailableSeats, $Number, $Direction, $LowCost, $RatePlanCode, $Status, $ICode, $SearchMore, $Order)
    {
      $this->FareType = $FareType;
      $this->AvailableSeats = $AvailableSeats;
      $this->Number = $Number;
      $this->Direction = $Direction;
      $this->LowCost = $LowCost;
      $this->RatePlanCode = $RatePlanCode;
      $this->Status = $Status;
      $this->ICode = $ICode;
      $this->SearchMore = $SearchMore;
      $this->Order = $Order;
    }

    /**
     * @return JP_Routes
     */
    public function getRoutes()
    {
      return $this->Routes;
    }

    /**
     * @param JP_Routes $Routes
     * @return JP_Flight
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
     * @return JP_Flight
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return JP_AdditionalElements
     */
    public function getAdditionalElements()
    {
      return $this->AdditionalElements;
    }

    /**
     * @param JP_AdditionalElements $AdditionalElements
     * @return JP_Flight
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
      return $this;
    }

    /**
     * @return ArrayOfJP_FlightRule
     */
    public function getRules()
    {
      return $this->Rules;
    }

    /**
     * @param ArrayOfJP_FlightRule $Rules
     * @return JP_Flight
     */
    public function setRules($Rules)
    {
      $this->Rules = $Rules;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param string $FareType
     * @return JP_Flight
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return int
     */
    public function getAvailableSeats()
    {
      return $this->AvailableSeats;
    }

    /**
     * @param int $AvailableSeats
     * @return JP_Flight
     */
    public function setAvailableSeats($AvailableSeats)
    {
      $this->AvailableSeats = $AvailableSeats;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return JP_Flight
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
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
     * @return JP_Flight
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLowCost()
    {
      return $this->LowCost;
    }

    /**
     * @param boolean $LowCost
     * @return JP_Flight
     */
    public function setLowCost($LowCost)
    {
      $this->LowCost = $LowCost;
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
     * @return JP_Flight
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

    /**
     * @return JP_AvailStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param JP_AvailStatus $Status
     * @return JP_Flight
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getICode()
    {
      return $this->ICode;
    }

    /**
     * @param string $ICode
     * @return JP_Flight
     */
    public function setICode($ICode)
    {
      $this->ICode = $ICode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchMore()
    {
      return $this->SearchMore;
    }

    /**
     * @param boolean $SearchMore
     * @return JP_Flight
     */
    public function setSearchMore($SearchMore)
    {
      $this->SearchMore = $SearchMore;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param int $Order
     * @return JP_Flight
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

}
