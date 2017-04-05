<?php

namespace Juniper\Webservice;

class JP_TransferCheckAvailRequest
{

    /**
     * @var JP_TransferOptionRQ $TransferCheckOption
     */
    protected $TransferCheckOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_TransferOptionRQ
     */
    public function getTransferCheckOption()
    {
      return $this->TransferCheckOption;
    }

    /**
     * @param JP_TransferOptionRQ $TransferCheckOption
     * @return JP_TransferCheckAvailRequest
     */
    public function setTransferCheckOption($TransferCheckOption)
    {
      $this->TransferCheckOption = $TransferCheckOption;
      return $this;
    }

}
