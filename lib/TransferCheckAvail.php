<?php

namespace Juniper\Webservice;

class TransferCheckAvail
{

    /**
     * @var JP_TransferCheckAvailRQ $TransferCheckAvailRQ
     */
    protected $TransferCheckAvailRQ = null;

    /**
     * @param JP_TransferCheckAvailRQ $TransferCheckAvailRQ
     */
    public function __construct($TransferCheckAvailRQ)
    {
      $this->TransferCheckAvailRQ = $TransferCheckAvailRQ;
    }

    /**
     * @return JP_TransferCheckAvailRQ
     */
    public function getTransferCheckAvailRQ()
    {
      return $this->TransferCheckAvailRQ;
    }

    /**
     * @param JP_TransferCheckAvailRQ $TransferCheckAvailRQ
     * @return TransferCheckAvail
     */
    public function setTransferCheckAvailRQ($TransferCheckAvailRQ)
    {
      $this->TransferCheckAvailRQ = $TransferCheckAvailRQ;
      return $this;
    }

}
