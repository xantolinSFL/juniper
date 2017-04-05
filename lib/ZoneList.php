<?php

namespace Juniper\Webservice;

class ZoneList
{

    /**
     * @var JP_ZoneListRQ $ZoneListRQ
     */
    protected $ZoneListRQ = null;

    /**
     * @param JP_ZoneListRQ $ZoneListRQ
     */
    public function __construct($ZoneListRQ)
    {
      $this->ZoneListRQ = $ZoneListRQ;
    }

    /**
     * @return JP_ZoneListRQ
     */
    public function getZoneListRQ()
    {
      return $this->ZoneListRQ;
    }

    /**
     * @param JP_ZoneListRQ $ZoneListRQ
     * @return ZoneList
     */
    public function setZoneListRQ($ZoneListRQ)
    {
      $this->ZoneListRQ = $ZoneListRQ;
      return $this;
    }

}
