<?php

class JP_Compartment
{

    /**
     * @var ArrayOfJP_Seat $Seats
     */
    protected $Seats = null;

    /**
     * @var string $Cabin
     */
    protected $Cabin = null;

    /**
     * @param string $Cabin
     */
    public function __construct($Cabin)
    {
      $this->Cabin = $Cabin;
    }

    /**
     * @return ArrayOfJP_Seat
     */
    public function getSeats()
    {
      return $this->Seats;
    }

    /**
     * @param ArrayOfJP_Seat $Seats
     * @return JP_Compartment
     */
    public function setSeats($Seats)
    {
      $this->Seats = $Seats;
      return $this;
    }

    /**
     * @return string
     */
    public function getCabin()
    {
      return $this->Cabin;
    }

    /**
     * @param string $Cabin
     * @return JP_Compartment
     */
    public function setCabin($Cabin)
    {
      $this->Cabin = $Cabin;
      return $this;
    }

}
