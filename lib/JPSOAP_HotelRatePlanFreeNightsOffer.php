<?php

namespace Juniper\Webservice;

class JPSOAP_HotelRatePlanFreeNightsOffer
{

    /**
     * @var int $Nights
     */
    protected $Nights = null;

    /**
     * @var int $Free
     */
    protected $Free = null;

    /**
     * @var JPSOAP_FreeNightsOfferQuotation $Quote
     */
    protected $Quote = null;

    /**
     * @var boolean $ApplyOnce
     */
    protected $ApplyOnce = null;

    /**
     * @param int $Nights
     * @param int $Free
     * @param JPSOAP_FreeNightsOfferQuotation $Quote
     * @param boolean $ApplyOnce
     */
    public function __construct($Nights, $Free, $Quote, $ApplyOnce)
    {
      $this->Nights = $Nights;
      $this->Free = $Free;
      $this->Quote = $Quote;
      $this->ApplyOnce = $ApplyOnce;
    }

    /**
     * @return int
     */
    public function getNights()
    {
      return $this->Nights;
    }

    /**
     * @param int $Nights
     * @return JPSOAP_HotelRatePlanFreeNightsOffer
     */
    public function setNights($Nights)
    {
      $this->Nights = $Nights;
      return $this;
    }

    /**
     * @return int
     */
    public function getFree()
    {
      return $this->Free;
    }

    /**
     * @param int $Free
     * @return JPSOAP_HotelRatePlanFreeNightsOffer
     */
    public function setFree($Free)
    {
      $this->Free = $Free;
      return $this;
    }

    /**
     * @return JPSOAP_FreeNightsOfferQuotation
     */
    public function getQuote()
    {
      return $this->Quote;
    }

    /**
     * @param JPSOAP_FreeNightsOfferQuotation $Quote
     * @return JPSOAP_HotelRatePlanFreeNightsOffer
     */
    public function setQuote($Quote)
    {
      $this->Quote = $Quote;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApplyOnce()
    {
      return $this->ApplyOnce;
    }

    /**
     * @param boolean $ApplyOnce
     * @return JPSOAP_HotelRatePlanFreeNightsOffer
     */
    public function setApplyOnce($ApplyOnce)
    {
      $this->ApplyOnce = $ApplyOnce;
      return $this;
    }

}
