<?php

namespace Juniper\Webservice;

class JP_PaxSeat
{

    /**
     * @var string $SeatSelectionCode
     */
    protected $SeatSelectionCode = null;

    /**
     * @param string $SeatSelectionCode
     */
    public function __construct($SeatSelectionCode)
    {
      $this->SeatSelectionCode = $SeatSelectionCode;
    }

    /**
     * @return string
     */
    public function getSeatSelectionCode()
    {
      return $this->SeatSelectionCode;
    }

    /**
     * @param string $SeatSelectionCode
     * @return JP_PaxSeat
     */
    public function setSeatSelectionCode($SeatSelectionCode)
    {
      $this->SeatSelectionCode = $SeatSelectionCode;
      return $this;
    }

}
