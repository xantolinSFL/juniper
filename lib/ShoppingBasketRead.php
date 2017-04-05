<?php

namespace Juniper\Webservice;

class ShoppingBasketRead
{

    /**
     * @var JP_ShoppingBasketRead $ShoppingBasketReadRQ
     */
    protected $ShoppingBasketReadRQ = null;

    /**
     * @param JP_ShoppingBasketRead $ShoppingBasketReadRQ
     */
    public function __construct($ShoppingBasketReadRQ)
    {
      $this->ShoppingBasketReadRQ = $ShoppingBasketReadRQ;
    }

    /**
     * @return JP_ShoppingBasketRead
     */
    public function getShoppingBasketReadRQ()
    {
      return $this->ShoppingBasketReadRQ;
    }

    /**
     * @param JP_ShoppingBasketRead $ShoppingBasketReadRQ
     * @return ShoppingBasketRead
     */
    public function setShoppingBasketReadRQ($ShoppingBasketReadRQ)
    {
      $this->ShoppingBasketReadRQ = $ShoppingBasketReadRQ;
      return $this;
    }

}
