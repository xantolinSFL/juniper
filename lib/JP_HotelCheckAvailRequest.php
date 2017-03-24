<?php

class JP_HotelCheckAvailRequest
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
     * @return JP_HotelCheckAvailRequest
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
     * @return JP_HotelCheckAvailRequest
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
     * @return JP_HotelCheckAvailRequest
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

}
