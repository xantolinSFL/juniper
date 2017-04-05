<?php

namespace Juniper\Webservice;

class JP_BookingListAdvancedOptions extends JP_BaseAdvancedOptions
{

    /**
     * @var boolean $AllStatus
     */
    protected $AllStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getAllStatus()
    {
      return $this->AllStatus;
    }

    /**
     * @param boolean $AllStatus
     * @return JP_BookingListAdvancedOptions
     */
    public function setAllStatus($AllStatus)
    {
      $this->AllStatus = $AllStatus;
      return $this;
    }

}
