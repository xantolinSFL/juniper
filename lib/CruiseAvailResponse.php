<?php

class CruiseAvailResponse
{

    /**
     * @var JP_AvailResponseRS $AvailabilityRS
     */
    protected $AvailabilityRS = null;

    /**
     * @param JP_AvailResponseRS $AvailabilityRS
     */
    public function __construct($AvailabilityRS)
    {
      $this->AvailabilityRS = $AvailabilityRS;
    }

    /**
     * @return JP_AvailResponseRS
     */
    public function getAvailabilityRS()
    {
      return $this->AvailabilityRS;
    }

    /**
     * @param JP_AvailResponseRS $AvailabilityRS
     * @return CruiseAvailResponse
     */
    public function setAvailabilityRS($AvailabilityRS)
    {
      $this->AvailabilityRS = $AvailabilityRS;
      return $this;
    }

}
