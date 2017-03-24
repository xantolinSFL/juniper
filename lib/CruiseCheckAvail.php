<?php

class CruiseCheckAvail
{

    /**
     * @var JP_CruiseCheckAvail $CruiseCheckAvailRQ
     */
    protected $CruiseCheckAvailRQ = null;

    /**
     * @param JP_CruiseCheckAvail $CruiseCheckAvailRQ
     */
    public function __construct($CruiseCheckAvailRQ)
    {
      $this->CruiseCheckAvailRQ = $CruiseCheckAvailRQ;
    }

    /**
     * @return JP_CruiseCheckAvail
     */
    public function getCruiseCheckAvailRQ()
    {
      return $this->CruiseCheckAvailRQ;
    }

    /**
     * @param JP_CruiseCheckAvail $CruiseCheckAvailRQ
     * @return CruiseCheckAvail
     */
    public function setCruiseCheckAvailRQ($CruiseCheckAvailRQ)
    {
      $this->CruiseCheckAvailRQ = $CruiseCheckAvailRQ;
      return $this;
    }

}
