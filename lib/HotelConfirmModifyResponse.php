<?php

class HotelConfirmModifyResponse
{

    /**
     * @var JP_BookingRS $ConfirmModifyRS
     */
    protected $ConfirmModifyRS = null;

    /**
     * @param JP_BookingRS $ConfirmModifyRS
     */
    public function __construct($ConfirmModifyRS)
    {
      $this->ConfirmModifyRS = $ConfirmModifyRS;
    }

    /**
     * @return JP_BookingRS
     */
    public function getConfirmModifyRS()
    {
      return $this->ConfirmModifyRS;
    }

    /**
     * @param JP_BookingRS $ConfirmModifyRS
     * @return HotelConfirmModifyResponse
     */
    public function setConfirmModifyRS($ConfirmModifyRS)
    {
      $this->ConfirmModifyRS = $ConfirmModifyRS;
      return $this;
    }

}
