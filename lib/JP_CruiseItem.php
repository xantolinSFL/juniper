<?php

class JP_CruiseItem extends JP_BaseItem
{

    /**
     * @var JP_CruiseResult $Cruise
     */
    protected $Cruise = null;

    /**
     * @var JP_AdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var ArrayOfJP_ExtendedRelPaxDist $RelPaxesDist
     */
    protected $RelPaxesDist = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var date $End
     */
    protected $End = null;

    /**
     * @param string $ItemId
     * @param JP_ItemStatus $Status
     * @param date $Start
     * @param date $End
     */
    public function __construct($ItemId, $Status, $Start, $End)
    {
      parent::__construct($ItemId, $Status);
      $this->Start = $Start;
      $this->End = $End;
    }

    /**
     * @return JP_CruiseResult
     */
    public function getCruise()
    {
      return $this->Cruise;
    }

    /**
     * @param JP_CruiseResult $Cruise
     * @return JP_CruiseItem
     */
    public function setCruise($Cruise)
    {
      $this->Cruise = $Cruise;
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
     * @return JP_CruiseItem
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
      return $this;
    }

    /**
     * @return ArrayOfJP_ExtendedRelPaxDist
     */
    public function getRelPaxesDist()
    {
      return $this->RelPaxesDist;
    }

    /**
     * @param ArrayOfJP_ExtendedRelPaxDist $RelPaxesDist
     * @return JP_CruiseItem
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
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
     * @return JP_CruiseItem
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
     * @return JP_CruiseItem
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

}
