<?php

namespace Juniper\Webservice;

class JP_ServiceElement extends JP_BaseElement
{

    /**
     * @var JP_ServiceBookingInfo $ServiceBookingInfo
     */
    protected $ServiceBookingInfo = null;

    /**
     * @param string $ElementId
     */
    public function __construct($ElementId)
    {
      parent::__construct($ElementId);
    }

    /**
     * @return JP_ServiceBookingInfo
     */
    public function getServiceBookingInfo()
    {
      return $this->ServiceBookingInfo;
    }

    /**
     * @param JP_ServiceBookingInfo $ServiceBookingInfo
     * @return JP_ServiceElement
     */
    public function setServiceBookingInfo($ServiceBookingInfo)
    {
      $this->ServiceBookingInfo = $ServiceBookingInfo;
      return $this;
    }

}
