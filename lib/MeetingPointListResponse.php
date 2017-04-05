<?php

namespace Juniper\Webservice;

class MeetingPointListResponse
{

    /**
     * @var JP_StaticDataRS $MeetingPointListRS
     */
    protected $MeetingPointListRS = null;

    /**
     * @param JP_StaticDataRS $MeetingPointListRS
     */
    public function __construct($MeetingPointListRS)
    {
      $this->MeetingPointListRS = $MeetingPointListRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getMeetingPointListRS()
    {
      return $this->MeetingPointListRS;
    }

    /**
     * @param JP_StaticDataRS $MeetingPointListRS
     * @return MeetingPointListResponse
     */
    public function setMeetingPointListRS($MeetingPointListRS)
    {
      $this->MeetingPointListRS = $MeetingPointListRS;
      return $this;
    }

}
