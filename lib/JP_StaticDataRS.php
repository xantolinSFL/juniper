<?php

namespace Juniper\Webservice;

class JP_StaticDataRS
{

    /**
     * @var ArrayOfJP_ErrorType $Errors
     */
    protected $Errors = null;

    /**
     * @var JP_Warnings $Warnings
     */
    protected $Warnings = null;

    /**
     * @var JP_CruiseItemStaticData $CruiseStaticData
     */
    protected $CruiseStaticData = null;

    /**
     * @var JP_HotelItemStaticData $HotelStaticData
     */
    protected $HotelStaticData = null;

    /**
     * @var ArrayOfJP_Zone $ZoneList
     */
    protected $ZoneList = null;

    /**
     * @var ArrayOfJP_CityComplex $CityList
     */
    protected $CityList = null;

    /**
     * @var ArrayOfJP_FinalCustomerStaticData $FinalCustomerList
     */
    protected $FinalCustomerList = null;

    /**
     * @var JP_AgencyList $AgencyList
     */
    protected $AgencyList = null;

    /**
     * @var ArrayOfJP_GenericCatalogueItem $GenericDataCatalogue
     */
    protected $GenericDataCatalogue = null;

    /**
     * @var ArrayOfJP_HotelSimpleInfo $HotelList
     */
    protected $HotelList = null;

    /**
     * @var ArrayOfJP_ExtendedHotelInfo $ExtendedHotelList
     */
    protected $ExtendedHotelList = null;

    /**
     * @var JP_PackageList $PackageList
     */
    protected $PackageList = null;

    /**
     * @var ArrayOfJP_RentacarLocationSimpleInfo $RentacarLocationList
     */
    protected $RentacarLocationList = null;

    /**
     * @var JP_PackageSearcherRS $PackageSearcher
     */
    protected $PackageSearcher = null;

    /**
     * @var ArrayOfJP_ProductSupplier $SupplierListRS
     */
    protected $SupplierListRS = null;

    /**
     * @var JP_ServiceItemStaticData $ServiceStaticData
     */
    protected $ServiceStaticData = null;

    /**
     * @var JP_TransferItemStaticData $TransferStaticData
     */
    protected $TransferStaticData = null;

    /**
     * @var JP_VisaItemStaticData $VisaStaticData
     */
    protected $VisaStaticData = null;

    /**
     * @var JP_MeetingPointList $MeetingPointList
     */
    protected $MeetingPointList = null;

    /**
     * @var ArrayOfJP_PackageCalendarPriceItems $PackageCalendarPrice
     */
    protected $PackageCalendarPrice = null;

    /**
     * @var JP_HotelPortfolio $HotelPortfolio
     */
    protected $HotelPortfolio = null;

    /**
     * @var string $Url
     */
    protected $Url = null;

    /**
     * @var \DateTime $TimeStamp
     */
    protected $TimeStamp = null;

    /**
     * @var string $IntCode
     */
    protected $IntCode = null;

    /**
     * @param string $Url
     * @param \DateTime $TimeStamp
     * @param string $IntCode
     */
    public function __construct($Url, \DateTime $TimeStamp, $IntCode)
    {
      $this->Url = $Url;
      $this->TimeStamp = $TimeStamp->format(\DateTime::ATOM);
      $this->IntCode = $IntCode;
    }

    /**
     * @return ArrayOfJP_ErrorType
     */
    public function getErrors()
    {
      return $this->Errors;
    }

    /**
     * @param ArrayOfJP_ErrorType $Errors
     * @return JP_StaticDataRS
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

    /**
     * @return JP_Warnings
     */
    public function getWarnings()
    {
      return $this->Warnings;
    }

    /**
     * @param JP_Warnings $Warnings
     * @return JP_StaticDataRS
     */
    public function setWarnings($Warnings)
    {
      $this->Warnings = $Warnings;
      return $this;
    }

    /**
     * @return JP_CruiseItemStaticData
     */
    public function getCruiseStaticData()
    {
      return $this->CruiseStaticData;
    }

