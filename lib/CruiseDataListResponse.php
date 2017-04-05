<?php

namespace Juniper\Webservice;

class CruiseDataListResponse
{

    /**
     * @var JP_StaticDataRS $CruiseDataRS
     */
    protected $CruiseDataRS = null;

    /**
     * @param JP_StaticDataRS $CruiseDataRS
     */
    public function __construct($CruiseDataRS)
    {
      $this->CruiseDataRS = $CruiseDataRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getCruiseDataRS()
    {
      return $this->CruiseDataRS;
    }

    /**
     * @param JP_StaticDataRS $CruiseDataRS
     * @return CruiseDataListResponse
     */
    public function setCruiseDataRS($CruiseDataRS)
    {
      $this->CruiseDataRS = $CruiseDataRS;
      return $this;
    }

}
