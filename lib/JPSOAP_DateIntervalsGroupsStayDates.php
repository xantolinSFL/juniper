<?php

namespace Juniper\Webservice;

class JPSOAP_DateIntervalsGroupsStayDates extends JPSOAP_DateIntervalsGroups
{

    /**
     * @var string $WeekDays
     */
    protected $WeekDays = null;

    /**
     * @param string $WeekDays
     */
    public function __construct($WeekDays)
    {
      parent::__construct();
      $this->WeekDays = $WeekDays;
    }

    /**
     * @return string
     */
    public function getWeekDays()
    {
      return $this->WeekDays;
    }

    /**
     * @param string $WeekDays
     * @return JPSOAP_DateIntervalsGroupsStayDates
     */
    public function setWeekDays($WeekDays)
    {
      $this->WeekDays = $WeekDays;
      return $this;
    }

}
