<?php

namespace Juniper\Webservice;

class JP_FinalCustomerSave
{

    /**
     * @var JP_Login $Login
     */
    protected $Login = null;

    /**
     * @var JP_FinalCustomerData[] $FinalCustomer
     */
    protected $FinalCustomer = null;

    /**
     * @var JP_RestrictedOptions $RestrictedOptions
     */
    protected $RestrictedOptions = null;

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @param string $Version
     * @param string $Language
     */
    public function __construct($Version, $Language)
    {
      $this->Version = $Version;
      $this->Language = $Language;
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
     * @return JP_FinalCustomerSave
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return JP_FinalCustomerData[]
     */
    public function getFinalCustomer()
    {
      return $this->FinalCustomer;
    }

    /**
     * @param JP_FinalCustomerData[] $FinalCustomer
     * @return JP_FinalCustomerSave
     */
    public function setFinalCustomer(array $FinalCustomer = null)
    {
      $this->FinalCustomer = $FinalCustomer;
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
     * @return JP_FinalCustomerSave
     */
    public function setRestrictedOptions($RestrictedOptions)
    {
      $this->RestrictedOptions = $RestrictedOptions;
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
     * @return JP_FinalCustomerSave
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
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
     * @return JP_FinalCustomerSave
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
