<?php

namespace Juniper\Webservice;

class TransferCatalogueDataResponse
{

    /**
     * @var JP_StaticDataRS $CatalogueDataRS
     */
    protected $CatalogueDataRS = null;

    /**
     * @param JP_StaticDataRS $CatalogueDataRS
     */
    public function __construct($CatalogueDataRS)
    {
      $this->CatalogueDataRS = $CatalogueDataRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getCatalogueDataRS()
    {
      return $this->CatalogueDataRS;
    }

    /**
     * @param JP_StaticDataRS $CatalogueDataRS
     * @return TransferCatalogueDataResponse
     */
    public function setCatalogueDataRS($CatalogueDataRS)
    {
      $this->CatalogueDataRS = $CatalogueDataRS;
      return $this;
    }

}
