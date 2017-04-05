<?php

namespace Juniper\Webservice;

class JP_ModifyResults
{

    /**
     * @var JP_HotelResultModify $HotelModifyResult
     */
    protected $HotelModifyResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelResultModify
     */
    public function getHotelModifyResult()
    {
      return $this->HotelModifyResult;
    }

    /**
     * @param JP_HotelResultModify $HotelModifyResult
     * @return JP_ModifyResults
     */
    public function setHotelModifyResult($HotelModifyResult)
    {
      $this->HotelModifyResult = $HotelModifyResult;
      return $this;
    }

}
