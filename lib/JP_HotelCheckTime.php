<?php

class JP_HotelCheckTime
{

    /**
     * @var string $CheckIn
     */
    protected $CheckIn = null;

    /**
     * @var string $CheckOut
     */
    protected $CheckOut = null;

    /**
     * @param string $CheckIn
     * @param string $CheckOut
     */
    public function __construct($CheckIn, $CheckOut)
    {
      $this->CheckIn = $CheckIn;
      $this->CheckOut = $CheckOut;
    }

    /**
     * @return string
     */
    public function getCheckIn()
    {
      return $this->CheckIn;
    }

    /**
     * @param string $CheckIn
     * @return JP_HotelCheckTime
     */
    public function setCheckIn($CheckIn)
    {
      $this->CheckIn = $CheckIn;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckOut()
    {
      return $this->CheckOut;
    }

    /**
     * @param string $CheckOut
     * @return JP_HotelCheckTime
     */
    public function setCheckOut($CheckOut)
    {
      $this->CheckOut = $CheckOut;
      return $this;
    }

}