    /**
     * @param JP_CruiseItemStaticData $CruiseStaticData
     * @return JP_StaticDataRS
     */
    public function setCruiseStaticData($CruiseStaticData)
    {
      $this->CruiseStaticData = $CruiseStaticData;
      return $this;
    }

    /**
     * @return JP_HotelItemStaticData
     */
    public function getHotelStaticData()
    {
      return $this->HotelStaticData;
    }

    /**
     * @param JP_HotelItemStaticData $HotelStaticData
     * @return JP_StaticDataRS
     */
    public function setHotelStaticData($HotelStaticData)
    {
      $this->HotelStaticData = $HotelStaticData;
      return $this;
    }

    /**
     * @return ArrayOfJP_Zone
     */
    public function getZoneList()
    {
      return $this->ZoneList;
    }

    /**
     * @param ArrayOfJP_Zone $ZoneList
     * @return JP_StaticDataRS
     */
    public function setZoneList($ZoneList)
    {
      $this->ZoneList = $ZoneList;
      return $this;
    }

    /**
     * @return ArrayOfJP_CityComplex
     */
    public function getCityList()
    {
      return $this->CityList;
    }

    /**
     * @param ArrayOfJP_CityComplex $CityList
     * @return JP_StaticDataRS
     */
    public function setCityList($CityList)
    {
      $this->CityList = $CityList;
      return $this;
    }

    /**
     * @return ArrayOfJP_FinalCustomerStaticData
     */
    public function getFinalCustomerList()
    {
      return $this->FinalCustomerList;
    }

    /**
     * @param ArrayOfJP_FinalCustomerStaticData $FinalCustomerList
     * @return JP_StaticDataRS
     */
    public function setFinalCustomerList($FinalCustomerList)
    {
      $this->FinalCustomerList = $FinalCustomerList;
      return $this;
    }

    /**
     * @return JP_AgencyList
     */
    public function getAgencyList()
    {
      return $this->AgencyList;
    }

    /**
     * @param JP_AgencyList $AgencyList
     * @return JP_StaticDataRS
     */
    public function setAgencyList($AgencyList)
    {
      $this->AgencyList = $AgencyList;
      return $this;
    }

    /**
     * @return ArrayOfJP_GenericCatalogueItem
     */
    public function getGenericDataCatalogue()
    {
      return $this->GenericDataCatalogue;
    }

