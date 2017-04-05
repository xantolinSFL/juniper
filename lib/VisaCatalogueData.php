<?php

namespace Juniper\Webservice;

class VisaCatalogueData
{

    /**
     * @var JP_VisaCatalogueDataRQ $VisaCatalogueDataRQ
     */
    protected $VisaCatalogueDataRQ = null;

    /**
     * @param JP_VisaCatalogueDataRQ $VisaCatalogueDataRQ
     */
    public function __construct($VisaCatalogueDataRQ)
    {
      $this->VisaCatalogueDataRQ = $VisaCatalogueDataRQ;
    }

    /**
     * @return JP_VisaCatalogueDataRQ
     */
    public function getVisaCatalogueDataRQ()
    {
      return $this->VisaCatalogueDataRQ;
    }

    /**
     * @param JP_VisaCatalogueDataRQ $VisaCatalogueDataRQ
     * @return VisaCatalogueData
     */
    public function setVisaCatalogueDataRQ($VisaCatalogueDataRQ)
    {
      $this->VisaCatalogueDataRQ = $VisaCatalogueDataRQ;
      return $this;
    }

}
