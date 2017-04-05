<?php

namespace Juniper\Webservice;

class JP_PackageBooking
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
     * @var JP_PackageElements $Elements
     */
    protected $Elements = null;

    /**
     * @var JP_PackageBookingAdvancedOptions $AdvancedOptions
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
     * @return JP_PackageBooking
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
     * @return JP_PackageBooking
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
     * @return JP_PackageBooking
     */
    public function setHolder($Holder)
    {
      $this->Holder = $Holder;
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
     * @return JP_PackageBooking
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
     * @return JP_PackageBooking
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
     * @return JP_PackageBooking
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
     * @return JP_PackageBooking
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
     * @return JP_PackageBooking
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return JP_PackageElements
     */
    public function getElements()
    {
      return $this->Elements;
    }

    /**
     * @param JP_PackageElements $Elements
     * @return JP_PackageBooking
     */
    public function setElements($Elements)
    {
      $this->Elements = $Elements;
      return $this;
    }

    /**
     * @return JP_PackageBookingAdvancedOptions
     */
    public function getAdvancedOptions()
    {
      return $this->AdvancedOptions;
    }

    /**
     * @param JP_PackageBookingAdvancedOptions $AdvancedOptions
     * @return JP_PackageBooking
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
     * @return JP_PackageBooking
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
     * @return JP_PackageBooking
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
     * @return JP_PackageBooking
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
