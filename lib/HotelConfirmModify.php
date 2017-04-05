<?php

namespace Juniper\Webservice;

class HotelConfirmModify
{

    /**
     * @var JP_HotelConfirmModify $HotelConfirmModifyRQ
     */
    protected $HotelConfirmModifyRQ = null;

    /**
     * @param JP_HotelConfirmModify $HotelConfirmModifyRQ
     */
    public function __construct($HotelConfirmModifyRQ)
    {
      $this->HotelConfirmModifyRQ = $HotelConfirmModifyRQ;
    }

    /**
     * @return JP_HotelConfirmModify
     */
    public function getHotelConfirmModifyRQ()
    {
      return $this->HotelConfirmModifyRQ;
    }

    /**
     * @param JP_HotelConfirmModify $HotelConfirmModifyRQ
     * @return HotelConfirmModify
     */
    public function setHotelConfirmModifyRQ($HotelConfirmModifyRQ)
    {
      $this->HotelConfirmModifyRQ = $HotelConfirmModifyRQ;
      return $this;
    }

}
