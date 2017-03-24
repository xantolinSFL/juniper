<?php

class ServiceCatalogueData
{

    /**
     * @var JP_ServiceCatalogueDataRQ $ServiceCatalogueDataRQ
     */
    protected $ServiceCatalogueDataRQ = null;

    /**
     * @param JP_ServiceCatalogueDataRQ $ServiceCatalogueDataRQ
     */
    public function __construct($ServiceCatalogueDataRQ)
    {
      $this->ServiceCatalogueDataRQ = $ServiceCatalogueDataRQ;
    }

    /**
     * @return JP_ServiceCatalogueDataRQ
     */
    public function getServiceCatalogueDataRQ()
    {
      return $this->ServiceCatalogueDataRQ;
    }

    /**
     * @param JP_ServiceCatalogueDataRQ $ServiceCatalogueDataRQ
     * @return ServiceCatalogueData
     */
    public function setServiceCatalogueDataRQ($ServiceCatalogueDataRQ)
    {
      $this->ServiceCatalogueDataRQ = $ServiceCatalogueDataRQ;
      return $this;
    }

}
