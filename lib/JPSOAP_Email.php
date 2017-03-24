<?php

class JPSOAP_Email
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var JPSOAP_HotelInventoryContactNumberType $Type
     */
    protected $Type = null;

    /**
     * @param string $_
     * @param JPSOAP_HotelInventoryContactNumberType $Type
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
     * @return JPSOAP_Email
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return JPSOAP_HotelInventoryContactNumberType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JPSOAP_HotelInventoryContactNumberType $Type
     * @return JPSOAP_Email
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
