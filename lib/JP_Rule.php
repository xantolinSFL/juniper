<?php

class JP_Rule
{

    /**
     * @var int $From
     */
    protected $From = null;

    /**
     * @var int $To
     */
    protected $To = null;

    /**
     * @var date $DateFrom
     */
    protected $DateFrom = null;

    /**
     * @var string $DateFromHour
     */
    protected $DateFromHour = null;

    /**
     * @var date $DateTo
     */
    protected $DateTo = null;

    /**
     * @var string $DateToHour
     */
    protected $DateToHour = null;

    /**
     * @var anonymous202 $Type
     */
    protected $Type = null;

    /**
     * @var float $FixedPrice
     */
    protected $FixedPrice = null;

    /**
     * @var float $PercentPrice
     */
    protected $PercentPrice = null;

    /**
     * @var float $FirstNightPrice
     */
    protected $FirstNightPrice = null;

    /**
     * @var int $Nights
     */
    protected $Nights = null;

    /**
     * @var int $StayLengthFrom
     */
    protected $StayLengthFrom = null;

    /**
     * @var int $StayLengthTo
     */
    protected $StayLengthTo = null;

    /**
     * @var anonymous203 $ApplicationTypeNights
     */
    protected $ApplicationTypeNights = null;

    /**
     * @param int $From
     * @param int $To
     * @param date $DateFrom
     * @param string $DateFromHour
     * @param date $DateTo
     * @param string $DateToHour
     * @param anonymous202 $Type
     * @param float $FixedPrice
     * @param float $PercentPrice
     * @param float $FirstNightPrice
     * @param int $Nights
     * @param int $StayLengthFrom
     * @param int $StayLengthTo
     * @param anonymous203 $ApplicationTypeNights
     */
    public function __construct($From, $To, $DateFrom, $DateFromHour, $DateTo, $DateToHour, $Type, $FixedPrice, $PercentPrice, $FirstNightPrice, $Nights, $StayLengthFrom, $StayLengthTo, $ApplicationTypeNights)
    {
      $this->From = $From;
      $this->To = $To;
      $this->DateFrom = $DateFrom;
      $this->DateFromHour = $DateFromHour;
      $this->DateTo = $DateTo;
      $this->DateToHour = $DateToHour;
      $this->Type = $Type;
      $this->FixedPrice = $FixedPrice;
      $this->PercentPrice = $PercentPrice;
      $this->FirstNightPrice = $FirstNightPrice;
      $this->Nights = $Nights;
      $this->StayLengthFrom = $StayLengthFrom;
      $this->StayLengthTo = $StayLengthTo;
      $this->ApplicationTypeNights = $ApplicationTypeNights;
    }

    /**
     * @return int
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param int $From
     * @return JP_Rule
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return int
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param int $To
     * @return JP_Rule
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateFrom()
    {
      return $this->DateFrom;
    }

    /**
     * @param date $DateFrom
     * @return JP_Rule
     */
    public function setDateFrom($DateFrom)
    {
      $this->DateFrom = $DateFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateFromHour()
    {
      return $this->DateFromHour;
    }

    /**
     * @param string $DateFromHour
     * @return JP_Rule
     */
    public function setDateFromHour($DateFromHour)
    {
      $this->DateFromHour = $DateFromHour;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateTo()
    {
      return $this->DateTo;
    }

    /**
     * @param date $DateTo
     * @return JP_Rule
     */
    public function setDateTo($DateTo)
    {
      $this->DateTo = $DateTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateToHour()
    {
      return $this->DateToHour;
    }

    /**
     * @param string $DateToHour
     * @return JP_Rule
     */
    public function setDateToHour($DateToHour)
    {
      $this->DateToHour = $DateToHour;
      return $this;
    }

    /**
     * @return anonymous202
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous202 $Type
     * @return JP_Rule
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return float
     */
    public function getFixedPrice()
    {
      return $this->FixedPrice;
    }

    /**
     * @param float $FixedPrice
     * @return JP_Rule
     */
    public function setFixedPrice($FixedPrice)
    {
      $this->FixedPrice = $FixedPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercentPrice()
    {
      return $this->PercentPrice;
    }

    /**
     * @param float $PercentPrice
     * @return JP_Rule
     */
    public function setPercentPrice($PercentPrice)
    {
      $this->PercentPrice = $PercentPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getFirstNightPrice()
    {
      return $this->FirstNightPrice;
    }

    /**
     * @param float $FirstNightPrice
     * @return JP_Rule
     */
    public function setFirstNightPrice($FirstNightPrice)
    {
      $this->FirstNightPrice = $FirstNightPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getNights()
    {
      return $this->Nights;
    }

    /**
     * @param int $Nights
     * @return JP_Rule
     */
    public function setNights($Nights)
    {
      $this->Nights = $Nights;
      return $this;
    }

    /**
     * @return int
     */
    public function getStayLengthFrom()
    {
      return $this->StayLengthFrom;
    }

    /**
     * @param int $StayLengthFrom
     * @return JP_Rule
     */
    public function setStayLengthFrom($StayLengthFrom)
    {
      $this->StayLengthFrom = $StayLengthFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getStayLengthTo()
    {
      return $this->StayLengthTo;
    }

    /**
     * @param int $StayLengthTo
     * @return JP_Rule
     */
    public function setStayLengthTo($StayLengthTo)
    {
      $this->StayLengthTo = $StayLengthTo;
      return $this;
    }

    /**
     * @return anonymous203
     */
    public function getApplicationTypeNights()
    {
      return $this->ApplicationTypeNights;
    }

    /**
     * @param anonymous203 $ApplicationTypeNights
     * @return JP_Rule
     */
    public function setApplicationTypeNights($ApplicationTypeNights)
    {
      $this->ApplicationTypeNights = $ApplicationTypeNights;
      return $this;
    }

}
