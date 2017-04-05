<?php

namespace Juniper\Webservice;

class JP_RequiredFieldValue
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @param string $_
     * @param int $Code
     */
    public function __construct($_, $Code)
    {
      $this->_ = $_;
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
     * @return JP_RequiredFieldValue
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return JP_RequiredFieldValue
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
