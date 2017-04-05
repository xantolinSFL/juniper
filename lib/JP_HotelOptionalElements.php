<?php

namespace Juniper\Webservice;

class JP_HotelOptionalElements
{

    /**
     * @var ArrayOfJP_Comment $Comments
     */
    protected $Comments = null;

    /**
     * @var ArrayOfJP_HotelAdditionalElement $HotelSupplements
     */
    protected $HotelSupplements = null;

    /**
     * @var ArrayOfJP_HotelPreference $Preferences
     */
    protected $Preferences = null;

    /**
     * @var ArrayOfJP_CreditCard $AllowedCreditCards
     */
    protected $AllowedCreditCards = null;

    
    public function __construct()
    {
    
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
     * @return JP_HotelOptionalElements
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelAdditionalElement
     */
    public function getHotelSupplements()
    {
      return $this->HotelSupplements;
    }

    /**
     * @param ArrayOfJP_HotelAdditionalElement $HotelSupplements
     * @return JP_HotelOptionalElements
     */
    public function setHotelSupplements($HotelSupplements)
    {
      $this->HotelSupplements = $HotelSupplements;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelPreference
     */
    public function getPreferences()
    {
      return $this->Preferences;
    }

    /**
     * @param ArrayOfJP_HotelPreference $Preferences
     * @return JP_HotelOptionalElements
     */
    public function setPreferences($Preferences)
    {
      $this->Preferences = $Preferences;
      return $this;
    }

    /**
     * @return ArrayOfJP_CreditCard
     */
    public function getAllowedCreditCards()
    {
      return $this->AllowedCreditCards;
    }

    /**
     * @param ArrayOfJP_CreditCard $AllowedCreditCards
     * @return JP_HotelOptionalElements
     */
    public function setAllowedCreditCards($AllowedCreditCards)
    {
      $this->AllowedCreditCards = $AllowedCreditCards;
      return $this;
    }

}
