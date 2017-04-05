<?php

namespace Juniper\Webservice;

class JP_PriceInformationPackage
{

    /**
     * @var JP_PackageInfo $PackageInfo
     */
    protected $PackageInfo = null;

    /**
     * @var ArrayOfJP_PackageStay $Stays
     */
    protected $Stays = null;

    /**
     * @var JP_PackageAdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var ArrayOfJP_PackageInfoAFIPAmount $AFIPInformation
     */
    protected $AFIPInformation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PackageInfo
     */
    public function getPackageInfo()
    {
      return $this->PackageInfo;
    }

    /**
     * @param JP_PackageInfo $PackageInfo
     * @return JP_PriceInformationPackage
     */
    public function setPackageInfo($PackageInfo)
    {
      $this->PackageInfo = $PackageInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_PackageStay
     */
    public function getStays()
    {
      return $this->Stays;
    }

    /**
     * @param ArrayOfJP_PackageStay $Stays
     * @return JP_PriceInformationPackage
     */
    public function setStays($Stays)
    {
      $this->Stays = $Stays;
      return $this;
    }

    /**
     * @return JP_PackageAdditionalElements
     */
    public function getAdditionalElements()
    {
      return $this->AdditionalElements;
    }

    /**
     * @param JP_PackageAdditionalElements $AdditionalElements
     * @return JP_PriceInformationPackage
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
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
     * @return JP_PriceInformationPackage
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return ArrayOfJP_PackageInfoAFIPAmount
     */
    public function getAFIPInformation()
    {
      return $this->AFIPInformation;
    }

    /**
     * @param ArrayOfJP_PackageInfoAFIPAmount $AFIPInformation
     * @return JP_PriceInformationPackage
     */
    public function setAFIPInformation($AFIPInformation)
    {
      $this->AFIPInformation = $AFIPInformation;
      return $this;
    }

}
