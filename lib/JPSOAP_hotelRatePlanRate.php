<?php

class JPSOAP_hotelRatePlanRate
{

    /**
     * @var ArrayOfJPSOAP_DateIntervals $StayDates
     */
    protected $StayDates = null;

    /**
     * @var JPSOAP_RateDiscounts $RateDiscounts
     */
    protected $RateDiscounts = null;

    /**
     * @var ArrayOfJPSOAP_RatePrice $RatePrices
     */
    protected $RatePrices = null;

    /**
     * @var JPSOAP_Ages $Ages
     */
    protected $Ages = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param string $Code
     */
    public function __construct($Code)
    {
      $this->Code = $Code;
    }

    /**
     * @return ArrayOfJPSOAP_DateIntervals
     */
    public function getStayDates()
    {
      return $this->StayDates;
    }

    /**
     * @param ArrayOfJPSOAP_DateIntervals $StayDates
     * @return JPSOAP_hotelRatePlanRate
     */
    public function setStayDates($StayDates)
    {
      $this->StayDates = $StayDates;
      return $this;
    }

    /**
     * @return JPSOAP_RateDiscounts
     */
    public function getRateDiscounts()
    {
      return $this->RateDiscounts;
    }

    /**
     * @param JPSOAP_RateDiscounts $RateDiscounts
     * @return JPSOAP_hotelRatePlanRate
     */
    public function setRateDiscounts($RateDiscounts)
    {
      $this->RateDiscounts = $RateDiscounts;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_RatePrice
     */
    public function getRatePrices()
    {
      return $this->RatePrices;
    }

    /**
     * @param ArrayOfJPSOAP_RatePrice $RatePrices
     * @return JPSOAP_hotelRatePlanRate
     */
    public function setRatePrices($RatePrices)
    {
      $this->RatePrices = $RatePrices;
      return $this;
    }

    /**
     * @return JPSOAP_Ages
     */
    public function getAges()
    {
      return $this->Ages;
    }

    /**
     * @param JPSOAP_Ages $Ages
     * @return JPSOAP_hotelRatePlanRate
     */
    public function setAges($Ages)
    {
      $this->Ages = $Ages;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return JPSOAP_hotelRatePlanRate
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
