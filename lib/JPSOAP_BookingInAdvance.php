<?php

namespace Juniper\Webservice;

class JPSOAP_BookingInAdvance
{

    /**
     * @var int $MinDays
     */
    protected $MinDays = null;

    /**
     * @var int $MaxDays
     */
    protected $MaxDays = null;

    /**
     * @param int $MinDays
     * @param int $MaxDays
     */
    public function __construct($MinDays, $MaxDays)
    {
      $this->MinDays = $MinDays;
      $this->MaxDays = $MaxDays;
    }

    /**
     * @return int
     */
    public function getMinDays()
    {
      return $this->MinDays;
    }

    /**
     * @param int $MinDays
     * @return JPSOAP_BookingInAdvance
     */
    public function setMinDays($MinDays)
    {
      $this->MinDays = $MinDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxDays()
    {
      return $this->MaxDays;
    }

    /**
     * @param int $MaxDays
     * @return JPSOAP_BookingInAdvance
     */
    public function setMaxDays($MaxDays)
    {
      $this->MaxDays = $MaxDays;
      return $this;
    }

}
