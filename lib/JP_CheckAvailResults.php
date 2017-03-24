<?php

class JP_CheckAvailResults
{

    /**
     * @var JP_CruiseCheckAvailResult $CruiseResult
     */
    protected $CruiseResult = null;

    /**
     * @var JP_FlightCheckAvailResult $FlightResult
     */
    protected $FlightResult = null;

    /**
     * @var JP_HotelCheckAvailResult $HotelResult
     */
    protected $HotelResult = null;

    /**
     * @var JP_InsuranceCheckAvailResult $InsuranceResult
     */
    protected $InsuranceResult = null;

    /**
     * @var JP_PackageResult $PackageResult
     */
    protected $PackageResult = null;

    /**
     * @var JP_RentacarCheckAvailResult $RentacarResult
     */
    protected $RentacarResult = null;

    /**
     * @var JP_ServiceCheckAvailResult $ServiceResult
     */
    protected $ServiceResult = null;

    /**
     * @var JP_TransferCheckAvailResult $TransferResult
     */
    protected $TransferResult = null;

    /**
     * @var JP_VisaCheckAvailResult $VisaResult
     */
    protected $VisaResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseCheckAvailResult
     */
    public function getCruiseResult()
    {
      return $this->CruiseResult;
    }

    /**
     * @param JP_CruiseCheckAvailResult $CruiseResult
     * @return JP_CheckAvailResults
     */
    public function setCruiseResult($CruiseResult)
    {
      $this->CruiseResult = $CruiseResult;
      return $this;
    }

    /**
     * @return JP_FlightCheckAvailResult
     */
    public function getFlightResult()
    {
      return $this->FlightResult;
    }

    /**
     * @param JP_FlightCheckAvailResult $FlightResult
     * @return JP_CheckAvailResults
     */
    public function setFlightResult($FlightResult)
    {
      $this->FlightResult = $FlightResult;
      return $this;
    }

    /**
     * @return JP_HotelCheckAvailResult
     */
    public function getHotelResult()
    {
      return $this->HotelResult;
    }

    /**
     * @param JP_HotelCheckAvailResult $HotelResult
     * @return JP_CheckAvailResults
     */
    public function setHotelResult($HotelResult)
    {
      $this->HotelResult = $HotelResult;
      return $this;
    }

    /**
     * @return JP_InsuranceCheckAvailResult
     */
    public function getInsuranceResult()
    {
      return $this->InsuranceResult;
    }

    /**
     * @param JP_InsuranceCheckAvailResult $InsuranceResult
     * @return JP_CheckAvailResults
     */
    public function setInsuranceResult($InsuranceResult)
    {
      $this->InsuranceResult = $InsuranceResult;
      return $this;
    }

    /**
     * @return JP_PackageResult
     */
    public function getPackageResult()
    {
      return $this->PackageResult;
    }

    /**
     * @param JP_PackageResult $PackageResult
     * @return JP_CheckAvailResults
     */
    public function setPackageResult($PackageResult)
    {
      $this->PackageResult = $PackageResult;
      return $this;
    }

    /**
     * @return JP_RentacarCheckAvailResult
     */
    public function getRentacarResult()
    {
      return $this->RentacarResult;
    }

    /**
     * @param JP_RentacarCheckAvailResult $RentacarResult
     * @return JP_CheckAvailResults
     */
    public function setRentacarResult($RentacarResult)
    {
      $this->RentacarResult = $RentacarResult;
      return $this;
    }

    /**
     * @return JP_ServiceCheckAvailResult
     */
    public function getServiceResult()
    {
      return $this->ServiceResult;
    }

    /**
     * @param JP_ServiceCheckAvailResult $ServiceResult
     * @return JP_CheckAvailResults
     */
    public function setServiceResult($ServiceResult)
    {
      $this->ServiceResult = $ServiceResult;
      return $this;
    }

    /**
     * @return JP_TransferCheckAvailResult
     */
    public function getTransferResult()
    {
      return $this->TransferResult;
    }

    /**
     * @param JP_TransferCheckAvailResult $TransferResult
     * @return JP_CheckAvailResults
     */
    public function setTransferResult($TransferResult)
    {
      $this->TransferResult = $TransferResult;
      return $this;
    }

    /**
     * @return JP_VisaCheckAvailResult
     */
    public function getVisaResult()
    {
      return $this->VisaResult;
    }

    /**
     * @param JP_VisaCheckAvailResult $VisaResult
     * @return JP_CheckAvailResults
     */
    public function setVisaResult($VisaResult)
    {
      $this->VisaResult = $VisaResult;
      return $this;
    }

}
