<?php

namespace Juniper\Webservice;

class JP_TransferCheckAvailRQ
{

    /**
     * @var JP_Login $Login
     */
    protected $Login = null;

    /**
     * @var JP_TransferCheckAvailRequest $TransferCheckAvailRequest
     */
    protected $TransferCheckAvailRequest = null;

    /**
     * @var JP_ServicesCheckAvailAdvancedOptions $AdvancedOptions
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
     * @return JP_TransferCheckAvailRQ
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return JP_TransferCheckAvailRequest
     */
    public function getTransferCheckAvailRequest()
    {
      return $this->TransferCheckAvailRequest;
    }

    /**
     * @param JP_TransferCheckAvailRequest $TransferCheckAvailRequest
     * @return JP_TransferCheckAvailRQ
     */
    public function setTransferCheckAvailRequest($TransferCheckAvailRequest)
    {
      $this->TransferCheckAvailRequest = $TransferCheckAvailRequest;
      return $this;
    }

    /**
     * @return JP_ServicesCheckAvailAdvancedOptions
     */
    public function getAdvancedOptions()
    {
      return $this->AdvancedOptions;
    }

    /**
     * @param JP_ServicesCheckAvailAdvancedOptions $AdvancedOptions
     * @return JP_TransferCheckAvailRQ
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
     * @return JP_TransferCheckAvailRQ
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
     * @return JP_TransferCheckAvailRQ
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
     * @return JP_TransferCheckAvailRQ
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
