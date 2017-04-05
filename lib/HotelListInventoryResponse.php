<?php

namespace Juniper\Webservice;

class HotelListInventoryResponse
{

    /**
     * @var JP_InventoryRS $InventoryRS
     */
    protected $InventoryRS = null;

    /**
     * @param JP_InventoryRS $InventoryRS
     */
    public function __construct($InventoryRS)
    {
      $this->InventoryRS = $InventoryRS;
    }

    /**
     * @return JP_InventoryRS
     */
    public function getInventoryRS()
    {
      return $this->InventoryRS;
    }

    /**
     * @param JP_InventoryRS $InventoryRS
     * @return HotelListInventoryResponse
     */
    public function setInventoryRS($InventoryRS)
    {
      $this->InventoryRS = $InventoryRS;
      return $this;
    }

}
