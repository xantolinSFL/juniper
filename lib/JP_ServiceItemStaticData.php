<?php

namespace Juniper\Webservice;

class JP_ServiceItemStaticData
{

    /**
     * @var ArrayOfJP_InternalSupplier $InternalServiceSupplierList
     */
    protected $InternalServiceSupplierList = null;

    /**
     * @var ArrayOfJP_ServiceCategory $ServiceCategoryList
     */
    protected $ServiceCategoryList = null;

    /**
     * @var ArrayOfJP_ServiceType $ServiceTypeList
     */
    protected $ServiceTypeList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_InternalSupplier
     */
    public function getInternalServiceSupplierList()
    {
      return $this->InternalServiceSupplierList;
    }

    /**
     * @param ArrayOfJP_InternalSupplier $InternalServiceSupplierList
     * @return JP_ServiceItemStaticData
     */
    public function setInternalServiceSupplierList($InternalServiceSupplierList)
    {
      $this->InternalServiceSupplierList = $InternalServiceSupplierList;
      return $this;
    }

    /**
     * @return ArrayOfJP_ServiceCategory
     */
    public function getServiceCategoryList()
    {
      return $this->ServiceCategoryList;
    }

    /**
     * @param ArrayOfJP_ServiceCategory $ServiceCategoryList
     * @return JP_ServiceItemStaticData
     */
    public function setServiceCategoryList($ServiceCategoryList)
    {
      $this->ServiceCategoryList = $ServiceCategoryList;
      return $this;
    }

    /**
     * @return ArrayOfJP_ServiceType
     */
    public function getServiceTypeList()
    {
      return $this->ServiceTypeList;
    }

    /**
     * @param ArrayOfJP_ServiceType $ServiceTypeList
     * @return JP_ServiceItemStaticData
     */
    public function setServiceTypeList($ServiceTypeList)
    {
      $this->ServiceTypeList = $ServiceTypeList;
      return $this;
    }

}
