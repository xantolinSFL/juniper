<?php

class JP_SegmentHotel
{

    /**
     * @var JP_SegmentHotelType $Type
     */
    protected $Type = null;

    /**
     * @param JP_SegmentHotelType $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return JP_SegmentHotelType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JP_SegmentHotelType $Type
     * @return JP_SegmentHotel
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
