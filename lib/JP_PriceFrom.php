<?php

class JP_PriceFrom
{

    /**
     * @var float $From
     */
    protected $From = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var date $End
     */
    protected $End = null;

    /**
     * @param float $From
     * @param string $Currency
     * @param date $Start
     * @param date $End
     */
    public function __construct($From, $Currency, $Start, $End)
    {
      $this->From = $From;
      $this->Currency = $Currency;
      $this->Start = $Start;
      $this->End = $End;
    }

    /**
     * @return float
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param float $From
     * @return JP_PriceFrom
     */
    public function setFrom($From)
    {
      $this->From = $From;
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
     * @return JP_PriceFrom
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
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
     * @return JP_PriceFrom
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
     * @return JP_PriceFrom
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

}
