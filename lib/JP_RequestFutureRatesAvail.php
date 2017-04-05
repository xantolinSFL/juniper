<?php

namespace Juniper\Webservice;

class JP_RequestFutureRatesAvail
{

    /**
     * @var JP_SearchSegmentsHotelFutureRates $SearchSegmentsHotelFutureRates
     */
    protected $SearchSegmentsHotelFutureRates = null;

    /**
     * @var ArrayOfJP_HotelRelPaxDist $RelPaxesDist
     */
    protected $RelPaxesDist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentsHotelFutureRates
     */
    public function getSearchSegmentsHotelFutureRates()
    {
      return $this->SearchSegmentsHotelFutureRates;
    }

    /**
     * @param JP_SearchSegmentsHotelFutureRates $SearchSegmentsHotelFutureRates
     * @return JP_RequestFutureRatesAvail
     */
    public function setSearchSegmentsHotelFutureRates($SearchSegmentsHotelFutureRates)
    {
      $this->SearchSegmentsHotelFutureRates = $SearchSegmentsHotelFutureRates;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelRelPaxDist
     */
    public function getRelPaxesDist()
    {
      return $this->RelPaxesDist;
    }

    /**
     * @param ArrayOfJP_HotelRelPaxDist $RelPaxesDist
     * @return JP_RequestFutureRatesAvail
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

}
