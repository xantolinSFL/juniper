<?php

class JP_WarningDetails
{

    /**
     * @var ArrayOfJP_WarningDate $Dates
     */
    protected $Dates = null;

    /**
     * @var ArrayOfString7 $DestinationZones
     */
    protected $DestinationZones = null;

    /**
     * @var ArrayOfString5 $HotelCodes
     */
    protected $HotelCodes = null;

    /**
     * @var ArrayOfJP_WarningDistribution $Distributions
     */
    protected $Distributions = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_WarningDate
     */
    public function getDates()
    {
      return $this->Dates;
    }

    /**
     * @param ArrayOfJP_WarningDate $Dates
     * @return JP_WarningDetails
     */
    public function setDates($Dates)
    {
      $this->Dates = $Dates;
      return $this;
    }

    /**
     * @return ArrayOfString7
     */
    public function getDestinationZones()
    {
      return $this->DestinationZones;
    }

    /**
     * @param ArrayOfString7 $DestinationZones
     * @return JP_WarningDetails
     */
    public function setDestinationZones($DestinationZones)
    {
      $this->DestinationZones = $DestinationZones;
      return $this;
    }

    /**
     * @return ArrayOfString5
     */
    public function getHotelCodes()
    {
      return $this->HotelCodes;
    }

    /**
     * @param ArrayOfString5 $HotelCodes
     * @return JP_WarningDetails
     */
    public function setHotelCodes($HotelCodes)
    {
      $this->HotelCodes = $HotelCodes;
      return $this;
    }

    /**
     * @return ArrayOfJP_WarningDistribution
     */
    public function getDistributions()
    {
      return $this->Distributions;
    }

    /**
     * @param ArrayOfJP_WarningDistribution $Distributions
     * @return JP_WarningDetails
     */
    public function setDistributions($Distributions)
    {
      $this->Distributions = $Distributions;
      return $this;
    }

}
