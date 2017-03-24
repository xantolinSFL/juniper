<?php

class RentacarLocationContent
{

    /**
     * @var JP_RentacarLocationContentRQ $RentacarLocationContentRQ
     */
    protected $RentacarLocationContentRQ = null;

    /**
     * @param JP_RentacarLocationContentRQ $RentacarLocationContentRQ
     */
    public function __construct($RentacarLocationContentRQ)
    {
      $this->RentacarLocationContentRQ = $RentacarLocationContentRQ;
    }

    /**
     * @return JP_RentacarLocationContentRQ
     */
    public function getRentacarLocationContentRQ()
    {
      return $this->RentacarLocationContentRQ;
    }

    /**
     * @param JP_RentacarLocationContentRQ $RentacarLocationContentRQ
     * @return RentacarLocationContent
     */
    public function setRentacarLocationContentRQ($RentacarLocationContentRQ)
    {
      $this->RentacarLocationContentRQ = $RentacarLocationContentRQ;
      return $this;
    }

}
