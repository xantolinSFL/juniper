<?php

namespace Juniper\Webservice;

class JPSOAP_HotelInventoryRoomType
{

    /**
     * @var ArrayOfJPSOAP_Occupancy $Occupancies
     */
    protected $Occupancies = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var JPSOAP_IdTypeName $Category
     */
    protected $Category = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var int $MinAge
     */
    protected $MinAge = null;

    /**
     * @var int $MaxPax
     */
    protected $MaxPax = null;

    /**
     * @var int $AdultAdditionalFrom
     */
    protected $AdultAdditionalFrom = null;

    /**
     * @var int $AlternativeAllotmentRoomType
     */
    protected $AlternativeAllotmentRoomType = null;

    /**
     * @var string $ExternalCode
     */
    protected $ExternalCode = null;

    /**
     * @var boolean $PricePerRoom
     */
    protected $PricePerRoom = null;

    /**
     * @var boolean $NonRefundable
     */
    protected $NonRefundable = null;

    /**
     * @param int $Code
     * @param int $MinAge
     * @param int $MaxPax
     * @param int $AdultAdditionalFrom
     * @param int $AlternativeAllotmentRoomType
     * @param string $ExternalCode
     * @param boolean $PricePerRoom
     * @param boolean $NonRefundable
     */
    public function __construct($Code, $MinAge, $MaxPax, $AdultAdditionalFrom, $AlternativeAllotmentRoomType, $ExternalCode, $PricePerRoom, $NonRefundable)
    {
      $this->Code = $Code;
      $this->MinAge = $MinAge;
      $this->MaxPax = $MaxPax;
      $this->AdultAdditionalFrom = $AdultAdditionalFrom;
      $this->AlternativeAllotmentRoomType = $AlternativeAllotmentRoomType;
      $this->ExternalCode = $ExternalCode;
      $this->PricePerRoom = $PricePerRoom;
      $this->NonRefundable = $NonRefundable;
    }

    /**
     * @return ArrayOfJPSOAP_Occupancy
     */
    public function getOccupancies()
    {
      return $this->Occupancies;
    }

    /**
     * @param ArrayOfJPSOAP_Occupancy $Occupancies
     * @return JPSOAP_HotelInventoryRoomType
     */
    public function setOccupancies($Occupancies)
    {
      $this->Occupancies = $Occupancies;
      return $this;
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
     * @return JPSOAP_HotelInventoryRoomType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return JPSOAP_IdTypeName
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param JPSOAP_IdTypeName $Category
     * @return JPSOAP_HotelInventoryRoomType
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
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
     * @return JPSOAP_HotelInventoryRoomType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinAge()
    {
      return $this->MinAge;
    }

    /**
     * @param int $MinAge
     * @return JPSOAP_HotelInventoryRoomType
     */
    public function setMinAge($MinAge)
    {
      $this->MinAge = $MinAge;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxPax()
    {
      return $this->MaxPax;
    }

    /**
     * @param int $MaxPax
     * @return JPSOAP_HotelInventoryRoomType
     */
    public function setMaxPax($MaxPax)
    {
      $this->MaxPax = $MaxPax;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdultAdditionalFrom()
    {
      return $this->AdultAdditionalFrom;
    }

    /**
     * @param int $AdultAdditionalFrom
     * @return JPSOAP_HotelInventoryRoomType
     */
    public function setAdultAdditionalFrom($AdultAdditionalFrom)
    {
      $this->AdultAdditionalFrom = $AdultAdditionalFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getAlternativeAllotmentRoomType()
    {
      return $this->AlternativeAllotmentRoomType;
    }

    /**
     * @param int $AlternativeAllotmentRoomType
     * @return JPSOAP_HotelInventoryRoomType
     */
    public function setAlternativeAllotmentRoomType($AlternativeAllotmentRoomType)
    {
      $this->AlternativeAllotmentRoomType = $AlternativeAllotmentRoomType;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalCode()
    {
      return $this->ExternalCode;
    }

    /**
     * @param string $ExternalCode
     * @return JPSOAP_HotelInventoryRoomType
     */
    public function setExternalCode($ExternalCode)
    {
      $this->ExternalCode = $ExternalCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPricePerRoom()
    {
      return $this->PricePerRoom;
    }

    /**
     * @param boolean $PricePerRoom
     * @return JPSOAP_HotelInventoryRoomType
     */
    public function setPricePerRoom($PricePerRoom)
    {
      $this->PricePerRoom = $PricePerRoom;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonRefundable()
    {
      return $this->NonRefundable;
    }

    /**
     * @param boolean $NonRefundable
     * @return JPSOAP_HotelInventoryRoomType
     */
    public function setNonRefundable($NonRefundable)
    {
      $this->NonRefundable = $NonRefundable;
      return $this;
    }

}
