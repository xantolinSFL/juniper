<?php

namespace Juniper\Webservice;

class JP_FlightCheckAvailRequest
{

    /**
     * @var JP_FlightOptionRequest $FlightOption
     */
    protected $FlightOption = null;

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
     * @return JP_FlightOptionRequest
     */
    public function getFlightOption()
    {
      return $this->FlightOption;
    }

    /**
     * @param JP_FlightOptionRequest $FlightOption
     * @return JP_FlightCheckAvailRequest
     */
    public function setFlightOption($FlightOption)
    {
      $this->FlightOption = $FlightOption;
      return $this;
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
     * @return JP_FlightCheckAvailRequest
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
     * @return JP_FlightCheckAvailRequest
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

}
