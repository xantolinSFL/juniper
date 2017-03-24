<?php

class JP_HotelFutureRatesResults
{

    /**
     * @var JP_HotelFutureRatesResult[] $HotelFutureRatesResult
     */
    protected $HotelFutureRatesResult = null;

    /**
     * @var JP_WarningDetails $WarningDetails
     */
    protected $WarningDetails = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelFutureRatesResult[]
     */
    public function getHotelFutureRatesResult()
    {
      return $this->HotelFutureRatesResult;
    }

    /**
     * @param JP_HotelFutureRatesResult[] $HotelFutureRatesResult
     * @return JP_HotelFutureRatesResults
     */
    public function setHotelFutureRatesResult(array $HotelFutureRatesResult = null)
    {
      $this->HotelFutureRatesResult = $HotelFutureRatesResult;
      return $this;
    }

    /**
     * @return JP_WarningDetails
     */
    public function getWarningDetails()
    {
      return $this->WarningDetails;
    }

    /**
     * @param JP_WarningDetails $WarningDetails
     * @return JP_HotelFutureRatesResults
     */
    public function setWarningDetails($WarningDetails)
    {
      $this->WarningDetails = $WarningDetails;
      return $this;
    }

}
