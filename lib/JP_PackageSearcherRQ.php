<?php

namespace Juniper\Webservice;

class JP_PackageSearcherRQ
{

    /**
     * @var JP_Login $Login
     */
    protected $Login = null;

    /**
     * @var JP_PackageSearcherRequest $PackageSearcherRequest
     */
    protected $PackageSearcherRequest = null;

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
     * @return JP_PackageSearcherRQ
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return JP_PackageSearcherRequest
     */
    public function getPackageSearcherRequest()
    {
      return $this->PackageSearcherRequest;
    }

    /**
     * @param JP_PackageSearcherRequest $PackageSearcherRequest
     * @return JP_PackageSearcherRQ
     */
    public function setPackageSearcherRequest($PackageSearcherRequest)
    {
      $this->PackageSearcherRequest = $PackageSearcherRequest;
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
     * @return JP_PackageSearcherRQ
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
     * @return JP_PackageSearcherRQ
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
     * @return JP_PackageSearcherRQ
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
