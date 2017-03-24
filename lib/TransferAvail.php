<?php

class TransferAvail
{

    /**
     * @var JP_TransferAvailabilityRQ $TransferAvailRQ
     */
    protected $TransferAvailRQ = null;

    /**
     * @param JP_TransferAvailabilityRQ $TransferAvailRQ
     */
    public function __construct($TransferAvailRQ)
    {
      $this->TransferAvailRQ = $TransferAvailRQ;
    }

    /**
     * @return JP_TransferAvailabilityRQ
     */
    public function getTransferAvailRQ()
    {
      return $this->TransferAvailRQ;
    }

    /**
     * @param JP_TransferAvailabilityRQ $TransferAvailRQ
     * @return TransferAvail
     */
    public function setTransferAvailRQ($TransferAvailRQ)
    {
      $this->TransferAvailRQ = $TransferAvailRQ;
      return $this;
    }

}
