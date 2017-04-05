<?php

namespace Juniper\Webservice;

class JP_SupplierListRequest
{

    /**
     * @var JP_ProductType $ProductType
     */
    protected $ProductType = null;

    /**
     * @param JP_ProductType $ProductType
     */
    public function __construct($ProductType)
    {
      $this->ProductType = $ProductType;
    }

    /**
     * @return JP_ProductType
     */
    public function getProductType()
    {
      return $this->ProductType;
    }

    /**
     * @param JP_ProductType $ProductType
     * @return JP_SupplierListRequest
     */
    public function setProductType($ProductType)
    {
      $this->ProductType = $ProductType;
      return $this;
    }

}
