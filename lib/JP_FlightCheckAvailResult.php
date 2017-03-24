<?php

class JP_FlightCheckAvailResult
{

    /**
     * @var JP_FlightPriceInformation $PriceInformation
     */
    protected $PriceInformation = null;

    /**
     * @var JP_OptionalElements $OptionalElements
     */
    protected $OptionalElements = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

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
     * @param JP_AvailStatus $Status
     * @param string $Direction
     * @param boolean $LowCost
     * @param string $RatePlanCode
     */
    public function __construct($Status, $Direction, $LowCost, $RatePlanCode)
    {
      $this->Status = $Status;
      $this->Direction = $Direction;
      $this->LowCost = $LowCost;
      $this->RatePlanCode = $RatePlanCode;
    }

    /**
     * @return JP_FlightPriceInformation
     */
    public function getPriceInformation()
    {
      return $this->PriceInformation;
    }

    /**
     * @param JP_FlightPriceInformation $PriceInformation
     * @return JP_FlightCheckAvailResult
     */
    public function setPriceInformation($PriceInformation)
    {
      $this->PriceInformation = $PriceInformation;
      return $this;
    }

    /**
     * @return JP_OptionalElements
     */
    public function getOptionalElements()
    {
      return $this->OptionalElements;
    }

    /**
     * @param JP_OptionalElements $OptionalElements
     * @return JP_FlightCheckAvailResult
     */
    public function setOptionalElements($OptionalElements)
    {
      $this->OptionalElements = $OptionalElements;
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
     * @return JP_FlightCheckAvailResult
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return JP_FlightCheckAvailResult
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
     * @return JP_FlightCheckAvailResult
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
     * @return JP_FlightCheckAvailResult
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}
