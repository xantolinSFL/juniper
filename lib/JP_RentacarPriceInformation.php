<?php

class JP_RentacarPriceInformation
{

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

    
    public function __construct()
    {
    
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
     * @return JP_RentacarPriceInformation
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
     * @return JP_RentacarPriceInformation
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
     * @return JP_RentacarPriceInformation
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
     * @return JP_RentacarPriceInformation
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
      return $this;
    }

}
