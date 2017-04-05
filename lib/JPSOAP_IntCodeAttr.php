<?php

namespace Juniper\Webservice;

class JPSOAP_IntCodeAttr
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @param int $Code
     */
    public function __construct($Code)
    {
      $this->Code = $Code;
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
     * @return JPSOAP_IntCodeAttr
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
