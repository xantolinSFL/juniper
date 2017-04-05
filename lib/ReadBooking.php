<?php

namespace Juniper\Webservice;

class ReadBooking
{

    /**
     * @var JP_ReadRQ $ReadRQ
     */
    protected $ReadRQ = null;

    /**
     * @param JP_ReadRQ $ReadRQ
     */
    public function __construct($ReadRQ)
    {
      $this->ReadRQ = $ReadRQ;
    }

    /**
     * @return JP_ReadRQ
     */
    public function getReadRQ()
    {
      return $this->ReadRQ;
    }

    /**
     * @param JP_ReadRQ $ReadRQ
     * @return ReadBooking
     */
    public function setReadRQ($ReadRQ)
    {
      $this->ReadRQ = $ReadRQ;
      return $this;
    }

}
