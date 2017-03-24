<?php

class HotelFutureRates
{

    /**
     * @var JP_HotelFutureRates $HotelFutureRatesRQ
     */
    protected $HotelFutureRatesRQ = null;

    /**
     * @param JP_HotelFutureRates $HotelFutureRatesRQ
     */
    public function __construct($HotelFutureRatesRQ)
    {
      $this->HotelFutureRatesRQ = $HotelFutureRatesRQ;
    }

    /**
     * @return JP_HotelFutureRates
     */
    public function getHotelFutureRatesRQ()
    {
      return $this->HotelFutureRatesRQ;
    }

    /**
     * @param JP_HotelFutureRates $HotelFutureRatesRQ
     * @return HotelFutureRates
     */
    public function setHotelFutureRatesRQ($HotelFutureRatesRQ)
    {
      $this->HotelFutureRatesRQ = $HotelFutureRatesRQ;
      return $this;
    }

}
