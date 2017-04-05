<?php

namespace Juniper\Webservice;

class JP_VisaItemStaticData
{

    /**
     * @var ArrayOfJP_InternalSupplier2 $InternalVisaSupplierList
     */
    protected $InternalVisaSupplierList = null;

    /**
     * @var ArrayOfJP_ServiceType $VisaTypeList
     */
    protected $VisaTypeList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_InternalSupplier2
     */
    public function getInternalVisaSupplierList()
    {
      return $this->InternalVisaSupplierList;
    }

    /**
     * @param ArrayOfJP_InternalSupplier2 $InternalVisaSupplierList
     * @return JP_VisaItemStaticData
     */
    public function setInternalVisaSupplierList($InternalVisaSupplierList)
    {
      $this->InternalVisaSupplierList = $InternalVisaSupplierList;
      return $this;
    }

    /**
     * @return ArrayOfJP_ServiceType
     */
    public function getVisaTypeList()
    {
      return $this->VisaTypeList;
    }

    /**
     * @param ArrayOfJP_ServiceType $VisaTypeList
     * @return JP_VisaItemStaticData
     */
    public function setVisaTypeList($VisaTypeList)
    {
      $this->VisaTypeList = $VisaTypeList;
      return $this;
    }

}
