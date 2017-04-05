<?php

namespace Juniper\Webservice;

class JP_ServicesBookingRulesAdvancedOptions extends JP_BookingRulesAdvancedOptions
{

    /**
     * @var boolean $ShowCompleteInfo
     */
    protected $ShowCompleteInfo = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getShowCompleteInfo()
    {
      return $this->ShowCompleteInfo;
    }

    /**
     * @param boolean $ShowCompleteInfo
     * @return JP_ServicesBookingRulesAdvancedOptions
     */
    public function setShowCompleteInfo($ShowCompleteInfo)
    {
      $this->ShowCompleteInfo = $ShowCompleteInfo;
      return $this;
    }

}
