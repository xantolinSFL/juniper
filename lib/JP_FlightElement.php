<?php

namespace Juniper\Webservice;

class JP_FlightElement extends JP_BaseElement
{

    /**
     * @var JP_FlightBookingInfo $FlightBookingInfo
     */
    protected $FlightBookingInfo = null;

    /**
     * @param string $ElementId
     */
    public function __construct($ElementId)
    {
      parent::__construct($ElementId);
    }

    /**
     * @return JP_FlightBookingInfo
     */
    public function getFlightBookingInfo()
    {
      return $this->FlightBookingInfo;
    }

    /**
     * @param JP_FlightBookingInfo $FlightBookingInfo
     * @return JP_FlightElement
     */
    public function setFlightBookingInfo($FlightBookingInfo)
    {
      $this->FlightBookingInfo = $FlightBookingInfo;
      return $this;
    }

}
