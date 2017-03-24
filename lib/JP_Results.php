<?php

class JP_Results
{

    /**
     * @var JP_CruiseResult $CruiseResult
     */
    protected $CruiseResult = null;

    /**
     * @var anyType $ExtraInfo
     */
    protected $ExtraInfo = null;

    /**
     * @var JP_Flight $FlightResult
     */
    protected $FlightResult = null;

    /**
     * @var JP_HotelCalendarResult $HotelCalendarResult
     */
    protected $HotelCalendarResult = null;

    /**
     * @var JP_HotelFutureRatesResults $HotelFutureRatesResults
     */
    protected $HotelFutureRatesResults = null;

    /**
     * @var JP_HotelResult $HotelResult
     */
    protected $HotelResult = null;

    /**
     * @var JP_InsuranceResult $InsuranceResult
     */
    protected $InsuranceResult = null;

    /**
     * @var JP_PackageResult $PackageResult
     */
    protected $PackageResult = null;

    /**
     * @var JP_RentacarResult $RentCarResult
     */
    protected $RentCarResult = null;

    /**
     * @var JP_ServiceResult $ServiceResult
     */
    protected $ServiceResult = null;

    /**
     * @var JP_TransferResult $TransferResult
     */
    protected $TransferResult = null;

    /**
     * @var JP_VisaResult $VisaResult
     */
    protected $VisaResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseResult
     */
    public function getCruiseResult()
    {
      return $this->CruiseResult;
    }

    /**
     * @param JP_CruiseResult $CruiseResult
     * @return JP_Results
     */
    public function setCruiseResult($CruiseResult)
    {
      $this->CruiseResult = $CruiseResult;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getExtraInfo()
    {
      return $this->ExtraInfo;
    }

    /**
     * @param anyType $ExtraInfo
     * @return JP_Results
     */
    public function setExtraInfo($ExtraInfo)
    {
      $this->ExtraInfo = $ExtraInfo;
      return $this;
    }

    /**
     * @return JP_Flight
     */
    public function getFlightResult()
    {
      return $this->FlightResult;
    }

    /**
     * @param JP_Flight $FlightResult
     * @return JP_Results
     */
    public function setFlightResult($FlightResult)
    {
      $this->FlightResult = $FlightResult;
      return $this;
    }

    /**
     * @return JP_HotelCalendarResult
     */
    public function getHotelCalendarResult()
    {
      return $this->HotelCalendarResult;
    }

    /**
     * @param JP_HotelCalendarResult $HotelCalendarResult
     * @return JP_Results
     */
    public function setHotelCalendarResult($HotelCalendarResult)
    {
      $this->HotelCalendarResult = $HotelCalendarResult;
      return $this;
    }

    /**
     * @return JP_HotelFutureRatesResults
     */
    public function getHotelFutureRatesResults()
    {
      return $this->HotelFutureRatesResults;
    }

    /**
     * @param JP_HotelFutureRatesResults $HotelFutureRatesResults
     * @return JP_Results
     */
    public function setHotelFutureRatesResults($HotelFutureRatesResults)
    {
      $this->HotelFutureRatesResults = $HotelFutureRatesResults;
      return $this;
    }

    /**
     * @return JP_HotelResult
     */
    public function getHotelResult()
    {
      return $this->HotelResult;
    }

    /**
     * @param JP_HotelResult $HotelResult
     * @return JP_Results
     */
    public function setHotelResult($HotelResult)
    {
      $this->HotelResult = $HotelResult;
      return $this;
    }

    /**
     * @return JP_InsuranceResult
     */
    public function getInsuranceResult()
    {
      return $this->InsuranceResult;
    }

    /**
     * @param JP_InsuranceResult $InsuranceResult
     * @return JP_Results
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
     * @return JP_Results
     */
    public function setPackageResult($PackageResult)
    {
      $this->PackageResult = $PackageResult;
      return $this;
    }

    /**
     * @return JP_RentacarResult
     */
    public function getRentCarResult()
    {
      return $this->RentCarResult;
    }

    /**
     * @param JP_RentacarResult $RentCarResult
     * @return JP_Results
     */
    public function setRentCarResult($RentCarResult)
    {
      $this->RentCarResult = $RentCarResult;
      return $this;
    }

    /**
     * @return JP_ServiceResult
     */
    public function getServiceResult()
    {
      return $this->ServiceResult;
    }

    /**
     * @param JP_ServiceResult $ServiceResult
     * @return JP_Results
     */
    public function setServiceResult($ServiceResult)
    {
      $this->ServiceResult = $ServiceResult;
      return $this;
    }

    /**
     * @return JP_TransferResult
     */
    public function getTransferResult()
    {
      return $this->TransferResult;
    }

    /**
     * @param JP_TransferResult $TransferResult
     * @return JP_Results
     */
    public function setTransferResult($TransferResult)
    {
      $this->TransferResult = $TransferResult;
      return $this;
    }

    /**
     * @return JP_VisaResult
     */
    public function getVisaResult()
    {
      return $this->VisaResult;
    }

    /**
     * @param JP_VisaResult $VisaResult
     * @return JP_Results
     */
    public function setVisaResult($VisaResult)
    {
      $this->VisaResult = $VisaResult;
      return $this;
    }

}
