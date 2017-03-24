<?php

class JP_ZoneIdName
{

    /**
     * @var string $Name
     */
    protected $Name = null;

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
     * @return JP_ZoneIdName
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return JP_ZoneIdName
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
     * @return JP_ZoneIdName
     */
    public function setJPDCode($JPDCode)
    {
      $this->JPDCode = $JPDCode;
      return $this;
    }

}
