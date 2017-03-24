<?php

class RentacarLocationList
{

    /**
     * @var JP_RentacarLocationListRQ $RentacarLocationListRQ
     */
    protected $RentacarLocationListRQ = null;

    /**
     * @param JP_RentacarLocationListRQ $RentacarLocationListRQ
     */
    public function __construct($RentacarLocationListRQ)
    {
      $this->RentacarLocationListRQ = $RentacarLocationListRQ;
    }

    /**
     * @return JP_RentacarLocationListRQ
     */
    public function getRentacarLocationListRQ()
    {
      return $this->RentacarLocationListRQ;
    }

    /**
     * @param JP_RentacarLocationListRQ $RentacarLocationListRQ
     * @return RentacarLocationList
     */
    public function setRentacarLocationListRQ($RentacarLocationListRQ)
    {
      $this->RentacarLocationListRQ = $RentacarLocationListRQ;
      return $this;
    }

}
