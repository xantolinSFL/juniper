<?php

namespace Juniper\Webservice;

class JPSOAP_HotelInventoryHotel
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var JPSOAP_IdTypeName $Category
     */
    protected $Category = null;

    /**
     * @var ArrayOfJPSOAP_HotelInventoryDescription $Descriptions
     */
    protected $Descriptions = null;

    /**
     * @var JPSOAP_HotelInventoryAddress $Address
     */
    protected $Address = null;

    /**
     * @var JPSOAP_HotelInventoryContactInfo $ContactInfo
     */
    protected $ContactInfo = null;

    /**
     * @var ArrayOfJPSOAP_HotelInventoryRoomType $RoomTypes
     */
    protected $RoomTypes = null;

    /**
     * @var ArrayOfJPSOAP_IdTypeIntName $Boards
     */
    protected $Boards = null;

    /**
     * @var ArrayOfJPSOAP_IdName $DirectPaymentCardTypes
     */
    protected $DirectPaymentCardTypes = null;

    /**
     * @var JPSOAP_Ages $Ages
     */
    protected $Ages = null;

    /**
     * @var ArrayOfJPSOAP_Image $Images
     */
    protected $Images = null;

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var string $HotelCodeEncrypt
     */
    protected $HotelCodeEncrypt = null;

    /**
     * @var string $JPCode
     */
    protected $JPCode = null;

    /**
     * @var string $GIATACode
     */
    protected $GIATACode = null;

    /**
     * @var int $MinAge
     */
    protected $MinAge = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $TimeZone
     */
    protected $TimeZone = null;

    /**
     * @param string $HotelCode
     * @param string $HotelCodeEncrypt
     * @param string $JPCode
     * @param string $GIATACode
     * @param int $MinAge
     * @param string $Currency
     * @param string $TimeZone
     */
    public function __construct($HotelCode, $HotelCodeEncrypt, $JPCode, $GIATACode, $MinAge, $Currency, $TimeZone)
    {
      $this->HotelCode = $HotelCode;
      $this->HotelCodeEncrypt = $HotelCodeEncrypt;
      $this->JPCode = $JPCode;
      $this->GIATACode = $GIATACode;
      $this->MinAge = $MinAge;
      $this->Currency = $Currency;
      $this->TimeZone = $TimeZone;
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
     * @return JPSOAP_HotelInventoryHotel
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
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_HotelInventoryDescription
     */
    public function getDescriptions()
    {
      return $this->Descriptions;
    }

    /**
     * @param ArrayOfJPSOAP_HotelInventoryDescription $Descriptions
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setDescriptions($Descriptions)
    {
      $this->Descriptions = $Descriptions;
      return $this;
    }

    /**
     * @return JPSOAP_HotelInventoryAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param JPSOAP_HotelInventoryAddress $Address
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return JPSOAP_HotelInventoryContactInfo
     */
    public function getContactInfo()
    {
      return $this->ContactInfo;
    }

    /**
     * @param JPSOAP_HotelInventoryContactInfo $ContactInfo
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setContactInfo($ContactInfo)
    {
      $this->ContactInfo = $ContactInfo;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_HotelInventoryRoomType
     */
    public function getRoomTypes()
    {
      return $this->RoomTypes;
    }

    /**
     * @param ArrayOfJPSOAP_HotelInventoryRoomType $RoomTypes
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setRoomTypes($RoomTypes)
    {
      $this->RoomTypes = $RoomTypes;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_IdTypeIntName
     */
    public function getBoards()
    {
      return $this->Boards;
    }

    /**
     * @param ArrayOfJPSOAP_IdTypeIntName $Boards
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setBoards($Boards)
    {
      $this->Boards = $Boards;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_IdName
     */
    public function getDirectPaymentCardTypes()
    {
      return $this->DirectPaymentCardTypes;
    }

    /**
     * @param ArrayOfJPSOAP_IdName $DirectPaymentCardTypes
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setDirectPaymentCardTypes($DirectPaymentCardTypes)
    {
      $this->DirectPaymentCardTypes = $DirectPaymentCardTypes;
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
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setAges($Ages)
    {
      $this->Ages = $Ages;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_Image
     */
    public function getImages()
    {
      return $this->Images;
    }

    /**
     * @param ArrayOfJPSOAP_Image $Images
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param string $HotelCode
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCodeEncrypt()
    {
      return $this->HotelCodeEncrypt;
    }

    /**
     * @param string $HotelCodeEncrypt
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setHotelCodeEncrypt($HotelCodeEncrypt)
    {
      $this->HotelCodeEncrypt = $HotelCodeEncrypt;
      return $this;
    }

    /**
     * @return string
     */
    public function getJPCode()
    {
      return $this->JPCode;
    }

    /**
     * @param string $JPCode
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setJPCode($JPCode)
    {
      $this->JPCode = $JPCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getGIATACode()
    {
      return $this->GIATACode;
    }

    /**
     * @param string $GIATACode
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setGIATACode($GIATACode)
    {
      $this->GIATACode = $GIATACode;
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
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setMinAge($MinAge)
    {
      $this->MinAge = $MinAge;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
      return $this->TimeZone;
    }

    /**
     * @param string $TimeZone
     * @return JPSOAP_HotelInventoryHotel
     */
    public function setTimeZone($TimeZone)
    {
      $this->TimeZone = $TimeZone;
      return $this;
    }

}
