<?php

class JP_Request
{

    /**
     * @var ArrayOfJP_RequiredField $Fields
     */
    protected $Fields = null;

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
     * @return ArrayOfJP_RequiredField
     */
    public function getFields()
    {
      return $this->Fields;
    }

    /**
     * @param ArrayOfJP_RequiredField $Fields
     * @return JP_Request
     */
    public function setFields($Fields)
    {
      $this->Fields = $Fields;
      return $this;
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
     * @return JP_Request
     */
    public function setReservationLocator($ReservationLocator)
    {
      $this->ReservationLocator = $ReservationLocator;
      return $this;
    }

}
