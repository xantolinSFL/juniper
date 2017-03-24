<?php

class JP_SearchSegmentsHotelFutureRates extends JP_SearchSegmentsHotels
{

    /**
     * @var ArrayOfString7 $DestinationZones
     */
    protected $DestinationZones = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfString7
     */
    public function getDestinationZones()
    {
      return $this->DestinationZones;
    }

    /**
     * @param ArrayOfString7 $DestinationZones
     * @return JP_SearchSegmentsHotelFutureRates
     */
    public function setDestinationZones($DestinationZones)
    {
      $this->DestinationZones = $DestinationZones;
      return $this;
    }

}
