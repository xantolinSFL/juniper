<?php

class JP_ServiceRequiredFields
{

    /**
     * @var JP_ServiceBooking $ServiceBooking
     */
    protected $ServiceBooking = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ServiceBooking
     */
    public function getServiceBooking()
    {
      return $this->ServiceBooking;
    }

    /**
     * @param JP_ServiceBooking $ServiceBooking
     * @return JP_ServiceRequiredFields
     */
    public function setServiceBooking($ServiceBooking)
    {
      $this->ServiceBooking = $ServiceBooking;
      return $this;
    }

}
