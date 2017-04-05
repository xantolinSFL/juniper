<?php

namespace Juniper\Webservice;

class JP_RentacarOption
{

    /**
     * @var JP_RentacarInfo $RentacarInfo
     */
    protected $RentacarInfo = null;

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var JP_RentacarSaleContract $ContractInfo
     */
    protected $ContractInfo = null;

    /**
     * @var JP_RentacarAdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var string $PickUpCode
     */
    protected $PickUpCode = null;

    /**
     * @var string $DropOffCode
     */
    protected $DropOffCode = null;

    /**
     * @var string $AcrissCode
     */
    protected $AcrissCode = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

    /**
     * @var boolean $PaymentOffice
     */
    protected $PaymentOffice = null;

    /**
     * @param string $PickUpCode
     * @param string $DropOffCode
     * @param string $AcrissCode
     * @param string $RatePlanCode
     * @param JP_AvailStatus $Status
     * @param boolean $PaymentOffice
     */
    public function __construct($PickUpCode, $DropOffCode, $AcrissCode, $RatePlanCode, $Status, $PaymentOffice)
    {
      $this->PickUpCode = $PickUpCode;
      $this->DropOffCode = $DropOffCode;
      $this->AcrissCode = $AcrissCode;
      $this->RatePlanCode = $RatePlanCode;
      $this->Status = $Status;
      $this->PaymentOffice = $PaymentOffice;
    }

    /**
     * @return JP_RentacarInfo
     */
    public function getRentacarInfo()
    {
      return $this->RentacarInfo;
    }

    /**
     * @param JP_RentacarInfo $RentacarInfo
     * @return JP_RentacarOption
     */
    public function setRentacarInfo($RentacarInfo)
    {
      $this->RentacarInfo = $RentacarInfo;
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
     * @return JP_RentacarOption
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return JP_RentacarSaleContract
     */
    public function getContractInfo()
    {
      return $this->ContractInfo;
    }

    /**
     * @param JP_RentacarSaleContract $ContractInfo
     * @return JP_RentacarOption
     */
    public function setContractInfo($ContractInfo)
    {
      $this->ContractInfo = $ContractInfo;
      return $this;
    }

    /**
     * @return JP_RentacarAdditionalElements
     */
    public function getAdditionalElements()
    {
      return $this->AdditionalElements;
    }

    /**
     * @param JP_RentacarAdditionalElements $AdditionalElements
     * @return JP_RentacarOption
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickUpCode()
    {
      return $this->PickUpCode;
    }

    /**
     * @param string $PickUpCode
     * @return JP_RentacarOption
     */
    public function setPickUpCode($PickUpCode)
    {
      $this->PickUpCode = $PickUpCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDropOffCode()
    {
      return $this->DropOffCode;
    }

    /**
     * @param string $DropOffCode
     * @return JP_RentacarOption
     */
    public function setDropOffCode($DropOffCode)
    {
      $this->DropOffCode = $DropOffCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcrissCode()
    {
      return $this->AcrissCode;
    }

    /**
     * @param string $AcrissCode
     * @return JP_RentacarOption
     */
    public function setAcrissCode($AcrissCode)
    {
      $this->AcrissCode = $AcrissCode;
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
     * @return JP_RentacarOption
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
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
     * @return JP_RentacarOption
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaymentOffice()
    {
      return $this->PaymentOffice;
    }

    /**
     * @param boolean $PaymentOffice
     * @return JP_RentacarOption
     */
    public function setPaymentOffice($PaymentOffice)
    {
      $this->PaymentOffice = $PaymentOffice;
      return $this;
    }

}
