<?php

namespace Juniper\Webservice;

class TransferBookingRules
{

    /**
     * @var JP_TransferBookingRulesRQ $TransferBookingRulesRQ
     */
    protected $TransferBookingRulesRQ = null;

    /**
     * @param JP_TransferBookingRulesRQ $TransferBookingRulesRQ
     */
    public function __construct($TransferBookingRulesRQ)
    {
      $this->TransferBookingRulesRQ = $TransferBookingRulesRQ;
    }

    /**
     * @return JP_TransferBookingRulesRQ
     */
    public function getTransferBookingRulesRQ()
    {
      return $this->TransferBookingRulesRQ;
    }

    /**
     * @param JP_TransferBookingRulesRQ $TransferBookingRulesRQ
     * @return TransferBookingRules
     */
    public function setTransferBookingRulesRQ($TransferBookingRulesRQ)
    {
      $this->TransferBookingRulesRQ = $TransferBookingRulesRQ;
      return $this;
    }

}
