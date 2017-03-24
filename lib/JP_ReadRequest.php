<?php

class JP_ReadRequest
{

    /**
     * @var string $ReservationLocator
     */
    protected $ReservationLocator = null;

    /**
     * @param string $ReservationLocator
     */
    public function __construct($ReservationLocator)
    {
      $this->ReservationLocator = $ReservationLocator;
    }

    /**
     * @return string
     */
    public function getReservationLocator()
    {
      return $this->ReservationLocator;
    }

    /**
     * @param string $ReservationLocator
     * @return JP_ReadRequest
     */
    public function setReservationLocator($ReservationLocator)
    {
      $this->ReservationLocator = $ReservationLocator;
      return $this;
    }

}
