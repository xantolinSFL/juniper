<?php

class ServiceAvail
{

    /**
     * @var JP_ServiceAvailabilityRQ $ServiceAvailRQ
     */
    protected $ServiceAvailRQ = null;

    /**
     * @param JP_ServiceAvailabilityRQ $ServiceAvailRQ
     */
    public function __construct($ServiceAvailRQ)
    {
      $this->ServiceAvailRQ = $ServiceAvailRQ;
    }

    /**
     * @return JP_ServiceAvailabilityRQ
     */
    public function getServiceAvailRQ()
    {
      return $this->ServiceAvailRQ;
    }

    /**
     * @param JP_ServiceAvailabilityRQ $ServiceAvailRQ
     * @return ServiceAvail
     */
    public function setServiceAvailRQ($ServiceAvailRQ)
    {
      $this->ServiceAvailRQ = $ServiceAvailRQ;
      return $this;
    }

}
