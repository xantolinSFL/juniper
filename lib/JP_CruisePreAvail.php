<?php

namespace Juniper\Webservice;

class JP_CruisePreAvail
{

    /**
     * @var JP_Login $Login
     */
    protected $Login = null;

    /**
     * @var JP_CruisePreRequest $CruisePreRequest
     */
    protected $CruisePreRequest = null;

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
     * @return JP_CruisePreAvail
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return JP_CruisePreRequest
     */
    public function getCruisePreRequest()
    {
      return $this->CruisePreRequest;
    }

    /**
     * @param JP_CruisePreRequest $CruisePreRequest
     * @return JP_CruisePreAvail
     */
    public function setCruisePreRequest($CruisePreRequest)
    {
      $this->CruisePreRequest = $CruisePreRequest;
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
     * @return JP_CruisePreAvail
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
     * @return JP_CruisePreAvail
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
     * @return JP_CruisePreAvail
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
