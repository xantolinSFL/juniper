<?php

namespace Juniper\Webservice;

class JP_InsuranceCheckAvail
{

    /**
     * @var JP_Login $Login
     */
    protected $Login = null;

    /**
     * @var JP_InsuranceCheckAvailRequest $InsuranceCheckAvailRequest
     */
    protected $InsuranceCheckAvailRequest = null;

    /**
     * @var JP_InsuranceCheckAvailAdvancedOptions $AdvancedOptions
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
     * @return JP_InsuranceCheckAvail
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return JP_InsuranceCheckAvailRequest
     */
    public function getInsuranceCheckAvailRequest()
    {
      return $this->InsuranceCheckAvailRequest;
    }

    /**
     * @param JP_InsuranceCheckAvailRequest $InsuranceCheckAvailRequest
     * @return JP_InsuranceCheckAvail
     */
    public function setInsuranceCheckAvailRequest($InsuranceCheckAvailRequest)
    {
      $this->InsuranceCheckAvailRequest = $InsuranceCheckAvailRequest;
      return $this;
    }

    /**
     * @return JP_InsuranceCheckAvailAdvancedOptions
     */
    public function getAdvancedOptions()
    {
      return $this->AdvancedOptions;
    }

    /**
     * @param JP_InsuranceCheckAvailAdvancedOptions $AdvancedOptions
     * @return JP_InsuranceCheckAvail
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
     * @return JP_InsuranceCheckAvail
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
     * @return JP_InsuranceCheckAvail
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
     * @return JP_InsuranceCheckAvail
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
