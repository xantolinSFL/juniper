<?php

namespace Juniper\Webservice;

class JP_HotelBookingRulesRequest
{

    /**
     * @var JP_HotelOptionRequest $HotelOption
     */
    protected $HotelOption = null;

    /**
     * @var JP_SearchSegmentsHotels $SearchSegmentsHotels
     */
    protected $SearchSegmentsHotels = null;

    /**
     * @var ArrayOfJP_HotelRelPaxDist $RelPaxesDist
     */
    protected $RelPaxesDist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelOptionRequest
     */
    public function getHotelOption()
    {
      return $this->HotelOption;
    }

    /**
     * @param JP_HotelOptionRequest $HotelOption
     * @return JP_HotelBookingRulesRequest
     */
    public function setHotelOption($HotelOption)
    {
      $this->HotelOption = $HotelOption;
      return $this;
    }

    /**
     * @return JP_SearchSegmentsHotels
     */
    public function getSearchSegmentsHotels()
    {
      return $this->SearchSegmentsHotels;
    }

    /**
     * @param JP_SearchSegmentsHotels $SearchSegmentsHotels
     * @return JP_HotelBookingRulesRequest
     */
    public function setSearchSegmentsHotels($SearchSegmentsHotels)
    {
      $this->SearchSegmentsHotels = $SearchSegmentsHotels;
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
     * @param JP_RelPaxesDist $RelPaxesDist
     * @return JP_HotelBookingRulesRequest
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

}
