<?php

class JP_InsuranceBookingRulesAdvancedOptions extends JP_BookingRulesAdvancedOptions
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
     * @return JP_InsuranceBookingRulesAdvancedOptions
     */
    public function setShowCompleteInfo($ShowCompleteInfo)
    {
      $this->ShowCompleteInfo = $ShowCompleteInfo;
      return $this;
    }

}
