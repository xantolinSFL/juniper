<?php

namespace Juniper\Webservice;

class JP_ShoppingBasketItems
{

    /**
     * @var ArrayOfString $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfString $Items
     * @return JP_ShoppingBasketItems
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
