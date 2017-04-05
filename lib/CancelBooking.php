<?php

namespace Juniper\Webservice;

class CancelBooking
{

    /**
     * @var JP_CancelRQ $CancelRQ
     */
    protected $CancelRQ = null;

    /**
     * @param JP_CancelRQ $CancelRQ
     */
    public function __construct($CancelRQ)
    {
      $this->CancelRQ = $CancelRQ;
    }

    /**
     * @return JP_CancelRQ
     */
    public function getCancelRQ()
    {
      return $this->CancelRQ;
    }

    /**
     * @param JP_CancelRQ $CancelRQ
     * @return CancelBooking
     */
    public function setCancelRQ($CancelRQ)
    {
      $this->CancelRQ = $CancelRQ;
      return $this;
    }

}
