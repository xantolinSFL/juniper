<?php

class SupplierListResponse
{

    /**
     * @var JP_StaticDataRS $SupplierListRS
     */
    protected $SupplierListRS = null;

    /**
     * @param JP_StaticDataRS $SupplierListRS
     */
    public function __construct($SupplierListRS)
    {
      $this->SupplierListRS = $SupplierListRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getSupplierListRS()
    {
      return $this->SupplierListRS;
    }

    /**
     * @param JP_StaticDataRS $SupplierListRS
     * @return SupplierListResponse
     */
    public function setSupplierListRS($SupplierListRS)
    {
      $this->SupplierListRS = $SupplierListRS;
      return $this;
    }

}
