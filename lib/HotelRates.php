<?php

class HotelRates
{

    /**
     * @var JP_HotelRatesRQ $HotelRatesRQ
     */
    protected $HotelRatesRQ = null;

    /**
     * @param JP_HotelRatesRQ $HotelRatesRQ
     */
    public function __construct($HotelRatesRQ)
    {
      $this->HotelRatesRQ = $HotelRatesRQ;
    }

    /**
     * @return JP_HotelRatesRQ
     */
    public function getHotelRatesRQ()
    {
      return $this->HotelRatesRQ;
    }

    /**
     * @param JP_HotelRatesRQ $HotelRatesRQ
     * @return HotelRates
     */
    public function setHotelRatesRQ($HotelRatesRQ)
    {
      $this->HotelRatesRQ = $HotelRatesRQ;
      return $this;
    }

}
