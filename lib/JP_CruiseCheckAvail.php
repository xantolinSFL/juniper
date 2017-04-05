<?php

namespace Juniper\Webservice;

class JP_CruiseCheckAvail
{

    /**
     * @var JP_Login $Login
     */
    protected $Login = null;

    /**
     * @var JP_Paxes $Paxes
     */
    protected $Paxes = null;

    /**
     * @var JP_CruiseCheckAvailRequest $CruiseCheckAvailRequest
     */
    protected $CruiseCheckAvailRequest = null;

    /**
     * @var JP_CruiseCheckAvailAdvancedOptions $AdvancedOptions
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
     * @return JP_CruiseCheckAvail
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return JP_Paxes
     */
    public function getPaxes()
    {
      return $this->Paxes;
    }

    /**
     * @param JP_Paxes $Paxes
     * @return JP_CruiseCheckAvail
     */
    public function setPaxes($Paxes)
    {
      $this->Paxes = $Paxes;
      return $this;
    }

    /**
     * @return JP_CruiseCheckAvailRequest
     */
    public function getCruiseCheckAvailRequest()
    {
      return $this->CruiseCheckAvailRequest;
    }

    /**
     * @param JP_CruiseCheckAvailRequest $CruiseCheckAvailRequest
     * @return JP_CruiseCheckAvail
     */
    public function setCruiseCheckAvailRequest($CruiseCheckAvailRequest)
    {
      $this->CruiseCheckAvailRequest = $CruiseCheckAvailRequest;
      return $this;
    }

    /**
     * @return JP_CruiseCheckAvailAdvancedOptions
     */
    public function getAdvancedOptions()
    {
      return $this->AdvancedOptions;
    }

    /**
     * @param JP_CruiseCheckAvailAdvancedOptions $AdvancedOptions
     * @return JP_CruiseCheckAvail
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
     * @return JP_CruiseCheckAvail
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
     * @return JP_CruiseCheckAvail
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
     * @return JP_CruiseCheckAvail
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
