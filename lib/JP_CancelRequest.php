<?php

namespace Juniper\Webservice;

class JP_CancelRequest
{

    /**
     * @var string $ReservationLocator
     */
    protected $ReservationLocator = null;

    /**
     * @var int $ItemId
     */
    protected $ItemId = null;

    /**
     * @var boolean $OnlyCancellationFees
     */
    protected $OnlyCancellationFees = null;

    /**
     * @param string $ReservationLocator
     * @param int $ItemId
     * @param boolean $OnlyCancellationFees
     */
    public function __construct($ReservationLocator, $ItemId = null, $OnlyCancellationFees = null)
    {
      $this->ReservationLocator = $ReservationLocator;
      $this->ItemId = $ItemId;
      $this->OnlyCancellationFees = $OnlyCancellationFees;
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
     * @return JP_CancelRequest
     */
    public function setReservationLocator($ReservationLocator)
    {
      $this->ReservationLocator = $ReservationLocator;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
      return $this->ItemId;
    }

    /**
     * @param int $ItemId
     * @return JP_CancelRequest
     */
    public function setItemId($ItemId)
    {
      $this->ItemId = $ItemId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyCancellationFees()
    {
      return $this->OnlyCancellationFees;
    }

    /**
     * @param boolean $OnlyCancellationFees
     * @return JP_CancelRequest
     */
    public function setOnlyCancellationFees($OnlyCancellationFees)
    {
      $this->OnlyCancellationFees = $OnlyCancellationFees;
      return $this;
    }

}
