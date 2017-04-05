<?php

namespace Juniper\Webservice;

class JP_Items
{

    /**
     * @var JP_FlightItem[] $FlightItem
     */
    protected $FlightItem = null;

    /**
     * @var JP_HotelItem[] $HotelItem
     */
    protected $HotelItem = null;

    /**
     * @var JP_PackageItem[] $PackageItem
     */
    protected $PackageItem = null;

    /**
     * @var JP_RentacarItem[] $CarItem
     */
    protected $CarItem = null;

    /**
     * @var JP_InsuranceItem[] $InsuranceItem
     */
    protected $InsuranceItem = null;

    /**
     * @var JP_CruiseItem[] $CruiseItem
     */
    protected $CruiseItem = null;

    /**
     * @var JP_ServiceItem[] $ServiceItem
     */
    protected $ServiceItem = null;

    /**
     * @var JP_TransferItem[] $TransferItem
     */
    protected $TransferItem = null;

    /**
     * @var JP_VisaItem[] $VisaItem
     */
    protected $VisaItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_FlightItem[]
     */
    public function getFlightItem()
    {
      return $this->FlightItem;
    }

    /**
     * @param JP_FlightItem[] $FlightItem
     * @return JP_Items
     */
    public function setFlightItem(array $FlightItem = null)
    {
      $this->FlightItem = $FlightItem;
      return $this;
    }

    /**
     * @return JP_HotelItem[]
     */
    public function getHotelItem()
    {
      return $this->HotelItem;
    }

    /**
     * @param JP_HotelItem[] $HotelItem
     * @return JP_Items
     */
    public function setHotelItem(array $HotelItem = null)
    {
      $this->HotelItem = $HotelItem;
      return $this;
    }

    /**
     * @return JP_PackageItem[]
     */
    public function getPackageItem()
    {
      return $this->PackageItem;
    }

    /**
     * @param JP_PackageItem[] $PackageItem
     * @return JP_Items
     */
    public function setPackageItem(array $PackageItem = null)
    {
      $this->PackageItem = $PackageItem;
      return $this;
    }

    /**
     * @return JP_RentacarItem[]
     */
    public function getCarItem()
    {
      return $this->CarItem;
    }

    /**
     * @param JP_RentacarItem[] $CarItem
     * @return JP_Items
     */
    public function setCarItem(array $CarItem = null)
    {
      $this->CarItem = $CarItem;
      return $this;
    }

    /**
     * @return JP_InsuranceItem[]
     */
    public function getInsuranceItem()
    {
      return $this->InsuranceItem;
    }

    /**
     * @param JP_InsuranceItem[] $InsuranceItem
     * @return JP_Items
     */
    public function setInsuranceItem(array $InsuranceItem = null)
    {
      $this->InsuranceItem = $InsuranceItem;
      return $this;
    }

    /**
     * @return JP_CruiseItem[]
     */
    public function getCruiseItem()
    {
      return $this->CruiseItem;
    }

    /**
     * @param JP_CruiseItem[] $CruiseItem
     * @return JP_Items
     */
    public function setCruiseItem(array $CruiseItem = null)
    {
      $this->CruiseItem = $CruiseItem;
      return $this;
    }

    /**
     * @return JP_ServiceItem[]
     */
    public function getServiceItem()
    {
      return $this->ServiceItem;
    }

    /**
     * @param JP_ServiceItem[] $ServiceItem
     * @return JP_Items
     */
    public function setServiceItem(array $ServiceItem = null)
    {
      $this->ServiceItem = $ServiceItem;
      return $this;
    }

    /**
     * @return JP_TransferItem[]
     */
    public function getTransferItem()
    {
      return $this->TransferItem;
    }

    /**
     * @param JP_TransferItem[] $TransferItem
     * @return JP_Items
     */
    public function setTransferItem(array $TransferItem = null)
    {
      $this->TransferItem = $TransferItem;
      return $this;
    }

    /**
     * @return JP_VisaItem[]
     */
    public function getVisaItem()
    {
      return $this->VisaItem;
    }

    /**
     * @param JP_VisaItem[] $VisaItem
     * @return JP_Items
     */
    public function setVisaItem(array $VisaItem = null)
    {
      $this->VisaItem = $VisaItem;
      return $this;
    }

}
