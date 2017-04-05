<?php

namespace Juniper\Webservice;

class JP_RentacarContract
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $DiscountCode
     */
    protected $DiscountCode = null;

    /**
     * @var string $IATA
     */
    protected $IATA = null;

    /**
     * @var string $SubSupplier
     */
    protected $SubSupplier = null;

    /**
     * @param string $Code
     * @param string $DiscountCode
     * @param string $IATA
     * @param string $SubSupplier
     */
    public function __construct($Code, $DiscountCode, $IATA, $SubSupplier)
    {
      $this->Code = $Code;
      $this->DiscountCode = $DiscountCode;
      $this->IATA = $IATA;
      $this->SubSupplier = $SubSupplier;
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
     * @return JP_RentacarContract
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountCode()
    {
      return $this->DiscountCode;
    }

    /**
     * @param string $DiscountCode
     * @return JP_RentacarContract
     */
    public function setDiscountCode($DiscountCode)
    {
      $this->DiscountCode = $DiscountCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getIATA()
    {
      return $this->IATA;
    }

    /**
     * @param string $IATA
     * @return JP_RentacarContract
     */
    public function setIATA($IATA)
    {
      $this->IATA = $IATA;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubSupplier()
    {
      return $this->SubSupplier;
    }

    /**
     * @param string $SubSupplier
     * @return JP_RentacarContract
     */
    public function setSubSupplier($SubSupplier)
    {
      $this->SubSupplier = $SubSupplier;
      return $this;
    }

}
