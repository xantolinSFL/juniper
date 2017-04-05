<?php

namespace Juniper\Webservice;

class JPSOAP_DateIntervals
{

    /**
     * @var date $From
     */
    protected $From = null;

    /**
     * @var date $To
     */
    protected $To = null;

    /**
     * @param date $From
     * @param date $To
     */
    public function __construct($From, $To)
    {
      $this->From = $From;
      $this->To = $To;
    }

    /**
     * @return date
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param date $From
     * @return JPSOAP_DateIntervals
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return date
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param date $To
     * @return JPSOAP_DateIntervals
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
