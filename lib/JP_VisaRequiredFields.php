<?php

namespace Juniper\Webservice;

class JP_VisaRequiredFields
{

    /**
     * @var JP_VisaBooking $VisaBooking
     */
    protected $VisaBooking = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_VisaBooking
     */
    public function getVisaBooking()
    {
      return $this->VisaBooking;
    }

    /**
     * @param JP_VisaBooking $VisaBooking
     * @return JP_VisaRequiredFields
     */
    public function setVisaBooking($VisaBooking)
    {
      $this->VisaBooking = $VisaBooking;
      return $this;
    }

}
