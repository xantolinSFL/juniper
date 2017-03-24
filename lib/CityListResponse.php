<?php

class CityListResponse
{

    /**
     * @var JP_StaticDataRS $CityListRS
     */
    protected $CityListRS = null;

    /**
     * @param JP_StaticDataRS $CityListRS
     */
    public function __construct($CityListRS)
    {
      $this->CityListRS = $CityListRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getCityListRS()
    {
      return $this->CityListRS;
    }

    /**
     * @param JP_StaticDataRS $CityListRS
     * @return CityListResponse
     */
    public function setCityListRS($CityListRS)
    {
      $this->CityListRS = $CityListRS;
      return $this;
    }

}
