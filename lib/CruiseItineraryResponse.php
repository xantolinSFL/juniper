<?php

namespace Juniper\Webservice;

class CruiseItineraryResponse
{

    /**
     * @var JP_StaticDataRS $CruiseItineraryRS
     */
    protected $CruiseItineraryRS = null;

    /**
     * @param JP_StaticDataRS $CruiseItineraryRS
     */
    public function __construct($CruiseItineraryRS)
    {
      $this->CruiseItineraryRS = $CruiseItineraryRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getCruiseItineraryRS()
    {
      return $this->CruiseItineraryRS;
    }

    /**
     * @param JP_StaticDataRS $CruiseItineraryRS
     * @return CruiseItineraryResponse
     */
    public function setCruiseItineraryRS($CruiseItineraryRS)
    {
      $this->CruiseItineraryRS = $CruiseItineraryRS;
      return $this;
    }

}
