<?php

class CruiseAvail
{

    /**
     * @var JP_CruiseAvail $CruiseAvailRQ
     */
    protected $CruiseAvailRQ = null;

    /**
     * @param JP_CruiseAvail $CruiseAvailRQ
     */
    public function __construct($CruiseAvailRQ)
    {
      $this->CruiseAvailRQ = $CruiseAvailRQ;
    }

    /**
     * @return JP_CruiseAvail
     */
    public function getCruiseAvailRQ()
    {
      return $this->CruiseAvailRQ;
    }

    /**
     * @param JP_CruiseAvail $CruiseAvailRQ
     * @return CruiseAvail
     */
    public function setCruiseAvailRQ($CruiseAvailRQ)
    {
      $this->CruiseAvailRQ = $CruiseAvailRQ;
      return $this;
    }

}
