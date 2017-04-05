<?php

namespace Juniper\Webservice;

class JP_PackageChangeProductRQ
{

    /**
     * @var JP_Login $Login
     */
    protected $Login = null;

    /**
     * @var JP_PackageChangeProductRequest $PackageChangeProductRequest
     */
    protected $PackageChangeProductRequest = null;

    /**
     * @var JP_PackageAvailAdvancedOptions $AdvancedOptions
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
     * @return JP_PackageChangeProductRQ
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return JP_PackageChangeProductRequest
     */
    public function getPackageChangeProductRequest()
    {
      return $this->PackageChangeProductRequest;
    }

    /**
     * @param JP_PackageChangeProductRequest $PackageChangeProductRequest
     * @return JP_PackageChangeProductRQ
     */
    public function setPackageChangeProductRequest($PackageChangeProductRequest)
    {
      $this->PackageChangeProductRequest = $PackageChangeProductRequest;
      return $this;
    }

    /**
     * @return JP_PackageAvailAdvancedOptions
     */
    public function getAdvancedOptions()
    {
      return $this->AdvancedOptions;
    }

    /**
     * @param JP_PackageAvailAdvancedOptions $AdvancedOptions
     * @return JP_PackageChangeProductRQ
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
     * @return JP_PackageChangeProductRQ
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
     * @return JP_PackageChangeProductRQ
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
     * @return JP_PackageChangeProductRQ
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
