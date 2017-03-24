<?php

class JP_SearchSegmentsItinerary
{

    /**
     * @var JP_SearchSegmentItinerary $SearchSegmentItinerary
     */
    protected $SearchSegmentItinerary = null;

    /**
     * @var ArrayOfJP_CruiseSupplier $CruiseSuppliers
     */
    protected $CruiseSuppliers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentItinerary
     */
    public function getSearchSegmentItinerary()
    {
      return $this->SearchSegmentItinerary;
    }

    /**
     * @param JP_SearchSegmentItinerary $SearchSegmentItinerary
     * @return JP_SearchSegmentsItinerary
     */
    public function setSearchSegmentItinerary($SearchSegmentItinerary)
    {
      $this->SearchSegmentItinerary = $SearchSegmentItinerary;
      return $this;
    }

    /**
     * @return ArrayOfJP_CruiseSupplier
     */
    public function getCruiseSuppliers()
    {
      return $this->CruiseSuppliers;
    }

    /**
     * @param ArrayOfJP_CruiseSupplier $CruiseSuppliers
     * @return JP_SearchSegmentsItinerary
     */
    public function setCruiseSuppliers($CruiseSuppliers)
    {
      $this->CruiseSuppliers = $CruiseSuppliers;
      return $this;
    }

}
