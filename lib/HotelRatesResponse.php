<?php

namespace Juniper\Webservice;

class HotelRatesResponse
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
     * @return HotelRatesResponse
     */
    public function setInventoryRS($InventoryRS)
    {
      $this->InventoryRS = $InventoryRS;
      return $this;
    }

}
