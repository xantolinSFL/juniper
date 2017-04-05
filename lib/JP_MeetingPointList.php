<?php

namespace Juniper\Webservice;

class JP_MeetingPointList
{

    /**
     * @var ArrayOfJP_MeetingPointsZone $MeetingPointZones
     */
    protected $MeetingPointZones = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_MeetingPointsZone
     */
    public function getMeetingPointZones()
    {
      return $this->MeetingPointZones;
    }

    /**
     * @param ArrayOfJP_MeetingPointsZone $MeetingPointZones
     * @return JP_MeetingPointList
     */
    public function setMeetingPointZones($MeetingPointZones)
    {
      $this->MeetingPointZones = $MeetingPointZones;
      return $this;
    }

}
