<?php

namespace Juniper\Webservice;

class JP_FlightRequest
{

    /**
     * @var JP_SearchSegmentsFlight $SearchSegmentsFlight
     */
    protected $SearchSegmentsFlight = null;

    /**
     * @var ArrayOfJP_RelPaxDist $RelPaxesDist
     */
    protected $RelPaxesDist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentsFlight
     */
    public function getSearchSegmentsFlight()
    {
      return $this->SearchSegmentsFlight;
    }

    /**
     * @param JP_SearchSegmentsFlight $SearchSegmentsFlight
     * @return JP_FlightRequest
     */
    public function setSearchSegmentsFlight($SearchSegmentsFlight)
    {
      $this->SearchSegmentsFlight = $SearchSegmentsFlight;
      return $this;
    }

    /**
     * @return ArrayOfJP_RelPaxDist
     */
    public function getRelPaxesDist()
    {
      return $this->RelPaxesDist;
    }

    /**
     * @param ArrayOfJP_RelPaxDist $RelPaxesDist
     * @return JP_FlightRequest
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

}
