<?php

class AgencyRead
{

    /**
     * @var JP_AgencyRead $AgencyReadRQ
     */
    protected $AgencyReadRQ = null;

    /**
     * @param JP_AgencyRead $AgencyReadRQ
     */
    public function __construct($AgencyReadRQ)
    {
      $this->AgencyReadRQ = $AgencyReadRQ;
    }

    /**
     * @return JP_AgencyRead
     */
    public function getAgencyReadRQ()
    {
      return $this->AgencyReadRQ;
    }

    /**
     * @param JP_AgencyRead $AgencyReadRQ
     * @return AgencyRead
     */
    public function setAgencyReadRQ($AgencyReadRQ)
    {
      $this->AgencyReadRQ = $AgencyReadRQ;
      return $this;
    }

}
