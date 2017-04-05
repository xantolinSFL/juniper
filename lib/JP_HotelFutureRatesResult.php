<?php

namespace Juniper\Webservice;

class JP_HotelFutureRatesResult
{

    /**
     * @var JP_FutureRatesResultInfo $ResultInfo
     */
    protected $ResultInfo = null;

    /**
     * @var JP_HotelResult $HotelResult
     */
    protected $HotelResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_FutureRatesResultInfo
     */
    public function getResultInfo()
    {
      return $this->ResultInfo;
    }

    /**
     * @param JP_FutureRatesResultInfo $ResultInfo
     * @return JP_HotelFutureRatesResult
     */
    public function setResultInfo($ResultInfo)
    {
      $this->ResultInfo = $ResultInfo;
      return $this;
    }

    /**
     * @return JP_HotelResult
     */
    public function getHotelResult()
    {
      return $this->HotelResult;
    }

    /**
     * @param JP_HotelResult $HotelResult
     * @return JP_HotelFutureRatesResult
     */
    public function setHotelResult($HotelResult)
    {
      $this->HotelResult = $HotelResult;
      return $this;
    }

}
