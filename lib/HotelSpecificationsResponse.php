<?php

namespace Juniper\Webservice;

class HotelSpecificationsResponse
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
     * @return HotelSpecificationsResponse
     */
    public function setInventoryRS($InventoryRS)
    {
      $this->InventoryRS = $InventoryRS;
      return $this;
    }

}
