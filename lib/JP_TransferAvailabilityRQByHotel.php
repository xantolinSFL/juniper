<?php

namespace Juniper\Webservice;

class JP_TransferAvailabilityRQByHotel
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
     * @var JP_TransferRequestByHotel $TransferRequestByHotel
     */
    protected $TransferRequestByHotel = null;

    /**
     * @var JP_ServicesAvailAdvancedOptions $AdvancedOptions
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
     * @return JP_TransferAvailabilityRQByHotel
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
     * @return JP_TransferAvailabilityRQByHotel
     */
    public function setPaxes($Paxes)
    {
      $this->Paxes = $Paxes;
      return $this;
    }

    /**
     * @return JP_TransferRequestByHotel
     */
    public function getTransferRequestByHotel()
    {
      return $this->TransferRequestByHotel;
    }

    /**
     * @param JP_TransferRequestByHotel $TransferRequestByHotel
     * @return JP_TransferAvailabilityRQByHotel
     */
    public function setTransferRequestByHotel($TransferRequestByHotel)
    {
      $this->TransferRequestByHotel = $TransferRequestByHotel;
      return $this;
    }

    /**
     * @return JP_ServicesAvailAdvancedOptions
     */
    public function getAdvancedOptions()
    {
      return $this->AdvancedOptions;
    }

    /**
     * @param JP_ServicesAvailAdvancedOptions $AdvancedOptions
     * @return JP_TransferAvailabilityRQByHotel
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
     * @return JP_TransferAvailabilityRQByHotel
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
     * @return JP_TransferAvailabilityRQByHotel
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
     * @return JP_TransferAvailabilityRQByHotel
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
