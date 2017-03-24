<?php

class RentacarAvail
{

    /**
     * @var JP_RentacarAvail $RentacarAvailRQ
     */
    protected $RentacarAvailRQ = null;

    /**
     * @param JP_RentacarAvail $RentacarAvailRQ
     */
    public function __construct($RentacarAvailRQ)
    {
      $this->RentacarAvailRQ = $RentacarAvailRQ;
    }

    /**
     * @return JP_RentacarAvail
     */
    public function getRentacarAvailRQ()
    {
      return $this->RentacarAvailRQ;
    }

    /**
     * @param JP_RentacarAvail $RentacarAvailRQ
     * @return RentacarAvail
     */
    public function setRentacarAvailRQ($RentacarAvailRQ)
    {
      $this->RentacarAvailRQ = $RentacarAvailRQ;
      return $this;
    }

}
