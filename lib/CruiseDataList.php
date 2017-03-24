<?php

class CruiseDataList
{

    /**
     * @var JP_CruiseDataRQ $CruiseDataRQ
     */
    protected $CruiseDataRQ = null;

    /**
     * @param JP_CruiseDataRQ $CruiseDataRQ
     */
    public function __construct($CruiseDataRQ)
    {
      $this->CruiseDataRQ = $CruiseDataRQ;
    }

    /**
     * @return JP_CruiseDataRQ
     */
    public function getCruiseDataRQ()
    {
      return $this->CruiseDataRQ;
    }

    /**
     * @param JP_CruiseDataRQ $CruiseDataRQ
     * @return CruiseDataList
     */
    public function setCruiseDataRQ($CruiseDataRQ)
    {
      $this->CruiseDataRQ = $CruiseDataRQ;
      return $this;
    }

}
