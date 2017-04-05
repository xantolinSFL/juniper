<?php

namespace Juniper\Webservice;

class JP_Card
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $SubType
     */
    protected $SubType = null;

    /**
     * @param string $_
     * @param string $Type
     * @param string $SubType
     */
    public function __construct($_, $Type, $SubType)
    {
      $this->_ = $_;
      $this->Type = $Type;
      $this->SubType = $SubType;
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
     * @return JP_Card
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return JP_Card
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubType()
    {
      return $this->SubType;
    }

    /**
     * @param string $SubType
     * @return JP_Card
     */
    public function setSubType($SubType)
    {
      $this->SubType = $SubType;
      return $this;
    }

}
