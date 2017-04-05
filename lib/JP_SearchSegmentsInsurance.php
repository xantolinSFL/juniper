<?php

namespace Juniper\Webservice;

class JP_SearchSegmentsInsurance
{

    /**
     * @var JP_SearchSegmentInsurance $SearchSegmentInsurance
     */
    protected $SearchSegmentInsurance = null;

    /**
     * @var string $CountryOfResidence
     */
    protected $CountryOfResidence = null;

    /**
     * @var ArrayOfString3 $Suppliers
     */
    protected $Suppliers = null;

    /**
     * @var ArrayOfJP_ProductType $ProductTypes
     */
    protected $ProductTypes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentInsurance
     */
    public function getSearchSegmentInsurance()
    {
      return $this->SearchSegmentInsurance;
    }

    /**
     * @param JP_SearchSegmentInsurance $SearchSegmentInsurance
     * @return JP_SearchSegmentsInsurance
     */
    public function setSearchSegmentInsurance($SearchSegmentInsurance)
    {
      $this->SearchSegmentInsurance = $SearchSegmentInsurance;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryOfResidence()
    {
      return $this->CountryOfResidence;
    }

    /**
     * @param string $CountryOfResidence
     * @return JP_SearchSegmentsInsurance
     */
    public function setCountryOfResidence($CountryOfResidence)
    {
      $this->CountryOfResidence = $CountryOfResidence;
      return $this;
    }

    /**
     * @return ArrayOfString3
     */
    public function getSuppliers()
    {
      return $this->Suppliers;
    }

    /**
     * @param ArrayOfString3 $Suppliers
     * @return JP_SearchSegmentsInsurance
     */
    public function setSuppliers($Suppliers)
    {
      $this->Suppliers = $Suppliers;
      return $this;
    }

    /**
     * @return ArrayOfJP_ProductType
     */
    public function getProductTypes()
    {
      return $this->ProductTypes;
    }

    /**
     * @param ArrayOfJP_ProductType $ProductTypes
     * @return JP_SearchSegmentsInsurance
     */
    public function setProductTypes($ProductTypes)
    {
      $this->ProductTypes = $ProductTypes;
      return $this;
    }

}
