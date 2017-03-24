<?php

class JP_CruiseElement extends JP_BaseElement
{

    /**
     * @var JP_CruiseBookingInfo $CruiseBookingInfo
     */
    protected $CruiseBookingInfo = null;

    /**
     * @param string $ElementId
     */
    public function __construct($ElementId)
    {
      parent::__construct($ElementId);
    }

    /**
     * @return JP_CruiseBookingInfo
     */
    public function getCruiseBookingInfo()
    {
      return $this->CruiseBookingInfo;
    }

    /**
     * @param JP_CruiseBookingInfo $CruiseBookingInfo
     * @return JP_CruiseElement
     */
    public function setCruiseBookingInfo($CruiseBookingInfo)
    {
      $this->CruiseBookingInfo = $CruiseBookingInfo;
      return $this;
    }

}
