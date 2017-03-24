<?php

class JP_HotelItem extends JP_BaseItem
{

    /**
     * @var JP_ItemHotelInfo $HotelInfo
     */
    protected $HotelInfo = null;

    /**
     * @var JP_Board $Board
     */
    protected $Board = null;

    /**
     * @var ArrayOfJP_ItemHotelRoom $HotelRooms
     */
    protected $HotelRooms = null;

    /**
     * @var JP_HotelAdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var date $End
     */
    protected $End = null;

    /**
     * @var boolean $PaymentDestination
     */
    protected $PaymentDestination = null;

    /**
     * @param string $ItemId
     * @param JP_ItemStatus $Status
     * @param date $Start
     * @param date $End
     * @param boolean $PaymentDestination
     */
    public function __construct($ItemId, $Status, $Start, $End, $PaymentDestination)
    {
      parent::__construct($ItemId, $Status);
      $this->Start = $Start;
      $this->End = $End;
      $this->PaymentDestination = $PaymentDestination;
    }

    /**
     * @return JP_ItemHotelInfo
     */
    public function getHotelInfo()
    {
      return $this->HotelInfo;
    }

    /**
     * @param JP_ItemHotelInfo $HotelInfo
     * @return JP_HotelItem
     */
    public function setHotelInfo($HotelInfo)
    {
      $this->HotelInfo = $HotelInfo;
      return $this;
    }

    /**
     * @return JP_Board
     */
    public function getBoard()
    {
      return $this->Board;
    }

    /**
     * @param JP_Board $Board
     * @return JP_HotelItem
     */
    public function setBoard($Board)
    {
      $this->Board = $Board;
      return $this;
    }

    /**
     * @return ArrayOfJP_ItemHotelRoom
     */
    public function getHotelRooms()
    {
      return $this->HotelRooms;
    }

    /**
     * @param ArrayOfJP_ItemHotelRoom $HotelRooms
     * @return JP_HotelItem
     */
    public function setHotelRooms($HotelRooms)
    {
      $this->HotelRooms = $HotelRooms;
      return $this;
    }

    /**
     * @return JP_HotelAdditionalElements
     */
    public function getAdditionalElements()
    {
      return $this->AdditionalElements;
    }

    /**
     * @param JP_HotelAdditionalElements $AdditionalElements
     * @return JP_HotelItem
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
      return $this;
    }

    /**
     * @return date
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param date $Start
     * @return JP_HotelItem
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return date
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param date $End
     * @return JP_HotelItem
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaymentDestination()
    {
      return $this->PaymentDestination;
    }

    /**
     * @param boolean $PaymentDestination
     * @return JP_HotelItem
     */
    public function setPaymentDestination($PaymentDestination)
    {
      $this->PaymentDestination = $PaymentDestination;
      return $this;
    }

}
