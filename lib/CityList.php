<?php

namespace Juniper\Webservice;

class CityList
{

    /**
     * @var JP_CityListRQ $CityListRQ
     */
    protected $CityListRQ = null;

    /**
     * @param JP_CityListRQ $CityListRQ
     */
    public function __construct($CityListRQ)
    {
      $this->CityListRQ = $CityListRQ;
    }

    /**
     * @return JP_CityListRQ
     */
    public function getCityListRQ()
    {
      return $this->CityListRQ;
    }

    /**
     * @param JP_CityListRQ $CityListRQ
     * @return CityList
     */
    public function setCityListRQ($CityListRQ)
    {
      $this->CityListRQ = $CityListRQ;
      return $this;
    }

}
