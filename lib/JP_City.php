<?php

namespace Juniper\Webservice;

class JP_City
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $JPDCode
     */
    protected $JPDCode = null;

    /**
     * @param string $_
     * @param string $Id
     * @param string $JPDCode
     */
    public function __construct($_, $Id, $JPDCode)
    {
      $this->_ = $_;
      $this->Id = $Id;
      $this->JPDCode = $JPDCode;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return JP_City
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return JP_City
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
     * @return JP_City
     */
    public function setJPDCode($JPDCode)
    {
      $this->JPDCode = $JPDCode;
      return $this;
    }

}
