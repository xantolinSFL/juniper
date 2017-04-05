<?php

namespace Juniper\Webservice;

class JP_RentcarRequiredFields
{

    /**
     * @var JP_RentacarBooking $RentacarBooking
     */
    protected $RentacarBooking = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RentacarBooking
     */
    public function getRentacarBooking()
    {
      return $this->RentacarBooking;
    }

    /**
     * @param JP_RentacarBooking $RentacarBooking
     * @return JP_RentcarRequiredFields
     */
    public function setRentacarBooking($RentacarBooking)
    {
      $this->RentacarBooking = $RentacarBooking;
      return $this;
    }

}
