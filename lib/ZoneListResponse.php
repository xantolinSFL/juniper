<?php

namespace Juniper\Webservice;

class ZoneListResponse
{

    /**
     * @var JP_StaticDataRS $ZoneListRS
     */
    protected $ZoneListRS = null;

    /**
     * @param JP_StaticDataRS $ZoneListRS
     */
    public function __construct($ZoneListRS)
    {
      $this->ZoneListRS = $ZoneListRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getZoneListRS()
    {
      return $this->ZoneListRS;
    }

    /**
     * @param JP_StaticDataRS $ZoneListRS
     * @return ZoneListResponse
     */
    public function setZoneListRS($ZoneListRS)
    {
      $this->ZoneListRS = $ZoneListRS;
      return $this;
    }

}
