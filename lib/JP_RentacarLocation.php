<?php

namespace Juniper\Webservice;

class JP_RentacarLocation
{

    /**
     * @var string $PickUpCode
     */
    protected $PickUpCode = null;

    /**
     * @var string $DropOffCode
     */
    protected $DropOffCode = null;

    /**
     * @param string $PickUpCode
     * @param string $DropOffCode
     */
    public function __construct($PickUpCode, $DropOffCode)
    {
      $this->PickUpCode = $PickUpCode;
      $this->DropOffCode = $DropOffCode;
    }

    /**
     * @return string
     */
    public function getPickUpCode()
    {
      return $this->PickUpCode;
    }

    /**
     * @param string $PickUpCode
     * @return JP_RentacarLocation
     */
    public function setPickUpCode($PickUpCode)
    {
      $this->PickUpCode = $PickUpCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDropOffCode()
    {
      return $this->DropOffCode;
    }

    /**
     * @param string $DropOffCode
     * @return JP_RentacarLocation
     */
    public function setDropOffCode($DropOffCode)
    {
      $this->DropOffCode = $DropOffCode;
      return $this;
    }

}
