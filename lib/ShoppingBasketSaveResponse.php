<?php

class ShoppingBasketSaveResponse
{

    /**
     * @var JP_ShoppingBasketResult $ShoppingBasketSaveRS
     */
    protected $ShoppingBasketSaveRS = null;

    /**
     * @param JP_ShoppingBasketResult $ShoppingBasketSaveRS
     */
    public function __construct($ShoppingBasketSaveRS)
    {
      $this->ShoppingBasketSaveRS = $ShoppingBasketSaveRS;
    }

    /**
     * @return JP_ShoppingBasketResult
     */
    public function getShoppingBasketSaveRS()
    {
      return $this->ShoppingBasketSaveRS;
    }

    /**
     * @param JP_ShoppingBasketResult $ShoppingBasketSaveRS
     * @return ShoppingBasketSaveResponse
     */
    public function setShoppingBasketSaveRS($ShoppingBasketSaveRS)
    {
      $this->ShoppingBasketSaveRS = $ShoppingBasketSaveRS;
      return $this;
    }

}
