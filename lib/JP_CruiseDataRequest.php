<?php

class JP_CruiseDataRequest
{

    /**
     * @var JP_SearchSegmentShip $SearchSegmentData
     */
    protected $SearchSegmentData = null;

    /**
     * @var boolean $IncludeShipInfo
     */
    protected $IncludeShipInfo = null;

    /**
     * @var string $SelectionCode
     */
    protected $SelectionCode = null;

    /**
     * @param boolean $IncludeShipInfo
     * @param string $SelectionCode
     */
    public function __construct($IncludeShipInfo, $SelectionCode)
    {
      $this->IncludeShipInfo = $IncludeShipInfo;
      $this->SelectionCode = $SelectionCode;
    }

    /**
     * @return JP_SearchSegmentShip
     */
    public function getSearchSegmentData()
    {
      return $this->SearchSegmentData;
    }

    /**
     * @param JP_SearchSegmentShip $SearchSegmentData
     * @return JP_CruiseDataRequest
     */
    public function setSearchSegmentData($SearchSegmentData)
    {
      $this->SearchSegmentData = $SearchSegmentData;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeShipInfo()
    {
      return $this->IncludeShipInfo;
    }

    /**
     * @param boolean $IncludeShipInfo
     * @return JP_CruiseDataRequest
     */
    public function setIncludeShipInfo($IncludeShipInfo)
    {
      $this->IncludeShipInfo = $IncludeShipInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSelectionCode()
    {
      return $this->SelectionCode;
    }

    /**
     * @param string $SelectionCode
     * @return JP_CruiseDataRequest
     */
    public function setSelectionCode($SelectionCode)
    {
      $this->SelectionCode = $SelectionCode;
      return $this;
    }

}
