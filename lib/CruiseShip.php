<?php

class CruiseShip
{

    /**
     * @var JP_CruiseShipRQ $CruiseShipRQ
     */
    protected $CruiseShipRQ = null;

    /**
     * @param JP_CruiseShipRQ $CruiseShipRQ
     */
    public function __construct($CruiseShipRQ)
    {
      $this->CruiseShipRQ = $CruiseShipRQ;
    }

    /**
     * @return JP_CruiseShipRQ
     */
    public function getCruiseShipRQ()
    {
      return $this->CruiseShipRQ;
    }

    /**
     * @param JP_CruiseShipRQ $CruiseShipRQ
     * @return CruiseShip
     */
    public function setCruiseShipRQ($CruiseShipRQ)
    {
      $this->CruiseShipRQ = $CruiseShipRQ;
      return $this;
    }

}
