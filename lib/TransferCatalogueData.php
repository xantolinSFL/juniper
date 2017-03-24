<?php

class TransferCatalogueData
{

    /**
     * @var JP_TransferCatalogueDataRQ $TransferCatalogueDataRQ
     */
    protected $TransferCatalogueDataRQ = null;

    /**
     * @param JP_TransferCatalogueDataRQ $TransferCatalogueDataRQ
     */
    public function __construct($TransferCatalogueDataRQ)
    {
      $this->TransferCatalogueDataRQ = $TransferCatalogueDataRQ;
    }

    /**
     * @return JP_TransferCatalogueDataRQ
     */
    public function getTransferCatalogueDataRQ()
    {
      return $this->TransferCatalogueDataRQ;
    }

    /**
     * @param JP_TransferCatalogueDataRQ $TransferCatalogueDataRQ
     * @return TransferCatalogueData
     */
    public function setTransferCatalogueDataRQ($TransferCatalogueDataRQ)
    {
      $this->TransferCatalogueDataRQ = $TransferCatalogueDataRQ;
      return $this;
    }

}
