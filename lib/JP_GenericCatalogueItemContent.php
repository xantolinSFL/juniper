<?php

namespace Juniper\Webservice;

class JP_GenericCatalogueItemContent
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @param string $Language
     */
    public function __construct($Language)
    {
      $this->Language = $Language;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JP_GenericCatalogueItemContent
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return JP_GenericCatalogueItemContent
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return JP_GenericCatalogueItemContent
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
