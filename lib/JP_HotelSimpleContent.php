<?php

class JP_HotelSimpleContent
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @param string $Code
     * @param string $RatePlanCode
     */
    public function __construct($Code, $RatePlanCode)
    {
      $this->Code = $Code;
      $this->RatePlanCode = $RatePlanCode;
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
     * @return JP_HotelSimpleContent
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanCode()
    {
      return $this->RatePlanCode;
    }

    /**
     * @param string $RatePlanCode
     * @return JP_HotelSimpleContent
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}
