<?php

class CruisePreAvail
{

    /**
     * @var JP_CruisePreAvail $CruisePreAvailRQ
     */
    protected $CruisePreAvailRQ = null;

    /**
     * @param JP_CruisePreAvail $CruisePreAvailRQ
     */
    public function __construct($CruisePreAvailRQ)
    {
      $this->CruisePreAvailRQ = $CruisePreAvailRQ;
    }

    /**
     * @return JP_CruisePreAvail
     */
    public function getCruisePreAvailRQ()
    {
      return $this->CruisePreAvailRQ;
    }

    /**
     * @param JP_CruisePreAvail $CruisePreAvailRQ
     * @return CruisePreAvail
     */
    public function setCruisePreAvailRQ($CruisePreAvailRQ)
    {
      $this->CruisePreAvailRQ = $CruisePreAvailRQ;
      return $this;
    }

}
