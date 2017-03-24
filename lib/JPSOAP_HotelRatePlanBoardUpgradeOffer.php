<?php

class JPSOAP_HotelRatePlanBoardUpgradeOffer
{

    /**
     * @var int $BoardCodePay
     */
    protected $BoardCodePay = null;

    /**
     * @var int $BoardCodeGet
     */
    protected $BoardCodeGet = null;

    /**
     * @param int $BoardCodePay
     * @param int $BoardCodeGet
     */
    public function __construct($BoardCodePay, $BoardCodeGet)
    {
      $this->BoardCodePay = $BoardCodePay;
      $this->BoardCodeGet = $BoardCodeGet;
    }

    /**
     * @return int
     */
    public function getBoardCodePay()
    {
      return $this->BoardCodePay;
    }

    /**
     * @param int $BoardCodePay
     * @return JPSOAP_HotelRatePlanBoardUpgradeOffer
     */
    public function setBoardCodePay($BoardCodePay)
    {
      $this->BoardCodePay = $BoardCodePay;
      return $this;
    }

    /**
     * @return int
     */
    public function getBoardCodeGet()
    {
      return $this->BoardCodeGet;
    }

    /**
     * @param int $BoardCodeGet
     * @return JPSOAP_HotelRatePlanBoardUpgradeOffer
     */
    public function setBoardCodeGet($BoardCodeGet)
    {
      $this->BoardCodeGet = $BoardCodeGet;
      return $this;
    }

}
