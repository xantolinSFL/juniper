<?php

class JP_StationInfo
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param string $Code
     */
    public function __construct($Code)
    {
      $this->Code = $Code;
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
     * @return JP_StationInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
