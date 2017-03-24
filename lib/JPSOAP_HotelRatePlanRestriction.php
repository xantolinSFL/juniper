<?php

class JPSOAP_HotelRatePlanRestriction extends JPSOAP_BaseSupleOfferRest
{

    /**
     * @var JPSOAP_ApplicationRules $ApplicationRules
     */
    protected $ApplicationRules = null;

    /**
     * @var JPSOAP_RestrictionType $Type
     */
    protected $Type = null;

    /**
     * @var boolean $Packaged
     */
    protected $Packaged = null;

    /**
     * @param int $Code
     * @param boolean $Active
     * @param boolean $OnRequest
     * @param int $CategoryCode
     * @param int $SpecialTypeCode
     * @param boolean $SpecialTax
     * @param JPSOAP_RestrictionType $Type
     * @param boolean $Packaged
     */
    public function __construct($Code, $Active, $OnRequest, $CategoryCode, $SpecialTypeCode, $SpecialTax, $Type, $Packaged)
    {
      parent::__construct($Code, $Active, $OnRequest, $CategoryCode, $SpecialTypeCode, $SpecialTax);
      $this->Type = $Type;
      $this->Packaged = $Packaged;
    }

    /**
     * @return JPSOAP_ApplicationRules
     */
    public function getApplicationRules()
    {
      return $this->ApplicationRules;
    }

    /**
     * @param JPSOAP_ApplicationRules $ApplicationRules
     * @return JPSOAP_HotelRatePlanRestriction
     */
    public function setApplicationRules($ApplicationRules)
    {
      $this->ApplicationRules = $ApplicationRules;
      return $this;
    }

    /**
     * @return JPSOAP_RestrictionType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JPSOAP_RestrictionType $Type
     * @return JPSOAP_HotelRatePlanRestriction
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPackaged()
    {
      return $this->Packaged;
    }

    /**
     * @param boolean $Packaged
     * @return JPSOAP_HotelRatePlanRestriction
     */
    public function setPackaged($Packaged)
    {
      $this->Packaged = $Packaged;
      return $this;
    }

}
