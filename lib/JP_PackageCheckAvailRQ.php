<?php

namespace Juniper\Webservice;

class JP_PackageCheckAvailRQ
{

    /**
     * @var JP_Login $Login
     */
    protected $Login = null;

    /**
     * @var JP_PackageCheckAvailRequest $PackageCheckAvailRequest
     */
    protected $PackageCheckAvailRequest = null;

    /**
     * @var JP_PackageCheckAvailAdvancedOptions $AdvancedOptions
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
     * @return JP_PackageCheckAvailRQ
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return JP_PackageCheckAvailRequest
     */
    public function getPackageCheckAvailRequest()
    {
      return $this->PackageCheckAvailRequest;
    }

    /**
     * @param JP_PackageCheckAvailRequest $PackageCheckAvailRequest
     * @return JP_PackageCheckAvailRQ
     */
    public function setPackageCheckAvailRequest($PackageCheckAvailRequest)
    {
      $this->PackageCheckAvailRequest = $PackageCheckAvailRequest;
      return $this;
    }

    /**
     * @return JP_PackageCheckAvailAdvancedOptions
     */
    public function getAdvancedOptions()
    {
      return $this->AdvancedOptions;
    }

    /**
     * @param JP_PackageCheckAvailAdvancedOptions $AdvancedOptions
     * @return JP_PackageCheckAvailRQ
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
     * @return JP_PackageCheckAvailRQ
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
     * @return JP_PackageCheckAvailRQ
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
     * @return JP_PackageCheckAvailRQ
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
