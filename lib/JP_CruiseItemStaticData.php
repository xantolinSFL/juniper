<?php

namespace Juniper\Webservice;

class JP_CruiseItemStaticData
{

    /**
     * @var ArrayOfJP_CruiseItinerary $CruiseItineraryList
     */
    protected $CruiseItineraryList = null;

    /**
     * @var ArrayOfJP_Ship $CruiseShipList
     */
    protected $CruiseShipList = null;

    /**
     * @var ArrayOfJP_CruiseData $CruiseDataList
     */
    protected $CruiseDataList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_CruiseItinerary
     */
    public function getCruiseItineraryList()
    {
      return $this->CruiseItineraryList;
    }

    /**
     * @param ArrayOfJP_CruiseItinerary $CruiseItineraryList
     * @return JP_CruiseItemStaticData
     */
    public function setCruiseItineraryList($CruiseItineraryList)
    {
      $this->CruiseItineraryList = $CruiseItineraryList;
      return $this;
    }

    /**
     * @return ArrayOfJP_Ship
     */
    public function getCruiseShipList()
    {
      return $this->CruiseShipList;
    }

    /**
     * @param ArrayOfJP_Ship $CruiseShipList
     * @return JP_CruiseItemStaticData
     */
    public function setCruiseShipList($CruiseShipList)
    {
      $this->CruiseShipList = $CruiseShipList;
      return $this;
    }

    /**
     * @return ArrayOfJP_CruiseData
     */
    public function getCruiseDataList()
    {
      return $this->CruiseDataList;
    }

    /**
     * @param ArrayOfJP_CruiseData $CruiseDataList
     * @return JP_CruiseItemStaticData
     */
    public function setCruiseDataList($CruiseDataList)
    {
      $this->CruiseDataList = $CruiseDataList;
      return $this;
    }

}
