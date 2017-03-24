<?php

class JP_SearchSegmentsFlight
{

    /**
     * @var JP_SearchSegmentFlight $SearchSegmentFlight
     */
    protected $SearchSegmentFlight = null;

    /**
     * @var ArrayOfJP_FlightSupplier $FlightSuppliers
     */
    protected $FlightSuppliers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentFlight
     */
    public function getSearchSegmentFlight()
    {
      return $this->SearchSegmentFlight;
    }

    /**
     * @param JP_SearchSegmentFlight $SearchSegmentFlight
     * @return JP_SearchSegmentsFlight
     */
    public function setSearchSegmentFlight($SearchSegmentFlight)
    {
      $this->SearchSegmentFlight = $SearchSegmentFlight;
      return $this;
    }

    /**
     * @return ArrayOfJP_FlightSupplier
     */
    public function getFlightSuppliers()
    {
      return $this->FlightSuppliers;
    }

    /**
     * @param ArrayOfJP_FlightSupplier $FlightSuppliers
     * @return JP_SearchSegmentsFlight
     */
    public function setFlightSuppliers($FlightSuppliers)
    {
      $this->FlightSuppliers = $FlightSuppliers;
      return $this;
    }

}
