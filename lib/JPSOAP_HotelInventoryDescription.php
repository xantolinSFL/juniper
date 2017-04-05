<?php

namespace Juniper\Webservice;

class JPSOAP_HotelInventoryDescription
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var JPSOAP_HotelInventoryDescriptionType $Type
     */
    protected $Type = null;

    /**
     * @param string $_
     * @param JPSOAP_HotelInventoryDescriptionType $Type
     */
    public function __construct($_, $Type)
    {
      $this->_ = $_;
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return JPSOAP_HotelInventoryDescription
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return JPSOAP_HotelInventoryDescriptionType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JPSOAP_HotelInventoryDescriptionType $Type
     * @return JPSOAP_HotelInventoryDescription
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
