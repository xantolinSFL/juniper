<?php

class JP_HotelOptionCheckAvail
{

    /**
     * @var JP_Supplier $Supplier
     */
    protected $Supplier = null;

    /**
     * @var JP_Board $Board
     */
    protected $Board = null;

    /**
     * @var ArrayOfJP_HotelRoom $HotelRooms
     */
    protected $HotelRooms = null;

    /**
     * @var ArrayOfJP_Comment $Comments
     */
    protected $Comments = null;

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var JP_HotelAdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var JP_HotelContent $HotelContent
     */
    protected $HotelContent = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @var boolean $PaymentDestination
     */
    protected $PaymentDestination = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

    /**
     * @param string $RatePlanCode
     * @param boolean $PaymentDestination
     * @param JP_AvailStatus $Status
     */
    public function __construct($RatePlanCode, $PaymentDestination, $Status)
    {
      $this->RatePlanCode = $RatePlanCode;
      $this->PaymentDestination = $PaymentDestination;
      $this->Status = $Status;
    }

    /**
     * @return JP_Supplier
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param JP_Supplier $Supplier
     * @return JP_HotelOptionCheckAvail
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
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
     * @return JP_HotelOptionCheckAvail
     */
    public function setBoard($Board)
    {
      $this->Board = $Board;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelRoom
     */
    public function getHotelRooms()
    {
      return $this->HotelRooms;
    }

    /**
     * @param ArrayOfJP_HotelRoom $HotelRooms
     * @return JP_HotelOptionCheckAvail
     */
    public function setHotelRooms($HotelRooms)
    {
      $this->HotelRooms = $HotelRooms;
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
     * @return JP_HotelOptionCheckAvail
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return ArrayOfJP_Price
     */
    public function getPrices()
    {
      return $this->Prices;
    }

    /**
     * @param ArrayOfJP_Price $Prices
     * @return JP_HotelOptionCheckAvail
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
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
     * @return JP_HotelOptionCheckAvail
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
      return $this;
    }

    /**
     * @return JP_HotelContent
     */
    public function getHotelContent()
    {
      return $this->HotelContent;
    }

    /**
     * @param JP_HotelContent $HotelContent
     * @return JP_HotelOptionCheckAvail
     */
    public function setHotelContent($HotelContent)
    {
      $this->HotelContent = $HotelContent;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanCode()
    {
      return $this->RatePlanCode;
    }

    /**
     * @param string $RatePlanCode
     * @return JP_HotelOptionCheckAvail
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
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
     * @return JP_HotelOptionCheckAvail
     */
    public function setPaymentDestination($PaymentDestination)
    {
      $this->PaymentDestination = $PaymentDestination;
      return $this;
    }

    /**
     * @return JP_AvailStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param JP_AvailStatus $Status
     * @return JP_HotelOptionCheckAvail
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
