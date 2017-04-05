<?php

namespace Juniper\Webservice;

class JP_Board
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
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param string $_
     * @param string $Type
     * @param string $Code
     */
    public function __construct($_, $Type, $Code)
    {
      $this->_ = $_;
      $this->Type = $Type;
      $this->Code = $Code;
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
     * @return JP_Board
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
     * @return JP_Board
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return JP_Board
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
