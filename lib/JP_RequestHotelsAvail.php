<?php

class JP_RequestHotelsAvail
{

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
     * @return JP_SearchSegmentsHotels
     */
    public function getSearchSegmentsHotels()
    {
      return $this->SearchSegmentsHotels;
    }

    /**
     * @param JP_SearchSegmentsHotels $SearchSegmentsHotels
     * @return JP_RequestHotelsAvail
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
     * @param ArrayOfJP_HotelRelPaxDist $RelPaxesDist
     * @return JP_RequestHotelsAvail
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

}
