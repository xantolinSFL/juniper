<?php

class JP_CruiseItineraryRequest
{

    /**
     * @var JP_SearchSegmentsItinerary $SearchSegmentsItinerary
     */
    protected $SearchSegmentsItinerary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentsItinerary
     */
    public function getSearchSegmentsItinerary()
    {
      return $this->SearchSegmentsItinerary;
    }

    /**
     * @param JP_SearchSegmentsItinerary $SearchSegmentsItinerary
     * @return JP_CruiseItineraryRequest
     */
    public function setSearchSegmentsItinerary($SearchSegmentsItinerary)
    {
      $this->SearchSegmentsItinerary = $SearchSegmentsItinerary;
      return $this;
    }

}
