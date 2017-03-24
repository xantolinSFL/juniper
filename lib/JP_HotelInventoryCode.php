<?php

class JP_HotelInventoryCode
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @param string $_
     */
    public function __construct($_)
    {
      $this->_ = $_;
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
     * @return JP_HotelInventoryCode
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
