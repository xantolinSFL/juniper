<?php

class JP_CruiseCabin
{

    /**
     * @var ArrayOfString1 $Images
     */
    protected $Images = null;

    /**
     * @var JP_CruiseDeck $Deck
     */
    protected $Deck = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var int $Capacity
     */
    protected $Capacity = null;

    /**
     * @var int $Beds
     */
    protected $Beds = null;

    /**
     * @var string $CabinNumber
     */
    protected $CabinNumber = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @param string $Code
     * @param int $Capacity
     * @param int $Beds
     * @param string $CabinNumber
     * @param string $RatePlanCode
     */
    public function __construct($Code, $Capacity, $Beds, $CabinNumber, $RatePlanCode)
    {
      $this->Code = $Code;
      $this->Capacity = $Capacity;
      $this->Beds = $Beds;
      $this->CabinNumber = $CabinNumber;
      $this->RatePlanCode = $RatePlanCode;
    }

    /**
     * @return ArrayOfString1
     */
    public function getImages()
    {
      return $this->Images;
    }

    /**
     * @param ArrayOfString1 $Images
     * @return JP_CruiseCabin
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

    /**
     * @return JP_CruiseDeck
     */
    public function getDeck()
    {
      return $this->Deck;
    }

    /**
     * @param JP_CruiseDeck $Deck
     * @return JP_CruiseCabin
     */
    public function setDeck($Deck)
    {
      $this->Deck = $Deck;
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
     * @return JP_CruiseCabin
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getCapacity()
    {
      return $this->Capacity;
    }

    /**
     * @param int $Capacity
     * @return JP_CruiseCabin
     */
    public function setCapacity($Capacity)
    {
      $this->Capacity = $Capacity;
      return $this;
    }

    /**
     * @return int
     */
    public function getBeds()
    {
      return $this->Beds;
    }

    /**
     * @param int $Beds
     * @return JP_CruiseCabin
     */
    public function setBeds($Beds)
    {
      $this->Beds = $Beds;
      return $this;
    }

    /**
     * @return string
     */
    public function getCabinNumber()
    {
      return $this->CabinNumber;
    }

    /**
     * @param string $CabinNumber
     * @return JP_CruiseCabin
     */
    public function setCabinNumber($CabinNumber)
    {
      $this->CabinNumber = $CabinNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanCode()
    {
      return $this->RatePlanCode;
    }

    /**
     * @param string $RatePlanCode
     * @return JP_CruiseCabin
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}
