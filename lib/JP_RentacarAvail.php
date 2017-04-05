<?php

namespace Juniper\Webservice;

class JP_RentacarAvail
{

    /**
     * @var JP_Login $Login
     */
    protected $Login = null;

    /**
     * @var JP_RentacarRequest $RentacarRequest
     */
    protected $RentacarRequest = null;

    /**
     * @var JP_RentacarAvailAdvancedOptions $AdvancedOptions
     */
    protected $AdvancedOptions = null;

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
     * @return JP_RentacarAvail
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return JP_RentacarRequest
     */
    public function getRentacarRequest()
    {
      return $this->RentacarRequest;
    }

    /**
     * @param JP_RentacarRequest $RentacarRequest
     * @return JP_RentacarAvail
     */
    public function setRentacarRequest($RentacarRequest)
    {
      $this->RentacarRequest = $RentacarRequest;
      return $this;
    }

    /**
     * @return JP_RentacarAvailAdvancedOptions
     */
    public function getAdvancedOptions()
    {
      return $this->AdvancedOptions;
    }

    /**
     * @param JP_RentacarAvailAdvancedOptions $AdvancedOptions
     * @return JP_RentacarAvail
     */
    public function setAdvancedOptions($AdvancedOptions)
    {
      $this->AdvancedOptions = $AdvancedOptions;
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
     * @return JP_RentacarAvail
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
     * @return JP_RentacarAvail
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
     * @return JP_RentacarAvail
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
