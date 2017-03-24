<?php

class JP_BookingRules
{

    /**
     * @var JP_CruiseResultsBookingRules $CruiseResult
     */
    protected $CruiseResult = null;

    /**
     * @var JP_FlightBookingRules $FlightResult
     */
    protected $FlightResult = null;

    /**
     * @var JP_HotelResultsBookingRules $HotelResult
     */
    protected $HotelResult = null;

    /**
     * @var JP_InsuranceBookingRules $InsuranceResult
     */
    protected $InsuranceResult = null;

    /**
     * @var JP_PackageBookingRules $PackageResult
     */
    protected $PackageResult = null;

    /**
     * @var JP_RentacarResultsBookingRules $RentacarResult
     */
    protected $RentacarResult = null;

    /**
     * @var JP_ServiceBookingRules $ServiceResult
     */
    protected $ServiceResult = null;

    /**
     * @var JP_TransferBookingRules $TransferResult
     */
    protected $TransferResult = null;

    /**
     * @var JP_VisaBookingRules $VisaResult
     */
    protected $VisaResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseResultsBookingRules
     */
    public function getCruiseResult()
    {
      return $this->CruiseResult;
    }

    /**
     * @param JP_CruiseResultsBookingRules $CruiseResult
     * @return JP_BookingRules
     */
    public function setCruiseResult($CruiseResult)
    {
      $this->CruiseResult = $CruiseResult;
      return $this;
    }

    /**
     * @return JP_FlightBookingRules
     */
    public function getFlightResult()
    {
      return $this->FlightResult;
    }

    /**
     * @param JP_FlightBookingRules $FlightResult
     * @return JP_BookingRules
     */
    public function setFlightResult($FlightResult)
    {
      $this->FlightResult = $FlightResult;
      return $this;
    }

    /**
     * @return JP_HotelResultsBookingRules
     */
    public function getHotelResult()
    {
      return $this->HotelResult;
    }

    /**
     * @param JP_HotelResultsBookingRules $HotelResult
     * @return JP_BookingRules
     */
    public function setHotelResult($HotelResult)
    {
      $this->HotelResult = $HotelResult;
      return $this;
    }

    /**
     * @return JP_InsuranceBookingRules
     */
    public function getInsuranceResult()
    {
      return $this->InsuranceResult;
    }

    /**
     * @param JP_InsuranceBookingRules $InsuranceResult
     * @return JP_BookingRules
     */
    public function setInsuranceResult($InsuranceResult)
    {
      $this->InsuranceResult = $InsuranceResult;
      return $this;
    }

    /**
     * @return JP_PackageBookingRules
     */
    public function getPackageResult()
    {
      return $this->PackageResult;
    }

    /**
     * @param JP_PackageBookingRules $PackageResult
     * @return JP_BookingRules
     */
    public function setPackageResult($PackageResult)
    {
      $this->PackageResult = $PackageResult;
      return $this;
    }

    /**
     * @return JP_RentacarResultsBookingRules
     */
    public function getRentacarResult()
    {
      return $this->RentacarResult;
    }

    /**
     * @param JP_RentacarResultsBookingRules $RentacarResult
     * @return JP_BookingRules
     */
    public function setRentacarResult($RentacarResult)
    {
      $this->RentacarResult = $RentacarResult;
      return $this;
    }

    /**
     * @return JP_ServiceBookingRules
     */
    public function getServiceResult()
    {
      return $this->ServiceResult;
    }

    /**
     * @param JP_ServiceBookingRules $ServiceResult
     * @return JP_BookingRules
     */
    public function setServiceResult($ServiceResult)
    {
      $this->ServiceResult = $ServiceResult;
      return $this;
    }

    /**
     * @return JP_TransferBookingRules
     */
    public function getTransferResult()
    {
      return $this->TransferResult;
    }

    /**
     * @param JP_TransferBookingRules $TransferResult
     * @return JP_BookingRules
     */
    public function setTransferResult($TransferResult)
    {
      $this->TransferResult = $TransferResult;
      return $this;
    }

    /**
     * @return JP_VisaBookingRules
     */
    public function getVisaResult()
    {
      return $this->VisaResult;
    }

    /**
     * @param JP_VisaBookingRules $VisaResult
     * @return JP_BookingRules
     */
    public function setVisaResult($VisaResult)
    {
      $this->VisaResult = $VisaResult;
      return $this;
    }

}
