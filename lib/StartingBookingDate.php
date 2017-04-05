<?php

namespace Juniper\Webservice;

class StartingBookingDate
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
     * @return StartingBookingDate
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
     * @return StartingBookingDate
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
