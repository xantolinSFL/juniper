<?php

namespace Juniper\Webservice;

class JP_PriceRange
{

    /**
     * @var float $Minimum
     */
    protected $Minimum = null;

    /**
     * @var float $Maximum
     */
    protected $Maximum = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @param float $Minimum
     * @param float $Maximum
     * @param string $Currency
     */
    public function __construct($Minimum, $Maximum, $Currency)
    {
      $this->Minimum = $Minimum;
      $this->Maximum = $Maximum;
      $this->Currency = $Currency;
    }

    /**
     * @return float
     */
    public function getMinimum()
    {
      return $this->Minimum;
    }

    /**
     * @param float $Minimum
     * @return JP_PriceRange
     */
    public function setMinimum($Minimum)
    {
      $this->Minimum = $Minimum;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaximum()
    {
      return $this->Maximum;
    }

    /**
     * @param float $Maximum
     * @return JP_PriceRange
     */
    public function setMaximum($Maximum)
    {
      $this->Maximum = $Maximum;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return JP_PriceRange
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

}
