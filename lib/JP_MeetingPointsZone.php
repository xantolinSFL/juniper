<?php

namespace Juniper\Webservice;

class JP_MeetingPointsZone
{

    /**
     * @var JP_MeetingPoint[] $MeetingPoint
     */
    protected $MeetingPoint = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param string $Name
     */
    public function __construct($Name)
    {
      $this->Name = $Name;
    }

    /**
     * @return JP_MeetingPoint[]
     */
    public function getMeetingPoint()
    {
      return $this->MeetingPoint;
    }

    /**
     * @param JP_MeetingPoint[] $MeetingPoint
     * @return JP_MeetingPointsZone
     */
    public function setMeetingPoint(array $MeetingPoint = null)
    {
      $this->MeetingPoint = $MeetingPoint;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JP_MeetingPointsZone
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
