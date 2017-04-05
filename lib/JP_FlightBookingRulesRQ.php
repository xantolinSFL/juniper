<?php

namespace Juniper\Webservice;

class JP_FlightBookingRulesRQ
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
     * @var JP_FlightBookingRulesRequest $FlightBookingRulesRequest
     */
    protected $FlightBookingRulesRequest = null;

    /**
     * @var JP_FlightBookingRulesAdvancedOptions $AdvancedOptions
     */
    protected $AdvancedOptions = null;

    /**
     * @var JP_RestrictedOptions $RestrictedOptions
     */
    protected $RestrictedOptions = null;

    /**
     * @var JP_FlightAssignSeats $AssignSeats
     */
    protected $AssignSeats = null;

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
     * @return JP_FlightBookingRulesRQ
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
     * @return JP_FlightBookingRulesRQ
     */
    public function setPaxes($Paxes)
    {
      $this->Paxes = $Paxes;
      return $this;
    }

    /**
     * @return JP_FlightBookingRulesRequest
     */
    public function getFlightBookingRulesRequest()
    {
      return $this->FlightBookingRulesRequest;
    }

    /**
     * @param JP_FlightBookingRulesRequest $FlightBookingRulesRequest
     * @return JP_FlightBookingRulesRQ
     */
    public function setFlightBookingRulesRequest($FlightBookingRulesRequest)
    {
      $this->FlightBookingRulesRequest = $FlightBookingRulesRequest;
      return $this;
    }

    /**
     * @return JP_FlightBookingRulesAdvancedOptions
     */
    public function getAdvancedOptions()
    {
      return $this->AdvancedOptions;
    }

    /**
     * @param JP_FlightBookingRulesAdvancedOptions $AdvancedOptions
     * @return JP_FlightBookingRulesRQ
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
     * @return JP_FlightBookingRulesRQ
     */
    public function setRestrictedOptions($RestrictedOptions)
    {
      $this->RestrictedOptions = $RestrictedOptions;
      return $this;
    }

    /**
     * @return JP_FlightAssignSeats
     */
    public function getAssignSeats()
    {
      return $this->AssignSeats;
    }

    /**
     * @param JP_FlightAssignSeats $AssignSeats
     * @return JP_FlightBookingRulesRQ
     */
    public function setAssignSeats($AssignSeats)
    {
      $this->AssignSeats = $AssignSeats;
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
     * @return JP_FlightBookingRulesRQ
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
     * @return JP_FlightBookingRulesRQ
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
