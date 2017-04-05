<?php

namespace Juniper\Webservice;

class JP_RentacarBookLocationDetails
{

    /**
     * @var JP_RentacarLocationDetail $RentacarLocationDetailPickUp
     */
    protected $RentacarLocationDetailPickUp = null;

    /**
     * @var JP_RentacarLocationDetail $RentacarLocationDetailDropOff
     */
    protected $RentacarLocationDetailDropOff = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RentacarLocationDetail
     */
    public function getRentacarLocationDetailPickUp()
    {
      return $this->RentacarLocationDetailPickUp;
    }

    /**
     * @param JP_RentacarLocationDetail $RentacarLocationDetailPickUp
     * @return JP_RentacarBookLocationDetails
     */
    public function setRentacarLocationDetailPickUp($RentacarLocationDetailPickUp)
    {
      $this->RentacarLocationDetailPickUp = $RentacarLocationDetailPickUp;
      return $this;
    }

    /**
     * @return JP_RentacarLocationDetail
     */
    public function getRentacarLocationDetailDropOff()
    {
      return $this->RentacarLocationDetailDropOff;
    }

    /**
     * @param JP_RentacarLocationDetail $RentacarLocationDetailDropOff
     * @return JP_RentacarBookLocationDetails
     */
    public function setRentacarLocationDetailDropOff($RentacarLocationDetailDropOff)
    {
      $this->RentacarLocationDetailDropOff = $RentacarLocationDetailDropOff;
      return $this;
    }

}
