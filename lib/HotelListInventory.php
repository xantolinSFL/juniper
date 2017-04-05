<?php

namespace Juniper\Webservice;

class HotelListInventory
{

    /**
     * @var JP_HotelListInventoryRQ $HotelListInventoryRQ
     */
    protected $HotelListInventoryRQ = null;

    /**
     * @param JP_HotelListInventoryRQ $HotelListInventoryRQ
     */
    public function __construct($HotelListInventoryRQ)
    {
      $this->HotelListInventoryRQ = $HotelListInventoryRQ;
    }

    /**
     * @return JP_HotelListInventoryRQ
     */
    public function getHotelListInventoryRQ()
    {
      return $this->HotelListInventoryRQ;
    }

    /**
     * @param JP_HotelListInventoryRQ $HotelListInventoryRQ
     * @return HotelListInventory
     */
    public function setHotelListInventoryRQ($HotelListInventoryRQ)
    {
      $this->HotelListInventoryRQ = $HotelListInventoryRQ;
      return $this;
    }

}
