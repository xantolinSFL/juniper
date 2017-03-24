<?php

class CruiseShipResponse
{

    /**
     * @var JP_StaticDataRS $CruiseShipRS
     */
    protected $CruiseShipRS = null;

    /**
     * @param JP_StaticDataRS $CruiseShipRS
     */
    public function __construct($CruiseShipRS)
    {
      $this->CruiseShipRS = $CruiseShipRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getCruiseShipRS()
    {
      return $this->CruiseShipRS;
    }

    /**
     * @param JP_StaticDataRS $CruiseShipRS
     * @return CruiseShipResponse
     */
    public function setCruiseShipRS($CruiseShipRS)
    {
      $this->CruiseShipRS = $CruiseShipRS;
      return $this;
    }

}
