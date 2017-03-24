<?php

class JPSOAP_HotelRatePlanRoomUpgradeOffer
{

    /**
     * @var int $RoomTypeCodePay
     */
    protected $RoomTypeCodePay = null;

    /**
     * @var int $RoomTypeCodeGet
     */
    protected $RoomTypeCodeGet = null;

    /**
     * @param int $RoomTypeCodePay
     * @param int $RoomTypeCodeGet
     */
    public function __construct($RoomTypeCodePay, $RoomTypeCodeGet)
    {
      $this->RoomTypeCodePay = $RoomTypeCodePay;
      $this->RoomTypeCodeGet = $RoomTypeCodeGet;
    }

    /**
     * @return int
     */
    public function getRoomTypeCodePay()
    {
      return $this->RoomTypeCodePay;
    }

    /**
     * @param int $RoomTypeCodePay
     * @return JPSOAP_HotelRatePlanRoomUpgradeOffer
     */
    public function setRoomTypeCodePay($RoomTypeCodePay)
    {
      $this->RoomTypeCodePay = $RoomTypeCodePay;
      return $this;
    }

    /**
     * @return int
     */
    public function getRoomTypeCodeGet()
    {
      return $this->RoomTypeCodeGet;
    }

    /**
     * @param int $RoomTypeCodeGet
     * @return JPSOAP_HotelRatePlanRoomUpgradeOffer
     */
    public function setRoomTypeCodeGet($RoomTypeCodeGet)
    {
      $this->RoomTypeCodeGet = $RoomTypeCodeGet;
      return $this;
    }

}
