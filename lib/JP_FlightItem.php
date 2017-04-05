<?php

namespace Juniper\Webservice;

class JP_FlightItem extends JP_BaseItem
{

    /**
     * @var JP_Routes $Routes
     */
    protected $Routes = null;

    /**
     * @var JP_AdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var ArrayOfJP_RelPax $RelPaxes
     */
    protected $RelPaxes = null;

    /**
     * @var boolean $Ticketing
     */
    protected $Ticketing = null;

    /**
     * @var string $Direction
     */
    protected $Direction = null;

    /**
     * @param string $ItemId
     * @param JP_ItemStatus $Status
     * @param boolean $Ticketing
     * @param string $Direction
     */
    public function __construct($ItemId, $Status, $Ticketing, $Direction)
    {
      parent::__construct($ItemId, $Status);
      $this->Ticketing = $Ticketing;
      $this->Direction = $Direction;
    }

    /**
     * @return JP_Routes
     */
    public function getRoutes()
    {
      return $this->Routes;
    }

    /**
     * @param JP_Routes $Routes
     * @return JP_FlightItem
     */
    public function setRoutes($Routes)
    {
      $this->Routes = $Routes;
      return $this;
    }

    /**
     * @return JP_AdditionalElements
     */
    public function getAdditionalElements()
    {
      return $this->AdditionalElements;
    }

    /**
     * @param JP_AdditionalElements $AdditionalElements
     * @return JP_FlightItem
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
      return $this;
    }

    /**
     * @return ArrayOfJP_RelPax
     */
    public function getRelPaxes()
    {
      return $this->RelPaxes;
    }

    /**
     * @param ArrayOfJP_RelPax $RelPaxes
     * @return JP_FlightItem
     */
    public function setRelPaxes($RelPaxes)
    {
      $this->RelPaxes = $RelPaxes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTicketing()
    {
      return $this->Ticketing;
    }

    /**
     * @param boolean $Ticketing
     * @return JP_FlightItem
     */
    public function setTicketing($Ticketing)
    {
      $this->Ticketing = $Ticketing;
      return $this;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param string $Direction
     * @return JP_FlightItem
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

}
