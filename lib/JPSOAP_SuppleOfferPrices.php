<?php

class JPSOAP_SuppleOfferPrices
{

    /**
     * @var JPSOAP_SuppleOfferPrice[] $Price
     */
    protected $Price = null;

    /**
     * @var JPSOAP_PricePerTypes $PricePer
     */
    protected $PricePer = null;

    /**
     * @param JPSOAP_PricePerTypes $PricePer
     */
    public function __construct($PricePer)
    {
      $this->PricePer = $PricePer;
    }

    /**
     * @return JPSOAP_SuppleOfferPrice[]
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param JPSOAP_SuppleOfferPrice[] $Price
     * @return JPSOAP_SuppleOfferPrices
     */
    public function setPrice(array $Price = null)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return JPSOAP_PricePerTypes
     */
    public function getPricePer()
    {
      return $this->PricePer;
    }

    /**
     * @param JPSOAP_PricePerTypes $PricePer
     * @return JPSOAP_SuppleOfferPrices
     */
    public function setPricePer($PricePer)
    {
      $this->PricePer = $PricePer;
      return $this;
    }

}
