<?php

namespace Juniper\Webservice;

class JP_ShoppingBasket
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var int $AgencyCode
     */
    protected $AgencyCode = null;

    /**
     * @param string $Code
     * @param int $AgencyCode
     */
    public function __construct($Code, $AgencyCode)
    {
      $this->Code = $Code;
      $this->AgencyCode = $AgencyCode;
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
     * @return JP_ShoppingBasket
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgencyCode()
    {
      return $this->AgencyCode;
    }

    /**
     * @param int $AgencyCode
     * @return JP_ShoppingBasket
     */
    public function setAgencyCode($AgencyCode)
    {
      $this->AgencyCode = $AgencyCode;
      return $this;
    }

}
