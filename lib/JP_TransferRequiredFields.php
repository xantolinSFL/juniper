<?php

class JP_TransferRequiredFields
{

    /**
     * @var JP_TransferBooking $TransferBooking
     */
    protected $TransferBooking = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_TransferBooking
     */
    public function getTransferBooking()
    {
      return $this->TransferBooking;
    }

    /**
     * @param JP_TransferBooking $TransferBooking
     * @return JP_TransferRequiredFields
     */
    public function setTransferBooking($TransferBooking)
    {
      $this->TransferBooking = $TransferBooking;
      return $this;
    }

}
