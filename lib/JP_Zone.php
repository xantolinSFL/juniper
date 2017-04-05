<?php

namespace Juniper\Webservice;

class JP_Zone
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $JPDCode
     */
    protected $JPDCode = null;

    /**
     * @var string $ParentJPDCode
     */
    protected $ParentJPDCode = null;

    /**
     * @var string $IATA
     */
    protected $IATA = null;

    /**
     * @var string $AreaType
     */
    protected $AreaType = null;

    /**
     * @var boolean $Searchable
     */
    protected $Searchable = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $ParentCode
     */
    protected $ParentCode = null;

    /**
     * @param string $JPDCode
     * @param string $ParentJPDCode
     * @param string $IATA
     * @param string $AreaType
     * @param boolean $Searchable
     * @param string $Code
     * @param string $ParentCode
     */
    public function __construct($JPDCode, $ParentJPDCode, $IATA, $AreaType, $Searchable, $Code, $ParentCode)
    {
      $this->JPDCode = $JPDCode;
      $this->ParentJPDCode = $ParentJPDCode;
      $this->IATA = $IATA;
      $this->AreaType = $AreaType;
      $this->Searchable = $Searchable;
      $this->Code = $Code;
      $this->ParentCode = $ParentCode;
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
     * @return JP_Zone
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getJPDCode()
    {
      return $this->JPDCode;
    }

    /**
     * @param string $JPDCode
     * @return JP_Zone
     */
    public function setJPDCode($JPDCode)
    {
      $this->JPDCode = $JPDCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getParentJPDCode()
    {
      return $this->ParentJPDCode;
    }

    /**
     * @param string $ParentJPDCode
     * @return JP_Zone
     */
    public function setParentJPDCode($ParentJPDCode)
    {
      $this->ParentJPDCode = $ParentJPDCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getIATA()
    {
      return $this->IATA;
    }

    /**
     * @param string $IATA
     * @return JP_Zone
     */
    public function setIATA($IATA)
    {
      $this->IATA = $IATA;
      return $this;
    }

    /**
     * @return string
     */
    public function getAreaType()
    {
      return $this->AreaType;
    }

    /**
     * @param string $AreaType
     * @return JP_Zone
     */
    public function setAreaType($AreaType)
    {
      $this->AreaType = $AreaType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchable()
    {
      return $this->Searchable;
    }

    /**
     * @param boolean $Searchable
     * @return JP_Zone
     */
    public function setSearchable($Searchable)
    {
      $this->Searchable = $Searchable;
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
     * @return JP_Zone
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getParentCode()
    {
      return $this->ParentCode;
    }

    /**
     * @param string $ParentCode
     * @return JP_Zone
     */
    public function setParentCode($ParentCode)
    {
      $this->ParentCode = $ParentCode;
      return $this;
    }

}
