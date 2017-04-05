<?php

namespace Juniper\Webservice;

class JP_PackageCalendarPriceItem
{

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var date $End
     */
    protected $End = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @param date $Start
     * @param date $End
     * @param float $Price
     */
    public function __construct($Start, $End, $Price)
    {
      $this->Start = $Start;
      $this->End = $End;
      $this->Price = $Price;
    }

    /**
     * @return date
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param date $Start
     * @return JP_PackageCalendarPriceItem
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return date
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param date $End
     * @return JP_PackageCalendarPriceItem
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return JP_PackageCalendarPriceItem
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

}
