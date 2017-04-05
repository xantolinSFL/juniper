<?php

namespace Juniper\Webservice;

class JP_ServiceCheckAvailRequest
{

    /**
     * @var JP_ServiceOptionRQ $ServiceCheckOption
     */
    protected $ServiceCheckOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ServiceOptionRQ
     */
    public function getServiceCheckOption()
    {
      return $this->ServiceCheckOption;
    }

    /**
     * @param JP_ServiceOptionRQ $ServiceCheckOption
     * @return JP_ServiceCheckAvailRequest
     */
    public function setServiceCheckOption($ServiceCheckOption)
    {
      $this->ServiceCheckOption = $ServiceCheckOption;
      return $this;
    }

}
