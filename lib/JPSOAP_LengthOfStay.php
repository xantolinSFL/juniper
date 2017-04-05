<?php

namespace Juniper\Webservice;

class JPSOAP_LengthOfStay extends JPSOAP_DateIntervals
{

    /**
     * @var int $MinNights
     */
    protected $MinNights = null;

    /**
     * @var int $MaxNights
     */
    protected $MaxNights = null;

    /**
     * @param date $From
     * @param date $To
     * @param int $MinNights
     * @param int $MaxNights
     */
    public function __construct($From, $To, $MinNights, $MaxNights)
    {
      parent::__construct($From, $To);
      $this->MinNights = $MinNights;
      $this->MaxNights = $MaxNights;
    }

    /**
     * @return int
     */
    public function getMinNights()
    {
      return $this->MinNights;
    }

    /**
     * @param int $MinNights
     * @return JPSOAP_LengthOfStay
     */
    public function setMinNights($MinNights)
    {
      $this->MinNights = $MinNights;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNights()
    {
      return $this->MaxNights;
    }

    /**
     * @param int $MaxNights
     * @return JPSOAP_LengthOfStay
     */
    public function setMaxNights($MaxNights)
    {
      $this->MaxNights = $MaxNights;
      return $this;
    }

}
