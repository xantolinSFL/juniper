<?php

class JP_FlightRate
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
     * @return JP_FlightRate
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
