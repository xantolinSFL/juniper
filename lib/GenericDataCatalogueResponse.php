<?php

namespace Juniper\Webservice;

class GenericDataCatalogueResponse
{

    /**
     * @var JP_StaticDataRS $GenericDataCatalogueRS
     */
    protected $GenericDataCatalogueRS = null;

    /**
     * @param JP_StaticDataRS $GenericDataCatalogueRS
     */
    public function __construct($GenericDataCatalogueRS)
    {
      $this->GenericDataCatalogueRS = $GenericDataCatalogueRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getGenericDataCatalogueRS()
    {
      return $this->GenericDataCatalogueRS;
    }

    /**
     * @param JP_StaticDataRS $GenericDataCatalogueRS
     * @return GenericDataCatalogueResponse
     */
    public function setGenericDataCatalogueRS($GenericDataCatalogueRS)
    {
      $this->GenericDataCatalogueRS = $GenericDataCatalogueRS;
      return $this;
    }

}
