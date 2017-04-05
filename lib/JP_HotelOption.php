<?php

namespace Juniper\Webservice;

class JP_HotelOption
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
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicy
     */
    protected $CancellationPolicy = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicyCost
     */
    protected $CancellationPolicyCost = null;

    /**
     * @var ArrayOfJP_HotelRoom $HotelRooms
     */
    protected $HotelRooms = null;

    /**
     * @var JP_HotelAdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var string $ProductType
     */
    protected $ProductType = null;

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
     * @var boolean $NonRefundable
     */
    protected $NonRefundable = null;

    /**
     * @var boolean $DynamicInventory
     */
    protected $DynamicInventory = null;

    /**
     * @var boolean $ExtranetContract
     */
    protected $ExtranetContract = null;

    /**
     * @param string $RatePlanCode
     * @param boolean $PaymentDestination
     * @param JP_AvailStatus $Status
     * @param boolean $NonRefundable
     * @param boolean $DynamicInventory
     * @param boolean $ExtranetContract
     */
    public function __construct($RatePlanCode, $PaymentDestination, $Status, $NonRefundable, $DynamicInventory, $ExtranetContract)
    {
      $this->RatePlanCode = $RatePlanCode;
      $this->PaymentDestination = $PaymentDestination;
      $this->Status = $Status;
      $this->NonRefundable = $NonRefundable;
      $this->DynamicInventory = $DynamicInventory;
      $this->ExtranetContract = $ExtranetContract;
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
     * @return JP_HotelOption
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
     * @return JP_HotelOption
     */
    public function setBoard($Board)
    {
      $this->Board = $Board;
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
     * @return JP_HotelOption
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
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
     * @return JP_HotelOption
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
     * @return JP_HotelOption
     */
    public function setCancellationPolicyCost($CancellationPolicyCost)
    {
      $this->CancellationPolicyCost = $CancellationPolicyCost;
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
     * @return JP_HotelOption
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
     * @return JP_HotelOption
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
      return $this->ProductType;
    }

    /**
     * @param string $ProductType
     * @return JP_HotelOption
     */
    public function setProductType($ProductType)
    {
      $this->ProductType = $ProductType;
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
     * @return JP_HotelOption
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
     * @return JP_HotelOption
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
     * @return JP_HotelOption
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
     * @return JP_HotelOption
     */
    public function setNonRefundable($NonRefundable)
    {
      $this->NonRefundable = $NonRefundable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDynamicInventory()
    {
      return $this->DynamicInventory;
    }

    /**
     * @param boolean $DynamicInventory
     * @return JP_HotelOption
     */
    public function setDynamicInventory($DynamicInventory)
    {
      $this->DynamicInventory = $DynamicInventory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExtranetContract()
    {
      return $this->ExtranetContract;
    }

    /**
     * @param boolean $ExtranetContract
     * @return JP_HotelOption
     */
    public function setExtranetContract($ExtranetContract)
    {
      $this->ExtranetContract = $ExtranetContract;
      return $this;
    }

}
