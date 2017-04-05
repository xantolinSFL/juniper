<?php

namespace Juniper\Webservice;

class ShoppingBasketReadResponse
{

    /**
     * @var JP_ShoppingBasketResult $ShoppingBasketReadRS
     */
    protected $ShoppingBasketReadRS = null;

    /**
     * @param JP_ShoppingBasketResult $ShoppingBasketReadRS
     */
    public function __construct($ShoppingBasketReadRS)
    {
      $this->ShoppingBasketReadRS = $ShoppingBasketReadRS;
    }

    /**
     * @return JP_ShoppingBasketResult
     */
    public function getShoppingBasketReadRS()
    {
      return $this->ShoppingBasketReadRS;
    }

    /**
     * @param JP_ShoppingBasketResult $ShoppingBasketReadRS
     * @return ShoppingBasketReadResponse
     */
    public function setShoppingBasketReadRS($ShoppingBasketReadRS)
    {
      $this->ShoppingBasketReadRS = $ShoppingBasketReadRS;
      return $this;
    }

}
