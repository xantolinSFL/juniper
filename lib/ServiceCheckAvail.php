<?php

namespace Juniper\Webservice;

class ServiceCheckAvail
{

    /**
     * @var JP_ServiceCheckAvailRQ $ServiceCheckAvailRQ
     */
    protected $ServiceCheckAvailRQ = null;

    /**
     * @param JP_ServiceCheckAvailRQ $ServiceCheckAvailRQ
     */
    public function __construct($ServiceCheckAvailRQ)
    {
      $this->ServiceCheckAvailRQ = $ServiceCheckAvailRQ;
    }

    /**
     * @return JP_ServiceCheckAvailRQ
     */
    public function getServiceCheckAvailRQ()
    {
      return $this->ServiceCheckAvailRQ;
    }

    /**
     * @param JP_ServiceCheckAvailRQ $ServiceCheckAvailRQ
     * @return ServiceCheckAvail
     */
    public function setServiceCheckAvailRQ($ServiceCheckAvailRQ)
    {
      $this->ServiceCheckAvailRQ = $ServiceCheckAvailRQ;
      return $this;
    }

}
