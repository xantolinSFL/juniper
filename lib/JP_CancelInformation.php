<?php

namespace Juniper\Webservice;

class JP_CancelInformation
{

    /**
     * @var string $BookingCodeState
     */
    protected $BookingCodeState = null;

    /**
     * @var float $BookingCancelCost
     */
    protected $BookingCancelCost = null;

    /**
     * @var string $BookingCancelCostCurrency
     */
    protected $BookingCancelCostCurrency = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBookingCodeState()
    {
      return $this->BookingCodeState;
    }

    /**
     * @param string $BookingCodeState
     * @return JP_CancelInformation
     */
    public function setBookingCodeState($BookingCodeState)
    {
      $this->BookingCodeState = $BookingCodeState;
      return $this;
    }

    /**
     * @return float
     */
    public function getBookingCancelCost()
    {
      return $this->BookingCancelCost;
    }

    /**
     * @param float $BookingCancelCost
     * @return JP_CancelInformation
     */
    public function setBookingCancelCost($BookingCancelCost)
    {
      $this->BookingCancelCost = $BookingCancelCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingCancelCostCurrency()
    {
      return $this->BookingCancelCostCurrency;
    }

    /**
     * @param string $BookingCancelCostCurrency
     * @return JP_CancelInformation
     */
    public function setBookingCancelCostCurrency($BookingCancelCostCurrency)
    {
      $this->BookingCancelCostCurrency = $BookingCancelCostCurrency;
      return $this;
    }

}
