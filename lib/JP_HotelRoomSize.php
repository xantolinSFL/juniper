<?php

class JP_HotelRoomSize
{

    /**
     * @var float $_
     */
    protected $_ = null;

    /**
     * @var JP_HotelRoomSizeUnitType $Unit
     */
    protected $Unit = null;

    /**
     * @param float $_
     * @param JP_HotelRoomSizeUnitType $Unit
     */
    public function __construct($_, $Unit)
    {
      $this->_ = $_;
      $this->Unit = $Unit;
    }

    /**
     * @return float
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param float $_
     * @return JP_HotelRoomSize
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return JP_HotelRoomSizeUnitType
     */
    public function getUnit()
    {
      return $this->Unit;
    }

    /**
     * @param JP_HotelRoomSizeUnitType $Unit
     * @return JP_HotelRoomSize
     */
    public function setUnit($Unit)
    {
      $this->Unit = $Unit;
      return $this;
    }

}
