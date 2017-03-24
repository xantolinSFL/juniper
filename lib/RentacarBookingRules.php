<?php

class RentacarBookingRules
{

    /**
     * @var JP_RentacarBookingRulesRQ $RentacarBookingRulesRQ
     */
    protected $RentacarBookingRulesRQ = null;

    /**
     * @param JP_RentacarBookingRulesRQ $RentacarBookingRulesRQ
     */
    public function __construct($RentacarBookingRulesRQ)
    {
      $this->RentacarBookingRulesRQ = $RentacarBookingRulesRQ;
    }

    /**
     * @return JP_RentacarBookingRulesRQ
     */
    public function getRentacarBookingRulesRQ()
    {
      return $this->RentacarBookingRulesRQ;
    }

    /**
     * @param JP_RentacarBookingRulesRQ $RentacarBookingRulesRQ
     * @return RentacarBookingRules
     */
    public function setRentacarBookingRulesRQ($RentacarBookingRulesRQ)
    {
      $this->RentacarBookingRulesRQ = $RentacarBookingRulesRQ;
      return $this;
    }

}
