<?php

class JPSOAP_SuppleOfferPrice
{

    /**
     * @var ArrayOfJPSOAP_IntCodeAttr2 $RoomTypes
     */
    protected $RoomTypes = null;

    /**
     * @var ArrayOfJPSOAP_IntCodeAttr3 $Boards
     */
    protected $Boards = null;

    /**
     * @var JPSOAP_Price $Percent
     */
    protected $Percent = null;

    /**
     * @var JPSOAP_PriceTyped $Booking
     */
    protected $Booking = null;

    /**
     * @var JPSOAP_PriceTyped $Adult
     */
    protected $Adult = null;

    /**
     * @var JPSOAP_PriceTyped $Room
     */
    protected $Room = null;

    /**
     * @var ArrayOfJPSOAP_OrderedTypedPrice $AdultsAdditionals
     */
    protected $AdultsAdditionals = null;

    /**
     * @var ArrayOfJPSOAP_OrderedTypedPrice1 $ChildrenA
     */
    protected $ChildrenA = null;

    /**
     * @var ArrayOfJPSOAP_OrderedTypedPrice2 $ChildrenB
     */
    protected $ChildrenB = null;

    /**
     * @var ArrayOfJPSOAP_OrderedTypedPrice3 $Infants
     */
    protected $Infants = null;

    /**
     * @var date $From
     */
    protected $From = null;

    /**
     * @var date $To
     */
    protected $To = null;

    /**
     * @param date $From
     * @param date $To
     */
    public function __construct($From, $To)
    {
      $this->From = $From;
      $this->To = $To;
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
     * @return JPSOAP_SuppleOfferPrice
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
     * @return JPSOAP_SuppleOfferPrice
     */
    public function setBoards($Boards)
    {
      $this->Boards = $Boards;
      return $this;
    }

    /**
     * @return JPSOAP_Price
     */
    public function getPercent()
    {
      return $this->Percent;
    }

    /**
     * @param JPSOAP_Price $Percent
     * @return JPSOAP_SuppleOfferPrice
     */
    public function setPercent($Percent)
    {
      $this->Percent = $Percent;
      return $this;
    }

    /**
     * @return JPSOAP_PriceTyped
     */
    public function getBooking()
    {
      return $this->Booking;
    }

    /**
     * @param JPSOAP_PriceTyped $Booking
     * @return JPSOAP_SuppleOfferPrice
     */
    public function setBooking($Booking)
    {
      $this->Booking = $Booking;
      return $this;
    }

    /**
     * @return JPSOAP_PriceTyped
     */
    public function getAdult()
    {
      return $this->Adult;
    }

    /**
     * @param JPSOAP_PriceTyped $Adult
     * @return JPSOAP_SuppleOfferPrice
     */
    public function setAdult($Adult)
    {
      $this->Adult = $Adult;
      return $this;
    }

    /**
     * @return JPSOAP_PriceTyped
     */
    public function getRoom()
    {
      return $this->Room;
    }

    /**
     * @param JPSOAP_PriceTyped $Room
     * @return JPSOAP_SuppleOfferPrice
     */
    public function setRoom($Room)
    {
      $this->Room = $Room;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_OrderedTypedPrice
     */
    public function getAdultsAdditionals()
    {
      return $this->AdultsAdditionals;
    }

    /**
     * @param ArrayOfJPSOAP_OrderedTypedPrice $AdultsAdditionals
     * @return JPSOAP_SuppleOfferPrice
     */
    public function setAdultsAdditionals($AdultsAdditionals)
    {
      $this->AdultsAdditionals = $AdultsAdditionals;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_OrderedTypedPrice1
     */
    public function getChildrenA()
    {
      return $this->ChildrenA;
    }

    /**
     * @param ArrayOfJPSOAP_OrderedTypedPrice1 $ChildrenA
     * @return JPSOAP_SuppleOfferPrice
     */
    public function setChildrenA($ChildrenA)
    {
      $this->ChildrenA = $ChildrenA;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_OrderedTypedPrice2
     */
    public function getChildrenB()
    {
      return $this->ChildrenB;
    }

    /**
     * @param ArrayOfJPSOAP_OrderedTypedPrice2 $ChildrenB
     * @return JPSOAP_SuppleOfferPrice
     */
    public function setChildrenB($ChildrenB)
    {
      $this->ChildrenB = $ChildrenB;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_OrderedTypedPrice3
     */
    public function getInfants()
    {
      return $this->Infants;
    }

    /**
     * @param ArrayOfJPSOAP_OrderedTypedPrice3 $Infants
     * @return JPSOAP_SuppleOfferPrice
     */
    public function setInfants($Infants)
    {
      $this->Infants = $Infants;
      return $this;
    }

    /**
     * @return date
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param date $From
     * @return JPSOAP_SuppleOfferPrice
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return date
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param date $To
     * @return JPSOAP_SuppleOfferPrice
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
