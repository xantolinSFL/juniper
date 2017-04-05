<?php

namespace Juniper\Webservice;

class GenericDataCatalogue
{

    /**
     * @var JP_GenericDataCatalogueRQ $GenericDataCatalogueRQ
     */
    protected $GenericDataCatalogueRQ = null;

    /**
     * @param JP_GenericDataCatalogueRQ $GenericDataCatalogueRQ
     */
    public function __construct($GenericDataCatalogueRQ)
    {
      $this->GenericDataCatalogueRQ = $GenericDataCatalogueRQ;
    }

    /**
     * @return JP_GenericDataCatalogueRQ
     */
    public function getGenericDataCatalogueRQ()
    {
      return $this->GenericDataCatalogueRQ;
    }

    /**
     * @param JP_GenericDataCatalogueRQ $GenericDataCatalogueRQ
     * @return GenericDataCatalogue
     */
    public function setGenericDataCatalogueRQ($GenericDataCatalogueRQ)
    {
      $this->GenericDataCatalogueRQ = $GenericDataCatalogueRQ;
      return $this;
    }

}
