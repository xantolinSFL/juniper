<?php

class HotelModify
{

    /**
     * @var JP_HotelModify $HotelModifyRQ
     */
    protected $HotelModifyRQ = null;

    /**
     * @param JP_HotelModify $HotelModifyRQ
     */
    public function __construct($HotelModifyRQ)
    {
      $this->HotelModifyRQ = $HotelModifyRQ;
    }

    /**
     * @return JP_HotelModify
     */
    public function getHotelModifyRQ()
    {
      return $this->HotelModifyRQ;
    }

    /**
     * @param JP_HotelModify $HotelModifyRQ
     * @return HotelModify
     */
    public function setHotelModifyRQ($HotelModifyRQ)
    {
      $this->HotelModifyRQ = $HotelModifyRQ;
      return $this;
    }

}
