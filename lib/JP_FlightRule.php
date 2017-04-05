<?php

namespace Juniper\Webservice;

class JP_FlightRule
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param string $_
     * @param string $Name
     */
    public function __construct($_, $Name)
    {
      $this->_ = $_;
      $this->Name = $Name;
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
     * @return JP_FlightRule
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
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
     * @return JP_FlightRule
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
