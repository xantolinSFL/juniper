<?php

namespace Juniper\Webservice;

abstract class JPSOAP_BaseSupleOfferRest
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var JPSOAP_Ages $Ages
     */
    protected $Ages = null;

    /**
     * @var ArrayOfJPSOAP_IntCodeAttr2 $RoomTypes
     */
    protected $RoomTypes = null;

    /**
     * @var ArrayOfJPSOAP_IntCodeAttr3 $Boards
     */
    protected $Boards = null;

    /**
     * @var JPSOAP_CountryOfResidence $CountryOfResidence
     */
    protected $CountryOfResidence = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var boolean $OnRequest
     */
    protected $OnRequest = null;

    /**
     * @var int $CategoryCode
     */
    protected $CategoryCode = null;

    /**
     * @var int $SpecialTypeCode
     */
    protected $SpecialTypeCode = null;

    /**
     * @var boolean $SpecialTax
     */
    protected $SpecialTax = null;

    /**
     * @param int $Code
     * @param boolean $Active
     * @param boolean $OnRequest
     * @param int $CategoryCode
     * @param int $SpecialTypeCode
     * @param boolean $SpecialTax
     */
    public function __construct($Code, $Active, $OnRequest, $CategoryCode, $SpecialTypeCode, $SpecialTax)
    {
      $this->Code = $Code;
      $this->Active = $Active;
      $this->OnRequest = $OnRequest;
      $this->CategoryCode = $CategoryCode;
      $this->SpecialTypeCode = $SpecialTypeCode;
      $this->SpecialTax = $SpecialTax;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JPSOAP_BaseSupleOfferRest
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return JPSOAP_Ages
     */
    public function getAges()
    {
      return $this->Ages;
    }

    /**
     * @param JPSOAP_Ages $Ages
     * @return JPSOAP_BaseSupleOfferRest
     */
    public function setAges($Ages)
    {
      $this->Ages = $Ages;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_IntCodeAttr2
     */
    public function getRoomTypes()
    {
      return $this->RoomTypes;
    }

    /**
     * @param ArrayOfJPSOAP_IntCodeAttr2 $RoomTypes
     * @return JPSOAP_BaseSupleOfferRest
     */
    public function setRoomTypes($RoomTypes)
    {
      $this->RoomTypes = $RoomTypes;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_IntCodeAttr3
     */
    public function getBoards()
    {
      return $this->Boards;
    }

    /**
     * @param ArrayOfJPSOAP_IntCodeAttr3 $Boards
     * @return JPSOAP_BaseSupleOfferRest
     */
    public function setBoards($Boards)
    {
      $this->Boards = $Boards;
      return $this;
    }

    /**
     * @return JPSOAP_CountryOfResidence
     */
    public function getCountryOfResidence()
    {
      return $this->CountryOfResidence;
    }

    /**
     * @param JPSOAP_CountryOfResidence $CountryOfResidence
     * @return JPSOAP_BaseSupleOfferRest
     */
    public function setCountryOfResidence($CountryOfResidence)
    {
      $this->CountryOfResidence = $CountryOfResidence;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return JPSOAP_BaseSupleOfferRest
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return JPSOAP_BaseSupleOfferRest
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnRequest()
    {
      return $this->OnRequest;
    }

    /**
     * @param boolean $OnRequest
     * @return JPSOAP_BaseSupleOfferRest
     */
    public function setOnRequest($OnRequest)
    {
      $this->OnRequest = $OnRequest;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryCode()
    {
      return $this->CategoryCode;
    }

    /**
     * @param int $CategoryCode
     * @return JPSOAP_BaseSupleOfferRest
     */
    public function setCategoryCode($CategoryCode)
    {
      $this->CategoryCode = $CategoryCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getSpecialTypeCode()
    {
      return $this->SpecialTypeCode;
    }

    /**
     * @param int $SpecialTypeCode
     * @return JPSOAP_BaseSupleOfferRest
     */
    public function setSpecialTypeCode($SpecialTypeCode)
    {
      $this->SpecialTypeCode = $SpecialTypeCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSpecialTax()
    {
      return $this->SpecialTax;
    }

    /**
     * @param boolean $SpecialTax
     * @return JPSOAP_BaseSupleOfferRest
     */
    public function setSpecialTax($SpecialTax)
    {
      $this->SpecialTax = $SpecialTax;
      return $this;
    }

}
