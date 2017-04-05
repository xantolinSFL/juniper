<?php

namespace Juniper\Webservice;

class JP_PackageOptionChangeProduct extends JP_PackageOptionRQ
{

    /**
     * @var JP_ProductType $ProductType
     */
    protected $ProductType = null;

    /**
     * @var string $ICode
     */
    protected $ICode = null;

    /**
     * @param string $RatePlanCode
     * @param JP_ProductType $ProductType
     * @param string $ICode
     */
    public function __construct($RatePlanCode, $ProductType, $ICode)
    {
      parent::__construct($RatePlanCode);
      $this->ProductType = $ProductType;
      $this->ICode = $ICode;
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
     * @return JP_PackageOptionChangeProduct
     */
    public function setProductType($ProductType)
    {
      $this->ProductType = $ProductType;
      return $this;
    }

    /**
     * @return string
     */
    public function getICode()
    {
      return $this->ICode;
    }

    /**
     * @param string $ICode
     * @return JP_PackageOptionChangeProduct
     */
    public function setICode($ICode)
    {
      $this->ICode = $ICode;
      return $this;
    }

}
