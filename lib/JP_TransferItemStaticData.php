<?php

namespace Juniper\Webservice;

class JP_TransferItemStaticData
{

    /**
     * @var ArrayOfJP_InternalSupplier1 $InternalTransferSupplierList
     */
    protected $InternalTransferSupplierList = null;

    /**
     * @var ArrayOfJP_ServiceType $TransferTypeList
     */
    protected $TransferTypeList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_InternalSupplier1
     */
    public function getInternalTransferSupplierList()
    {
      return $this->InternalTransferSupplierList;
    }

    /**
     * @param ArrayOfJP_InternalSupplier1 $InternalTransferSupplierList
     * @return JP_TransferItemStaticData
     */
    public function setInternalTransferSupplierList($InternalTransferSupplierList)
    {
      $this->InternalTransferSupplierList = $InternalTransferSupplierList;
      return $this;
    }

    /**
     * @return ArrayOfJP_ServiceType
     */
    public function getTransferTypeList()
    {
      return $this->TransferTypeList;
    }

    /**
     * @param ArrayOfJP_ServiceType $TransferTypeList
     * @return JP_TransferItemStaticData
     */
    public function setTransferTypeList($TransferTypeList)
    {
      $this->TransferTypeList = $TransferTypeList;
      return $this;
    }

}