    /**
     * @param ArrayOfJP_GenericCatalogueItem $GenericDataCatalogue
     * @return JP_StaticDataRS
     */
    public function setGenericDataCatalogue($GenericDataCatalogue)
    {
      $this->GenericDataCatalogue = $GenericDataCatalogue;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelSimpleInfo
     */
    public function getHotelList()
    {
      return $this->HotelList;
    }

    /**
     * @param ArrayOfJP_HotelSimpleInfo $HotelList
     * @return JP_StaticDataRS
     */
    public function setHotelList($HotelList)
    {
      $this->HotelList = $HotelList;
      return $this;
    }

    /**
     * @return ArrayOfJP_ExtendedHotelInfo
     */
    public function getExtendedHotelList()
    {
      return $this->ExtendedHotelList;
    }

    /**
     * @param ArrayOfJP_ExtendedHotelInfo $ExtendedHotelList
     * @return JP_StaticDataRS
     */
    public function setExtendedHotelList($ExtendedHotelList)
    {
      $this->ExtendedHotelList = $ExtendedHotelList;
      return $this;
    }

    /**
     * @return JP_PackageList
     */
    public function getPackageList()
    {
      return $this->PackageList;
    }

    /**
     * @param JP_PackageList $PackageList
     * @return JP_StaticDataRS
     */
    public function setPackageList($PackageList)
    {
      $this->PackageList = $PackageList;
      return $this;
    }

    /**
     * @return ArrayOfJP_RentacarLocationSimpleInfo
     */
    public function getRentacarLocationList()
    {
      return $this->RentacarLocationList;
    }

    /**
     * @param ArrayOfJP_RentacarLocationSimpleInfo $RentacarLocationList
     * @return JP_StaticDataRS
     */
    public function setRentacarLocationList($RentacarLocationList)
    {
      $this->RentacarLocationList = $RentacarLocationList;
      return $this;
    }

    /**
     * @return JP_PackageSearcherRS
     */
    public function getPackageSearcher()
    {
      return $this->PackageSearcher;
    }

    /**
     * @param JP_PackageSearcherRS $PackageSearcher
     * @return JP_StaticDataRS
     */
    public function setPackageSearcher($PackageSearcher)
    {
      $this->PackageSearcher = $PackageSearcher;
      return $this;
    }

    /**
     * @return ArrayOfJP_ProductSupplier
     */
    public function getSupplierListRS()
    {
      return $this->SupplierListRS;
    }

    /**
     * @param ArrayOfJP_ProductSupplier $SupplierListRS
     * @return JP_StaticDataRS
     */
    public function setSupplierListRS($SupplierListRS)
    {
      $this->SupplierListRS = $SupplierListRS;
      return $this;
    }

    /**
     * @return JP_ServiceItemStaticData
     */
    public function getServiceStaticData()
    {
      return $this->ServiceStaticData;
    }

    /**
     * @param JP_ServiceItemStaticData $ServiceStaticData
     * @return JP_StaticDataRS
     */
    public function setServiceStaticData($ServiceStaticData)
    {
      $this->ServiceStaticData = $ServiceStaticData;
      return $this;
    }

    /**
     * @return JP_TransferItemStaticData
     */
    public function getTransferStaticData()
    {
      return $this->TransferStaticData;
    }

    /**
     * @param JP_TransferItemStaticData $TransferStaticData
     * @return JP_StaticDataRS
     */
    public function setTransferStaticData($TransferStaticData)
    {
      $this->TransferStaticData = $TransferStaticData;
      return $this;
    }

    /**
     * @return JP_VisaItemStaticData
     */
    public function getVisaStaticData()
    {
      return $this->VisaStaticData;
    }

    /**
     * @param JP_VisaItemStaticData $VisaStaticData
     * @return JP_StaticDataRS
     */
    public function setVisaStaticData($VisaStaticData)
    {
      $this->VisaStaticData = $VisaStaticData;
      return $this;
    }

    /**
     * @return JP_MeetingPointList
     */
    public function getMeetingPointList()
    {
      return $this->MeetingPointList;
    }

    /**
     * @param JP_MeetingPointList $MeetingPointList
     * @return JP_StaticDataRS
     */
    public function setMeetingPointList($MeetingPointList)
    {
      $this->MeetingPointList = $MeetingPointList;
      return $this;
    }

    /**
     * @return ArrayOfJP_PackageCalendarPriceItems
     */
    public function getPackageCalendarPrice()
    {
      return $this->PackageCalendarPrice;
    }

    /**
     * @param ArrayOfJP_PackageCalendarPriceItems $PackageCalendarPrice
     * @return JP_StaticDataRS
     */
    public function setPackageCalendarPrice($PackageCalendarPrice)
    {
      $this->PackageCalendarPrice = $PackageCalendarPrice;
      return $this;
    }

    /**
     * @return JP_HotelPortfolio
     */
    public function getHotelPortfolio()
    {
      return $this->HotelPortfolio;
    }

    /**
     * @param JP_HotelPortfolio $HotelPortfolio
     * @return JP_StaticDataRS
     */
    public function setHotelPortfolio($HotelPortfolio)
    {
      $this->HotelPortfolio = $HotelPortfolio;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->Url;
    }

    /**
     * @param string $Url
     * @return JP_StaticDataRS
     */
    public function setUrl($Url)
    {
      $this->Url = $Url;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeStamp()
    {
      if ($this->TimeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeStamp
     * @return JP_StaticDataRS
     */
    public function setTimeStamp(\DateTime $TimeStamp)
    {
      $this->TimeStamp = $TimeStamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getIntCode()
    {
      return $this->IntCode;
    }

    /**
     * @param string $IntCode
     * @return JP_StaticDataRS
     */
    public function setIntCode($IntCode)
    {
      $this->IntCode = $IntCode;
      return $this;
    }

}
