<?php

namespace Juniper\Webservice;

class JP_CruiseFlightRoute
{

    /**
     * @var ArrayOfJP_CruiseSegment $Segments
     */
    protected $Segments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_CruiseSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfJP_CruiseSegment $Segments
     * @return JP_CruiseFlightRoute
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

}
