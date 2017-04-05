<?php

namespace Juniper\Webservice;

class SupplierList
{

    /**
     * @var JP_SupplierListRQ $SupplierListRQ
     */
    protected $SupplierListRQ = null;

    /**
     * @param JP_SupplierListRQ $SupplierListRQ
     */
    public function __construct($SupplierListRQ)
    {
      $this->SupplierListRQ = $SupplierListRQ;
    }

    /**
     * @return JP_SupplierListRQ
     */
    public function getSupplierListRQ()
    {
      return $this->SupplierListRQ;
    }

    /**
     * @param JP_SupplierListRQ $SupplierListRQ
     * @return SupplierList
     */
    public function setSupplierListRQ($SupplierListRQ)
    {
      $this->SupplierListRQ = $SupplierListRQ;
      return $this;
    }

}
