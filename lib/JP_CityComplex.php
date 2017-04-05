<?php

namespace Juniper\Webservice;

class JP_CityComplex
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var JP_ZoneIdName $Country
     */
    protected $Country = null;

    /**
     * @var JP_ZoneIdName $Region
     */
    protected $Region = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $JPDCode
     */
    protected $JPDCode = null;

    /**
     * @param string $Id
     * @param string $JPDCode
     */
    public function __construct($Id, $JPDCode)
    {
      $this->Id = $Id;
      $this->JPDCode = $JPDCode;
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
     * @return JP_CityComplex
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return JP_ZoneIdName
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param JP_ZoneIdName $Country
     * @return JP_CityComplex
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return JP_ZoneIdName
     */
    public function getRegion()
    {
      return $this->Region;
    }

    /**
     * @param JP_ZoneIdName $Region
     * @return JP_CityComplex
     */
    public function setRegion($Region)
    {
      $this->Region = $Region;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return JP_CityComplex
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return JP_CityComplex
     */
    public function setJPDCode($JPDCode)
    {
      $this->JPDCode = $JPDCode;
      return $this;
    }

}
