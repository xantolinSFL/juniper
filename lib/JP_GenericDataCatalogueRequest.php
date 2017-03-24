<?php

class JP_GenericDataCatalogueRequest
{

    /**
     * @var JP_GenericCatalogueType $Type
     */
    protected $Type = null;

    /**
     * @param JP_GenericCatalogueType $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return JP_GenericCatalogueType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JP_GenericCatalogueType $Type
     * @return JP_GenericDataCatalogueRequest
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
