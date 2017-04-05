<?php

namespace Juniper\Webservice;

class ShoppingBasketSave
{

    /**
     * @var JP_ShoppingBasketSave $ShoppingBasketSaveRQ
     */
    protected $ShoppingBasketSaveRQ = null;

    /**
     * @param JP_ShoppingBasketSave $ShoppingBasketSaveRQ
     */
    public function __construct($ShoppingBasketSaveRQ)
    {
      $this->ShoppingBasketSaveRQ = $ShoppingBasketSaveRQ;
    }

    /**
     * @return JP_ShoppingBasketSave
     */
    public function getShoppingBasketSaveRQ()
    {
      return $this->ShoppingBasketSaveRQ;
    }

    /**
     * @param JP_ShoppingBasketSave $ShoppingBasketSaveRQ
     * @return ShoppingBasketSave
     */
    public function setShoppingBasketSaveRQ($ShoppingBasketSaveRQ)
    {
      $this->ShoppingBasketSaveRQ = $ShoppingBasketSaveRQ;
      return $this;
    }

}
