<?php

class RentacarCheckAvail
{

    /**
     * @var JP_RentacarCheckAvailRQ $RentacarCheckAvailRQ
     */
    protected $RentacarCheckAvailRQ = null;

    /**
     * @param JP_RentacarCheckAvailRQ $RentacarCheckAvailRQ
     */
    public function __construct($RentacarCheckAvailRQ)
    {
      $this->RentacarCheckAvailRQ = $RentacarCheckAvailRQ;
    }

    /**
     * @return JP_RentacarCheckAvailRQ
     */
    public function getRentacarCheckAvailRQ()
    {
      return $this->RentacarCheckAvailRQ;
    }

    /**
     * @param JP_RentacarCheckAvailRQ $RentacarCheckAvailRQ
     * @return RentacarCheckAvail
     */
    public function setRentacarCheckAvailRQ($RentacarCheckAvailRQ)
    {
      $this->RentacarCheckAvailRQ = $RentacarCheckAvailRQ;
      return $this;
    }

}
