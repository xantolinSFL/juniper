<?php

namespace Juniper\Webservice;

class JP_GenericCatalogueItem
{

    /**
     * @var ArrayOfJP_GenericCatalogueItemContent $ItemContentList
     */
    protected $ItemContentList = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param string $Code
     */
    public function __construct($Code)
    {
      $this->Code = $Code;
    }

    /**
     * @return ArrayOfJP_GenericCatalogueItemContent
     */
    public function getItemContentList()
    {
      return $this->ItemContentList;
    }

    /**
     * @param ArrayOfJP_GenericCatalogueItemContent $ItemContentList
     * @return JP_GenericCatalogueItem
     */
    public function setItemContentList($ItemContentList)
    {
      $this->ItemContentList = $ItemContentList;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return JP_GenericCatalogueItem
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
