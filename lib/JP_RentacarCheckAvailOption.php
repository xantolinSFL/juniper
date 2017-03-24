<?php

class JP_RentacarCheckAvailOption
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
     * @var string $SaleContractName
     */
    protected $SaleContractName = null;

    /**
     * @var string $CostContractName
     */
    protected $CostContractName = null;

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
     * @param string $PickUpCode
     * @param string $DropOffCode
     * @param string $AcrissCode
     * @param string $RatePlanCode
     * @param JP_AvailStatus $Status
     */
    public function __construct($PickUpCode, $DropOffCode, $AcrissCode, $RatePlanCode, $Status)
    {
      $this->PickUpCode = $PickUpCode;
      $this->DropOffCode = $DropOffCode;
      $this->AcrissCode = $AcrissCode;
      $this->RatePlanCode = $RatePlanCode;
      $this->Status = $Status;
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
     * @return JP_RentacarCheckAvailOption
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
     * @return JP_RentacarCheckAvailOption
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return string
     */
    public function getSaleContractName()
    {
      return $this->SaleContractName;
    }

    /**
     * @param string $SaleContractName
     * @return JP_RentacarCheckAvailOption
     */
    public function setSaleContractName($SaleContractName)
    {
      $this->SaleContractName = $SaleContractName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostContractName()
    {
      return $this->CostContractName;
    }

    /**
     * @param string $CostContractName
     * @return JP_RentacarCheckAvailOption
     */
    public function setCostContractName($CostContractName)
    {
      $this->CostContractName = $CostContractName;
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
     * @return JP_RentacarCheckAvailOption
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
     * @return JP_RentacarCheckAvailOption
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
     * @return JP_RentacarCheckAvailOption
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
     * @return JP_RentacarCheckAvailOption
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
     * @return JP_RentacarCheckAvailOption
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
     * @return JP_RentacarCheckAvailOption
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
