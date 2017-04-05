<?php

namespace Juniper\Webservice;

class JP_HotelModifyAdvancedOptions extends JP_ModifyAdvancedOptions
{

    /**
     * @var boolean $ShowHotelInfo
     */
    protected $ShowHotelInfo = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getShowHotelInfo()
    {
      return $this->ShowHotelInfo;
    }

    /**
     * @param boolean $ShowHotelInfo
     * @return JP_HotelModifyAdvancedOptions
     */
    public function setShowHotelInfo($ShowHotelInfo)
    {
      $this->ShowHotelInfo = $ShowHotelInfo;
      return $this;
    }

}
