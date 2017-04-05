<?php

namespace Juniper\Webservice;

class JPSOAP_Occupancy
{

    /**
     * @var int $MinAdult
     */
    protected $MinAdult = null;

    /**
     * @var int $MaxAdult
     */
    protected $MaxAdult = null;

    /**
     * @var int $MinChild
     */
    protected $MinChild = null;

    /**
     * @var int $MaxChild
     */
    protected $MaxChild = null;

    /**
     * @param int $MinAdult
     * @param int $MaxAdult
     * @param int $MinChild
     * @param int $MaxChild
     */
    public function __construct($MinAdult, $MaxAdult, $MinChild, $MaxChild)
    {
      $this->MinAdult = $MinAdult;
      $this->MaxAdult = $MaxAdult;
      $this->MinChild = $MinChild;
      $this->MaxChild = $MaxChild;
    }

    /**
     * @return int
     */
    public function getMinAdult()
    {
      return $this->MinAdult;
    }

    /**
     * @param int $MinAdult
     * @return JPSOAP_Occupancy
     */
    public function setMinAdult($MinAdult)
    {
      $this->MinAdult = $MinAdult;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxAdult()
    {
      return $this->MaxAdult;
    }

    /**
     * @param int $MaxAdult
     * @return JPSOAP_Occupancy
     */
    public function setMaxAdult($MaxAdult)
    {
      $this->MaxAdult = $MaxAdult;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinChild()
    {
      return $this->MinChild;
    }

    /**
     * @param int $MinChild
     * @return JPSOAP_Occupancy
     */
    public function setMinChild($MinChild)
    {
      $this->MinChild = $MinChild;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxChild()
    {
      return $this->MaxChild;
    }

    /**
     * @param int $MaxChild
     * @return JPSOAP_Occupancy
     */
    public function setMaxChild($MaxChild)
    {
      $this->MaxChild = $MaxChild;
      return $this;
    }

}
