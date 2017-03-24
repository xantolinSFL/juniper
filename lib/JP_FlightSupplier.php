<?php

class JP_FlightSupplier
{

    /**
     * @var ArrayOfJP_FlightRate $FlightRates
     */
    protected $FlightRates = null;

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
     * @return ArrayOfJP_FlightRate
     */
    public function getFlightRates()
    {
      return $this->FlightRates;
    }

    /**
     * @param ArrayOfJP_FlightRate $FlightRates
     * @return JP_FlightSupplier
     */
    public function setFlightRates($FlightRates)
    {
      $this->FlightRates = $FlightRates;
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
     * @return JP_FlightSupplier
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
