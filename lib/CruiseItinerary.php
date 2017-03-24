<?php

class CruiseItinerary
{

    /**
     * @var JP_CruiseItineraryRQ $CruiseItineraryRQ
     */
    protected $CruiseItineraryRQ = null;

    /**
     * @param JP_CruiseItineraryRQ $CruiseItineraryRQ
     */
    public function __construct($CruiseItineraryRQ)
    {
      $this->CruiseItineraryRQ = $CruiseItineraryRQ;
    }

    /**
     * @return JP_CruiseItineraryRQ
     */
    public function getCruiseItineraryRQ()
    {
      return $this->CruiseItineraryRQ;
    }

    /**
     * @param JP_CruiseItineraryRQ $CruiseItineraryRQ
     * @return CruiseItinerary
     */
    public function setCruiseItineraryRQ($CruiseItineraryRQ)
    {
      $this->CruiseItineraryRQ = $CruiseItineraryRQ;
      return $this;
    }

}
