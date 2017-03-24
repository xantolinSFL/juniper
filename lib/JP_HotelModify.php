<?php

class JP_HotelModify
{

    /**
     * @var JP_Login $Login
     */
    protected $Login = null;

    /**
     * @var JP_ReservationLocationModify $ReservationLocator
     */
    protected $ReservationLocator = null;

    /**
     * @var JP_Paxes $Paxes
     */
    protected $Paxes = null;

    /**
     * @var JP_Holder $Holder
     */
    protected $Holder = null;

    /**
     * @var string $ExternalBookingReference
     */
    protected $ExternalBookingReference = null;

    /**
     * @var ArrayOfJP_Comment $Comments
     */
    protected $Comments = null;

    /**
     * @var JP_SearchSegmentHotelsModify $SearchSementHotels
     */
    protected $SearchSementHotels = null;

    /**
     * @var ArrayOfJP_HotelRelPaxDist $RelPaxesDist
     */
    protected $RelPaxesDist = null;

    /**
     * @var JP_HotelModifyAdvancedOptions $AdvancedOptions
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
     * @return JP_HotelModify
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return JP_ReservationLocationModify
     */
    public function getReservationLocator()
    {
      return $this->ReservationLocator;
    }

    /**
     * @param JP_ReservationLocationModify $ReservationLocator
     * @return JP_HotelModify
     */
    public function setReservationLocator($ReservationLocator)
    {
      $this->ReservationLocator = $ReservationLocator;
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
     * @return JP_HotelModify
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
     * @return JP_HotelModify
     */
    public function setHolder($Holder)
    {
      $this->Holder = $Holder;
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
     * @return JP_HotelModify
     */
    public function setExternalBookingReference($ExternalBookingReference)
    {
      $this->ExternalBookingReference = $ExternalBookingReference;
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
     * @return JP_HotelModify
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return JP_SearchSegmentHotelsModify
     */
    public function getSearchSementHotels()
    {
      return $this->SearchSementHotels;
    }

    /**
     * @param JP_SearchSegmentHotelsModify $SearchSementHotels
     * @return JP_HotelModify
     */
    public function setSearchSementHotels($SearchSementHotels)
    {
      $this->SearchSementHotels = $SearchSementHotels;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelRelPaxDist
     */
    public function getRelPaxesDist()
    {
      return $this->RelPaxesDist;
    }

    /**
     * @param ArrayOfJP_HotelRelPaxDist $RelPaxesDist
     * @return JP_HotelModify
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

    /**
     * @return JP_HotelModifyAdvancedOptions
     */
    public function getAdvancedOptions()
    {
      return $this->AdvancedOptions;
    }

    /**
     * @param JP_HotelModifyAdvancedOptions $AdvancedOptions
     * @return JP_HotelModify
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
     * @return JP_HotelModify
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
     * @return JP_HotelModify
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
     * @return JP_HotelModify
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
