<?php

namespace Juniper\Webservice;

class JP_RentacarSupplier
{

    /**
     * @var ArrayOfJP_RentacarContract $RentacarContracts
     */
    protected $RentacarContracts = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param string $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return ArrayOfJP_RentacarContract
     */
    public function getRentacarContracts()
    {
      return $this->RentacarContracts;
    }

    /**
     * @param ArrayOfJP_RentacarContract $RentacarContracts
     * @return JP_RentacarSupplier
     */
    public function setRentacarContracts($RentacarContracts)
    {
      $this->RentacarContracts = $RentacarContracts;
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
     * @return JP_RentacarSupplier
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
