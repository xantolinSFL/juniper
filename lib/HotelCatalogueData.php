<?php

namespace Juniper\Webservice;

class HotelCatalogueData
{

    /**
     * @var JP_HotelCatalogueDataRQ $HotelCatalogueDataRQ
     */
    protected $HotelCatalogueDataRQ = null;

    /**
     * @param JP_HotelCatalogueDataRQ $HotelCatalogueDataRQ
     */
    public function __construct($HotelCatalogueDataRQ)
    {
      $this->HotelCatalogueDataRQ = $HotelCatalogueDataRQ;
    }

    /**
     * @return JP_HotelCatalogueDataRQ
     */
    public function getHotelCatalogueDataRQ()
    {
      return $this->HotelCatalogueDataRQ;
    }

    /**
     * @param JP_HotelCatalogueDataRQ $HotelCatalogueDataRQ
     * @return HotelCatalogueData
     */
    public function setHotelCatalogueDataRQ($HotelCatalogueDataRQ)
    {
      $this->HotelCatalogueDataRQ = $HotelCatalogueDataRQ;
      return $this;
    }

}
