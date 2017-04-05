<?php

namespace Juniper\Webservice;

class JPSOAP_DateIntervalsGroupsCheckInDates extends JPSOAP_DateIntervalsGroupsStayDates
{

    /**
     * @var boolean $ApplyToCheckInAndOutToo
     */
    protected $ApplyToCheckInAndOutToo = null;

    /**
     * @param string $WeekDays
     * @param boolean $ApplyToCheckInAndOutToo
     */
    public function __construct($WeekDays, $ApplyToCheckInAndOutToo)
    {
      parent::__construct($WeekDays);
      $this->ApplyToCheckInAndOutToo = $ApplyToCheckInAndOutToo;
    }

    /**
     * @return boolean
     */
    public function getApplyToCheckInAndOutToo()
    {
      return $this->ApplyToCheckInAndOutToo;
    }

    /**
     * @param boolean $ApplyToCheckInAndOutToo
     * @return JPSOAP_DateIntervalsGroupsCheckInDates
     */
    public function setApplyToCheckInAndOutToo($ApplyToCheckInAndOutToo)
    {
      $this->ApplyToCheckInAndOutToo = $ApplyToCheckInAndOutToo;
      return $this;
    }

}
