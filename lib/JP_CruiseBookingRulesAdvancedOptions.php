<?php

class JP_CruiseBookingRulesAdvancedOptions extends JP_BookingRulesAdvancedOptions
{

    /**
     * @var boolean $ShowCruiseInfo
     */
    protected $ShowCruiseInfo = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getShowCruiseInfo()
    {
      return $this->ShowCruiseInfo;
    }

    /**
     * @param boolean $ShowCruiseInfo
     * @return JP_CruiseBookingRulesAdvancedOptions
     */
    public function setShowCruiseInfo($ShowCruiseInfo)
    {
      $this->ShowCruiseInfo = $ShowCruiseInfo;
      return $this;
    }

}
