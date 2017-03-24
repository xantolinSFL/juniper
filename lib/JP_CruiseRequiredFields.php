<?php

class JP_CruiseRequiredFields
{

    /**
     * @var JP_CruiseBooking $CruiseBooking
     */
    protected $CruiseBooking = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseBooking
     */
    public function getCruiseBooking()
    {
      return $this->CruiseBooking;
    }

    /**
     * @param JP_CruiseBooking $CruiseBooking
     * @return JP_CruiseRequiredFields
     */
    public function setCruiseBooking($CruiseBooking)
    {
      $this->CruiseBooking = $CruiseBooking;
      return $this;
    }

}
