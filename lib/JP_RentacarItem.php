<?php

namespace Juniper\Webservice;

class JP_RentacarItem extends JP_BaseItem
{

    /**
     * @var JP_RentacarInfo $RentacarInfo
     */
    protected $RentacarInfo = null;

    /**
     * @var JP_RentacarAdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var JP_RentacarBookLocationDetails $RentacarLocationDetails
     */
    protected $RentacarLocationDetails = null;

    /**
     * @var ArrayOfJP_RelPax $RelPaxes
     */
    protected $RelPaxes = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var string $Hour
     */
    protected $Hour = null;

    /**
     * @var date $End
     */
    protected $End = null;

    /**
     * @var string $HourEnd
     */
    protected $HourEnd = null;

    /**
     * @param string $ItemId
     * @param JP_ItemStatus $Status
     * @param date $Start
     * @param string $Hour
     * @param date $End
     * @param string $HourEnd
     */
    public function __construct($ItemId, $Status, $Start, $Hour, $End, $HourEnd)
    {
      parent::__construct($ItemId, $Status);
      $this->Start = $Start;
      $this->Hour = $Hour;
      $this->End = $End;
      $this->HourEnd = $HourEnd;
    }

    /**
     * @return JP_RentacarInfo
     */
    public function getRentacarInfo()
    {
      return $this->RentacarInfo;
    }

    /**
     * @param JP_RentacarInfo $RentacarInfo
     * @return JP_RentacarItem
     */
    public function setRentacarInfo($RentacarInfo)
    {
      $this->RentacarInfo = $RentacarInfo;
      return $this;
    }

    /**
     * @return JP_RentacarAdditionalElements
     */
    public function getAdditionalElements()
    {
      return $this->AdditionalElements;
    }

    /**
     * @param JP_RentacarAdditionalElements $AdditionalElements
     * @return JP_RentacarItem
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
      return $this;
    }

    /**
     * @return JP_RentacarBookLocationDetails
     */
    public function getRentacarLocationDetails()
    {
      return $this->RentacarLocationDetails;
    }

    /**
     * @param JP_RentacarBookLocationDetails $RentacarLocationDetails
     * @return JP_RentacarItem
     */
    public function setRentacarLocationDetails($RentacarLocationDetails)
    {
      $this->RentacarLocationDetails = $RentacarLocationDetails;
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
     * @return JP_RentacarItem
     */
    public function setRelPaxes($RelPaxes)
    {
      $this->RelPaxes = $RelPaxes;
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
     * @return JP_RentacarItem
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return string
     */
    public function getHour()
    {
      return $this->Hour;
    }

    /**
     * @param string $Hour
     * @return JP_RentacarItem
     */
    public function setHour($Hour)
    {
      $this->Hour = $Hour;
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
     * @return JP_RentacarItem
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

    /**
     * @return string
     */
    public function getHourEnd()
    {
      return $this->HourEnd;
    }

    /**
     * @param string $HourEnd
     * @return JP_RentacarItem
     */
    public function setHourEnd($HourEnd)
    {
      $this->HourEnd = $HourEnd;
      return $this;
    }

}
