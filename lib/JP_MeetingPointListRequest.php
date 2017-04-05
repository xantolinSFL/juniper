<?php

namespace Juniper\Webservice;

class JP_MeetingPointListRequest
{

    /**
     * @var int $ZoneCode
     */
    protected $ZoneCode = null;

    /**
     * @var JP_ProductType $ProductType
     */
    protected $ProductType = null;

    /**
     * @param int $ZoneCode
     * @param JP_ProductType $ProductType
     */
    public function __construct($ZoneCode, $ProductType)
    {
      $this->ZoneCode = $ZoneCode;
      $this->ProductType = $ProductType;
    }

    /**
     * @return int
     */
    public function getZoneCode()
    {
      return $this->ZoneCode;
    }

    /**
     * @param int $ZoneCode
     * @return JP_MeetingPointListRequest
     */
    public function setZoneCode($ZoneCode)
    {
      $this->ZoneCode = $ZoneCode;
      return $this;
    }

    /**
     * @return JP_ProductType
     */
    public function getProductType()
    {
      return $this->ProductType;
    }

    /**
     * @param JP_ProductType $ProductType
     * @return JP_MeetingPointListRequest
     */
    public function setProductType($ProductType)
    {
      $this->ProductType = $ProductType;
      return $this;
    }

}
