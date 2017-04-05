<?php

namespace Juniper\Webservice;

class MeetingPointList
{

    /**
     * @var JP_MeetingPointListRQ $MeetingPointListRQ
     */
    protected $MeetingPointListRQ = null;

    /**
     * @param JP_MeetingPointListRQ $MeetingPointListRQ
     */
    public function __construct($MeetingPointListRQ)
    {
      $this->MeetingPointListRQ = $MeetingPointListRQ;
    }

    /**
     * @return JP_MeetingPointListRQ
     */
    public function getMeetingPointListRQ()
    {
      return $this->MeetingPointListRQ;
    }

    /**
     * @param JP_MeetingPointListRQ $MeetingPointListRQ
     * @return MeetingPointList
     */
    public function setMeetingPointListRQ($MeetingPointListRQ)
    {
      $this->MeetingPointListRQ = $MeetingPointListRQ;
      return $this;
    }

}
