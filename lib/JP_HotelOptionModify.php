<?php

class JP_HotelOptionModify
{

    /**
     * @var JP_BookingCode $ModifyCode
     */
    protected $ModifyCode = null;

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
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var JP_HotelAdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicy
     */
    protected $CancellationPolicy = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicyCost
     */
    protected $CancellationPolicyCost = null;

    /**
     * @var boolean $PaymentDestination
     */
    protected $PaymentDestination = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

    /**
     * @var boolean $NonRefundable
     */
    protected $NonRefundable = null;

    /**
     * @param boolean $PaymentDestination
     * @param JP_AvailStatus $Status
     * @param boolean $NonRefundable
     */
    public function __construct($PaymentDestination, $Status, $NonRefundable)
    {
      $this->PaymentDestination = $PaymentDestination;
      $this->Status = $Status;
      $this->NonRefundable = $NonRefundable;
    }

    /**
     * @return JP_BookingCode
     */
    public function getModifyCode()
    {
      return $this->ModifyCode;
    }

    /**
     * @param JP_BookingCode $ModifyCode
     * @return JP_HotelOptionModify
     */
    public function setModifyCode($ModifyCode)
    {
      $this->ModifyCode = $ModifyCode;
      return $this;
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
     * @return JP_HotelOptionModify
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
     * @return JP_HotelOptionModify
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
     * @return JP_HotelOptionModify
     */
    public function setHotelRooms($HotelRooms)
    {
      $this->HotelRooms = $HotelRooms;
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
     * @return JP_HotelOptionModify
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
     * @return JP_HotelOptionModify
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
      return $this;
    }

    /**
     * @return JP_CancellationPolicyRules
     */
    public function getCancellationPolicy()
    {
      return $this->CancellationPolicy;
    }

    /**
     * @param JP_CancellationPolicyRules $CancellationPolicy
     * @return JP_HotelOptionModify
     */
    public function setCancellationPolicy($CancellationPolicy)
    {
      $this->CancellationPolicy = $CancellationPolicy;
      return $this;
    }

    /**
     * @return JP_CancellationPolicyRules
     */
    public function getCancellationPolicyCost()
    {
      return $this->CancellationPolicyCost;
    }

    /**
     * @param JP_CancellationPolicyRules $CancellationPolicyCost
     * @return JP_HotelOptionModify
     */
    public function setCancellationPolicyCost($CancellationPolicyCost)
    {
      $this->CancellationPolicyCost = $CancellationPolicyCost;
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
     * @return JP_HotelOptionModify
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
     * @return JP_HotelOptionModify
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return JP_HotelOptionModify
     */
    public function setNonRefundable($NonRefundable)
    {
      $this->NonRefundable = $NonRefundable;
      return $this;
    }

}
