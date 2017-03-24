<?php

class JP_TransferBookingRuleRequest
{

    /**
     * @var JP_TransferRuleOptionRQ $TransferRuleOption
     */
    protected $TransferRuleOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_TransferRuleOptionRQ
     */
    public function getTransferRuleOption()
    {
      return $this->TransferRuleOption;
    }

    /**
     * @param JP_TransferRuleOptionRQ $TransferRuleOption
     * @return JP_TransferBookingRuleRequest
     */
    public function setTransferRuleOption($TransferRuleOption)
    {
      $this->TransferRuleOption = $TransferRuleOption;
      return $this;
    }

}
