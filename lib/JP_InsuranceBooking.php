<?php

namespace Juniper\Webservice;

class JP_InsuranceBooking
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
     * @var JP_Holder $Holder
     */
    protected $Holder = null;

    /**
     * @var JP_EmergencyContact $EmergencyContact
     */
    protected $EmergencyContact = null;

    /**
     * @var string $ReservationLocator
     */
    protected $ReservationLocator = null;

    /**
     * @var string $ExternalBookingReference
     */
    protected $ExternalBookingReference = null;

    /**
     * @var string $FileNumber
     */
    protected $FileNumber = null;

    /**
     * @var JP_Agent $Agent
     */
    protected $Agent = null;

    /**
     * @var ArrayOfJP_Comment $Comments
     */
    protected $Comments = null;

    /**
     * @var JP_InsuranceElements $Elements
     */
    protected $Elements = null;

    /**
     * @var JP_InsuranceBookingAdvancedOptions $AdvancedOptions
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
     * @return JP_InsuranceBooking
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
     * @return JP_InsuranceBooking
     */
    public function setPaxes($Paxes)
    {
      $this->Paxes = $Paxes;
      return $this;
    }

    /**
     * @return JP_Holder
     */
    public function getHolder()
    {
      return $this->Holder;
    }

    /**
     * @param JP_Holder $Holder
     * @return JP_InsuranceBooking
     */
    public function setHolder($Holder)
    {
      $this->Holder = $Holder;
      return $this;
    }

    /**
     * @return JP_EmergencyContact
     */
    public function getEmergencyContact()
    {
      return $this->EmergencyContact;
    }

    /**
     * @param JP_EmergencyContact $EmergencyContact
     * @return JP_InsuranceBooking
     */
    public function setEmergencyContact($EmergencyContact)
    {
      $this->EmergencyContact = $EmergencyContact;
      return $this;
    }

    /**
     * @return string
     */
    public function getReservationLocator()
    {
      return $this->ReservationLocator;
    }

    /**
     * @param string $ReservationLocator
     * @return JP_InsuranceBooking
     */
    public function setReservationLocator($ReservationLocator)
    {
      $this->ReservationLocator = $ReservationLocator;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalBookingReference()
    {
      return $this->ExternalBookingReference;
    }

    /**
     * @param string $ExternalBookingReference
     * @return JP_InsuranceBooking
     */
    public function setExternalBookingReference($ExternalBookingReference)
    {
      $this->ExternalBookingReference = $ExternalBookingReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileNumber()
    {
      return $this->FileNumber;
    }

    /**
     * @param string $FileNumber
     * @return JP_InsuranceBooking
     */
    public function setFileNumber($FileNumber)
    {
      $this->FileNumber = $FileNumber;
      return $this;
    }

    /**
     * @return JP_Agent
     */
    public function getAgent()
    {
      return $this->Agent;
    }

    /**
     * @param JP_Agent $Agent
     * @return JP_InsuranceBooking
     */
    public function setAgent($Agent)
    {
      $this->Agent = $Agent;
      return $this;
    }

    /**
     * @return ArrayOfJP_Comment
     */
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param ArrayOfJP_Comment $Comments
     * @return JP_InsuranceBooking
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return JP_InsuranceElements
     */
    public function getElements()
    {
      return $this->Elements;
    }

    /**
     * @param JP_InsuranceElements $Elements
     * @return JP_InsuranceBooking
     */
    public function setElements($Elements)
    {
      $this->Elements = $Elements;
      return $this;
    }

    /**
     * @return JP_InsuranceBookingAdvancedOptions
     */
    public function getAdvancedOptions()
    {
      return $this->AdvancedOptions;
    }

    /**
     * @param JP_InsuranceBookingAdvancedOptions $AdvancedOptions
     * @return JP_InsuranceBooking
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
     * @return JP_InsuranceBooking
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
     * @return JP_InsuranceBooking
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
     * @return JP_InsuranceBooking
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
