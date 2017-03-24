<?php

class HotelFutureRatesResponse
{

    /**
     * @var JP_AvailResponseRS $FutureRatesRS
     */
    protected $FutureRatesRS = null;

    /**
     * @param JP_AvailResponseRS $FutureRatesRS
     */
    public function __construct($FutureRatesRS)
    {
      $this->FutureRatesRS = $FutureRatesRS;
    }

    /**
     * @return JP_AvailResponseRS
     */
    public function getFutureRatesRS()
    {
      return $this->FutureRatesRS;
    }

    /**
     * @param JP_AvailResponseRS $FutureRatesRS
     * @return HotelFutureRatesResponse
     */
    public function setFutureRatesRS($FutureRatesRS)
    {
      $this->FutureRatesRS = $FutureRatesRS;
      return $this;
    }

}
