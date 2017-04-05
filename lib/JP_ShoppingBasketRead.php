<?php

namespace Juniper\Webservice;

class JP_ShoppingBasketRead
{

    /**
     * @var JP_Login $Login
     */
    protected $Login = null;

    /**
     * @var JP_ShoppingBasket $ShoppingBasket
     */
    protected $ShoppingBasket = null;

    /**
     * @var JP_RestrictedOptions $RestrictedOptions
     */
    protected $RestrictedOptions = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @param string $Language
     * @param string $Version
     */
    public function __construct($Language, $Version)
    {
      $this->Language = $Language;
      $this->Version = $Version;
    }

    /**
     * @return JP_Login
     */
    public function getLogin()
    {
      return $this->Login;
    }

    /**
     * @param JP_Login $Login
     * @return JP_ShoppingBasketRead
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return JP_ShoppingBasket
     */
    public function getShoppingBasket()
    {
      return $this->ShoppingBasket;
    }

    /**
     * @param JP_ShoppingBasket $ShoppingBasket
     * @return JP_ShoppingBasketRead
     */
    public function setShoppingBasket($ShoppingBasket)
    {
      $this->ShoppingBasket = $ShoppingBasket;
      return $this;
    }

    /**
     * @return JP_RestrictedOptions
     */
    public function getRestrictedOptions()
    {
      return $this->RestrictedOptions;
    }

    /**
     * @param JP_RestrictedOptions $RestrictedOptions
     * @return JP_ShoppingBasketRead
     */
    public function setRestrictedOptions($RestrictedOptions)
    {
      $this->RestrictedOptions = $RestrictedOptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return JP_ShoppingBasketRead
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param string $Version
     * @return JP_ShoppingBasketRead
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
