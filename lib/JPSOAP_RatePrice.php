<?php

class JPSOAP_RatePrice
{

    /**
     * @var JPSOAP_Price $Adult
     */
    protected $Adult = null;

    /**
     * @var JPSOAP_Price $Room
     */
    protected $Room = null;

    /**
     * @var ArrayOfJPSOAP_OrderedPrice $AdultAdditionals
     */
    protected $AdultAdditionals = null;

    /**
     * @var ArrayOfJPSOAP_OrderedPrice1 $ChildrenA
     */
    protected $ChildrenA = null;

    /**
     * @var ArrayOfJPSOAP_OrderedPrice2 $ChildrenB
     */
    protected $ChildrenB = null;

    /**
     * @var int $BoardCode
     */
    protected $BoardCode = null;

    /**
     * @var int $RoomTypeCode
     */
    protected $RoomTypeCode = null;

    /**
     * @param int $BoardCode
     * @param int $RoomTypeCode
     */
    public function __construct($BoardCode, $RoomTypeCode)
    {
      $this->BoardCode = $BoardCode;
      $this->RoomTypeCode = $RoomTypeCode;
    }

    /**
     * @return JPSOAP_Price
     */
    public function getAdult()
    {
      return $this->Adult;
    }

    /**
     * @param JPSOAP_Price $Adult
     * @return JPSOAP_RatePrice
     */
    public function setAdult($Adult)
    {
      $this->Adult = $Adult;
      return $this;
    }

    /**
     * @return JPSOAP_Price
     */
    public function getRoom()
    {
      return $this->Room;
    }

    /**
     * @param JPSOAP_Price $Room
     * @return JPSOAP_RatePrice
     */
    public function setRoom($Room)
    {
      $this->Room = $Room;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_OrderedPrice
     */
    public function getAdultAdditionals()
    {
      return $this->AdultAdditionals;
    }

    /**
     * @param ArrayOfJPSOAP_OrderedPrice $AdultAdditionals
     * @return JPSOAP_RatePrice
     */
    public function setAdultAdditionals($AdultAdditionals)
    {
      $this->AdultAdditionals = $AdultAdditionals;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_OrderedPrice1
     */
    public function getChildrenA()
    {
      return $this->ChildrenA;
    }

    /**
     * @param ArrayOfJPSOAP_OrderedPrice1 $ChildrenA
     * @return JPSOAP_RatePrice
     */
    public function setChildrenA($ChildrenA)
    {
      $this->ChildrenA = $ChildrenA;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_OrderedPrice2
     */
    public function getChildrenB()
    {
      return $this->ChildrenB;
    }

    /**
     * @param ArrayOfJPSOAP_OrderedPrice2 $ChildrenB
     * @return JPSOAP_RatePrice
     */
    public function setChildrenB($ChildrenB)
    {
      $this->ChildrenB = $ChildrenB;
      return $this;
    }

    /**
     * @return int
     */
    public function getBoardCode()
    {
      return $this->BoardCode;
    }

    /**
     * @param int $BoardCode
     * @return JPSOAP_RatePrice
     */
    public function setBoardCode($BoardCode)
    {
      $this->BoardCode = $BoardCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getRoomTypeCode()
    {
      return $this->RoomTypeCode;
    }

    /**
     * @param int $RoomTypeCode
     * @return JPSOAP_RatePrice
     */
    public function setRoomTypeCode($RoomTypeCode)
    {
      $this->RoomTypeCode = $RoomTypeCode;
      return $this;
    }

}
