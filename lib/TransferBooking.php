<?php

class TransferBooking
{

    /**
     * @var JP_TransferBooking $TransferBookingRQ
     */
    protected $TransferBookingRQ = null;

    /**
     * @param JP_TransferBooking $TransferBookingRQ
     */
    public function __construct($TransferBookingRQ)
    {
      $this->TransferBookingRQ = $TransferBookingRQ;
    }

    /**
     * @return JP_TransferBooking
     */
    public function getTransferBookingRQ()
    {
      return $this->TransferBookingRQ;
    }

    /**
     * @param JP_TransferBooking $TransferBookingRQ
     * @return TransferBooking
     */
    public function setTransferBookingRQ($TransferBookingRQ)
    {
      $this->TransferBookingRQ = $TransferBookingRQ;
      return $this;
    }

}
