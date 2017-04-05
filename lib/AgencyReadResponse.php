<?php

namespace Juniper\Webservice;

class AgencyReadResponse
{

    /**
     * @var JP_StaticDataRS $AgencyReadRS
     */
    protected $AgencyReadRS = null;

    /**
     * @param JP_StaticDataRS $AgencyReadRS
     */
    public function __construct($AgencyReadRS)
    {
      $this->AgencyReadRS = $AgencyReadRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getAgencyReadRS()
    {
      return $this->AgencyReadRS;
    }

    /**
     * @param JP_StaticDataRS $AgencyReadRS
     * @return AgencyReadResponse
     */
    public function setAgencyReadRS($AgencyReadRS)
    {
      $this->AgencyReadRS = $AgencyReadRS;
      return $this;
    }

}
