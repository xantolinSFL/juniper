<?php

class RentacarLocationListResponse
{

    /**
     * @var JP_StaticDataRS $RentacarLocationListRS
     */
    protected $RentacarLocationListRS = null;

    /**
     * @param JP_StaticDataRS $RentacarLocationListRS
     */
    public function __construct($RentacarLocationListRS)
    {
      $this->RentacarLocationListRS = $RentacarLocationListRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getRentacarLocationListRS()
    {
      return $this->RentacarLocationListRS;
    }

    /**
     * @param JP_StaticDataRS $RentacarLocationListRS
     * @return RentacarLocationListResponse
     */
    public function setRentacarLocationListRS($RentacarLocationListRS)
    {
      $this->RentacarLocationListRS = $RentacarLocationListRS;
      return $this;
    }

}
