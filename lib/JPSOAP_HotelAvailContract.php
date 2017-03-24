<?php

class JPSOAP_HotelAvailContract extends JPSOAP_Contract
{

    /**
     * @var ArrayOfJPSOAP_HotelAvailAllotment $Allotments
     */
    protected $Allotments = null;

    /**
     * @var ArrayOfJPSOAP_HotelAvailStopSale $StopSales
     */
    protected $StopSales = null;

    /**
     * @var JPSOAP_HotelAvailReleases $Releases
     */
    protected $Releases = null;

    /**
     * @var boolean $OnRequestAllowedWithoutAllotment
     */
    protected $OnRequestAllowedWithoutAllotment = null;

    /**
     * @param string $Code
     * @param string $HotelCode
     * @param string $HotelCodeEncrypt
     * @param boolean $Active
     * @param boolean $Delta
     * @param boolean $OnRequestAllowedWithoutAllotment
     */
    public function __construct($Code, $HotelCode, $HotelCodeEncrypt, $Active, $Delta, $OnRequestAllowedWithoutAllotment)
    {
      parent::__construct($Code, $HotelCode, $HotelCodeEncrypt, $Active, $Delta);
      $this->OnRequestAllowedWithoutAllotment = $OnRequestAllowedWithoutAllotment;
    }

    /**
     * @return ArrayOfJPSOAP_HotelAvailAllotment
     */
    public function getAllotments()
    {
      return $this->Allotments;
    }

    /**
     * @param ArrayOfJPSOAP_HotelAvailAllotment $Allotments
     * @return JPSOAP_HotelAvailContract
     */
    public function setAllotments($Allotments)
    {
      $this->Allotments = $Allotments;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_HotelAvailStopSale
     */
    public function getStopSales()
    {
      return $this->StopSales;
    }

    /**
     * @param ArrayOfJPSOAP_HotelAvailStopSale $StopSales
     * @return JPSOAP_HotelAvailContract
     */
    public function setStopSales($StopSales)
    {
      $this->StopSales = $StopSales;
      return $this;
    }

    /**
     * @return JPSOAP_HotelAvailReleases
     */
    public function getReleases()
    {
      return $this->Releases;
    }

    /**
     * @param JPSOAP_HotelAvailReleases $Releases
     * @return JPSOAP_HotelAvailContract
     */
    public function setReleases($Releases)
    {
      $this->Releases = $Releases;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnRequestAllowedWithoutAllotment()
    {
      return $this->OnRequestAllowedWithoutAllotment;
    }

    /**
     * @param boolean $OnRequestAllowedWithoutAllotment
     * @return JPSOAP_HotelAvailContract
     */
    public function setOnRequestAllowedWithoutAllotment($OnRequestAllowedWithoutAllotment)
    {
      $this->OnRequestAllowedWithoutAllotment = $OnRequestAllowedWithoutAllotment;
      return $this;
    }

}
