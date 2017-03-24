<?php

class JP_CruiseResultsBookingRules
{

    /**
     * @var string $Sea
     */
    protected $Sea = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var JP_Ship $Ship
     */
    protected $Ship = null;

    /**
     * @var JP_CruiseItinerary $Itinerary
     */
    protected $Itinerary = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ArrayOfJP_CruiseCategory $Categories
     */
    protected $Categories = null;

    /**
     * @var JP_BookingCode $BookingCode
     */
    protected $BookingCode = null;

    /**
     * @var JP_CruiseRequiredFields $CruiseRequiredFields
     */
    protected $CruiseRequiredFields = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicy
     */
    protected $CancellationPolicy = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicyCost
     */
    protected $CancellationPolicyCost = null;

    /**
     * @var JP_CruisePriceInformation $PriceInformation
     */
    protected $PriceInformation = null;

    /**
     * @var ArrayOfJP_RelPaxDist $RelPaxesDist
     */
    protected $RelPaxesDist = null;

    /**
     * @var JP_CruiseOptionalElements $OptionalElements
     */
    protected $OptionalElements = null;

    /**
     * @var string $CruiseCode
     */
    protected $CruiseCode = null;

    /**
     * @var int $Zone
     */
    protected $Zone = null;

    /**
     * @var date $StartDate
     */
    protected $StartDate = null;

    /**
     * @var int $DaysDuration
     */
    protected $DaysDuration = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @param string $CruiseCode
     * @param int $Zone
     * @param date $StartDate
     * @param int $DaysDuration
     * @param string $RatePlanCode
     * @param string $Status
     */
    public function __construct($CruiseCode, $Zone, $StartDate, $DaysDuration, $RatePlanCode, $Status)
    {
      $this->CruiseCode = $CruiseCode;
      $this->Zone = $Zone;
      $this->StartDate = $StartDate;
      $this->DaysDuration = $DaysDuration;
      $this->RatePlanCode = $RatePlanCode;
      $this->Status = $Status;
    }

    /**
     * @return string
     */
    public function getSea()
    {
      return $this->Sea;
    }

    /**
     * @param string $Sea
     * @return JP_CruiseResultsBookingRules
     */
    public function setSea($Sea)
    {
      $this->Sea = $Sea;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JP_CruiseResultsBookingRules
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return JP_Ship
     */
    public function getShip()
    {
      return $this->Ship;
    }

    /**
     * @param JP_Ship $Ship
     * @return JP_CruiseResultsBookingRules
     */
    public function setShip($Ship)
    {
      $this->Ship = $Ship;
      return $this;
    }

    /**
     * @return JP_CruiseItinerary
     */
    public function getItinerary()
    {
      return $this->Itinerary;
    }

    /**
     * @param JP_CruiseItinerary $Itinerary
     * @return JP_CruiseResultsBookingRules
     */
    public function setItinerary($Itinerary)
    {
      $this->Itinerary = $Itinerary;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return JP_CruiseResultsBookingRules
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfJP_CruiseCategory
     */
    public function getCategories()
    {
      return $this->Categories;
    }

    /**
     * @param ArrayOfJP_CruiseCategory $Categories
     * @return JP_CruiseResultsBookingRules
     */
    public function setCategories($Categories)
    {
      $this->Categories = $Categories;
      return $this;
    }

    /**
     * @return JP_BookingCode
     */
    public function getBookingCode()
    {
      return $this->BookingCode;
    }

    /**
     * @param JP_BookingCode $BookingCode
     * @return JP_CruiseResultsBookingRules
     */
    public function setBookingCode($BookingCode)
    {
      $this->BookingCode = $BookingCode;
      return $this;
    }

    /**
     * @return JP_CruiseRequiredFields
     */
    public function getCruiseRequiredFields()
    {
      return $this->CruiseRequiredFields;
    }

    /**
     * @param JP_CruiseRequiredFields $CruiseRequiredFields
     * @return JP_CruiseResultsBookingRules
     */
    public function setCruiseRequiredFields($CruiseRequiredFields)
    {
      $this->CruiseRequiredFields = $CruiseRequiredFields;
      return $this;
    }

    /**
     * @return JP_CancellationPolicyRules
     */
    public function getCancellationPolicy()
    {
      return $this->CancellationPolicy;
    }

    /**
     * @param JP_CancellationPolicyRules $CancellationPolicy
     * @return JP_CruiseResultsBookingRules
     */
    public function setCancellationPolicy($CancellationPolicy)
    {
      $this->CancellationPolicy = $CancellationPolicy;
      return $this;
    }

    /**
     * @return JP_CancellationPolicyRules
     */
    public function getCancellationPolicyCost()
    {
      return $this->CancellationPolicyCost;
    }

    /**
     * @param JP_CancellationPolicyRules $CancellationPolicyCost
     * @return JP_CruiseResultsBookingRules
     */
    public function setCancellationPolicyCost($CancellationPolicyCost)
    {
      $this->CancellationPolicyCost = $CancellationPolicyCost;
      return $this;
    }

    /**
     * @return JP_CruisePriceInformation
     */
    public function getPriceInformation()
    {
      return $this->PriceInformation;
    }

    /**
     * @param JP_CruisePriceInformation $PriceInformation
     * @return JP_CruiseResultsBookingRules
     */
    public function setPriceInformation($PriceInformation)
    {
      $this->PriceInformation = $PriceInformation;
      return $this;
    }

    /**
     * @return ArrayOfJP_RelPaxDist
     */
    public function getRelPaxesDist()
    {
      return $this->RelPaxesDist;
    }

    /**
     * @param ArrayOfJP_RelPaxDist $RelPaxesDist
     * @return JP_CruiseResultsBookingRules
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

    /**
     * @return JP_CruiseOptionalElements
     */
    public function getOptionalElements()
    {
      return $this->OptionalElements;
    }

    /**
     * @param JP_CruiseOptionalElements $OptionalElements
     * @return JP_CruiseResultsBookingRules
     */
    public function setOptionalElements($OptionalElements)
    {
      $this->OptionalElements = $OptionalElements;
      return $this;
    }

    /**
     * @return string
     */
    public function getCruiseCode()
    {
      return $this->CruiseCode;
    }

    /**
     * @param string $CruiseCode
     * @return JP_CruiseResultsBookingRules
     */
    public function setCruiseCode($CruiseCode)
    {
      $this->CruiseCode = $CruiseCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getZone()
    {
      return $this->Zone;
    }

    /**
     * @param int $Zone
     * @return JP_CruiseResultsBookingRules
     */
    public function setZone($Zone)
    {
      $this->Zone = $Zone;
      return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param date $StartDate
     * @return JP_CruiseResultsBookingRules
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getDaysDuration()
    {
      return $this->DaysDuration;
    }

    /**
     * @param int $DaysDuration
     * @return JP_CruiseResultsBookingRules
     */
    public function setDaysDuration($DaysDuration)
    {
      $this->DaysDuration = $DaysDuration;
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
     * @return JP_CruiseResultsBookingRules
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return JP_CruiseResultsBookingRules
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
