<?php

namespace Juniper\Webservice;

class JP_RentacarRulesResult
{

    /**
     * @var JP_RentacarInfo $RentacarInfo
     */
    protected $RentacarInfo = null;

    /**
     * @var ArrayOfJP_RentacarBookingRulesOption $RentacarOptions
     */
    protected $RentacarOptions = null;

    /**
     * @var anyType $OriginZoneName
     */
    protected $OriginZoneName = null;

    /**
     * @var anyType $DestinationZoneName
     */
    protected $DestinationZoneName = null;

    /**
     * @var boolean $ExternalProduct
     */
    protected $ExternalProduct = null;

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @var ArrayOfJP_Origin $Origins
     */
    protected $Origins = null;

    /**
     * @var ArrayOfJP_Destination $Destinations
     */
    protected $Destinations = null;

    /**
     * @var ArrayOfJP_RentacarLocationDetail $RentacarLocationDetails
     */
    protected $RentacarLocationDetails = null;

    /**
     * @var JP_Supplier $Supplier
     */
    protected $Supplier = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $OriginZone
     */
    protected $OriginZone = null;

    /**
     * @var string $DestinationZone
     */
    protected $DestinationZone = null;

    /**
     * @param string $Code
     * @param string $OriginZone
     * @param string $DestinationZone
     */
    public function __construct($Code, $OriginZone, $DestinationZone)
    {
      $this->Code = $Code;
      $this->OriginZone = $OriginZone;
      $this->DestinationZone = $DestinationZone;
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
     * @return JP_RentacarRulesResult
     */
    public function setRentacarInfo($RentacarInfo)
    {
      $this->RentacarInfo = $RentacarInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_RentacarBookingRulesOption
     */
    public function getRentacarOptions()
    {
      return $this->RentacarOptions;
    }

    /**
     * @param ArrayOfJP_RentacarBookingRulesOption $RentacarOptions
     * @return JP_RentacarRulesResult
     */
    public function setRentacarOptions($RentacarOptions)
    {
      $this->RentacarOptions = $RentacarOptions;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getOriginZoneName()
    {
      return $this->OriginZoneName;
    }

    /**
     * @param anyType $OriginZoneName
     * @return JP_RentacarRulesResult
     */
    public function setOriginZoneName($OriginZoneName)
    {
      $this->OriginZoneName = $OriginZoneName;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getDestinationZoneName()
    {
      return $this->DestinationZoneName;
    }

    /**
     * @param anyType $DestinationZoneName
     * @return JP_RentacarRulesResult
     */
    public function setDestinationZoneName($DestinationZoneName)
    {
      $this->DestinationZoneName = $DestinationZoneName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExternalProduct()
    {
      return $this->ExternalProduct;
    }

    /**
     * @param boolean $ExternalProduct
     * @return JP_RentacarRulesResult
     */
    public function setExternalProduct($ExternalProduct)
    {
      $this->ExternalProduct = $ExternalProduct;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param int $Order
     * @return JP_RentacarRulesResult
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

    /**
     * @return ArrayOfJP_Origin
     */
    public function getOrigins()
    {
      return $this->Origins;
    }

    /**
     * @param ArrayOfJP_Origin $Origins
     * @return JP_RentacarRulesResult
     */
    public function setOrigins($Origins)
    {
      $this->Origins = $Origins;
      return $this;
    }

    /**
     * @return ArrayOfJP_Destination
     */
    public function getDestinations()
    {
      return $this->Destinations;
    }

    /**
     * @param ArrayOfJP_Destination $Destinations
     * @return JP_RentacarRulesResult
     */
    public function setDestinations($Destinations)
    {
      $this->Destinations = $Destinations;
      return $this;
    }

    /**
     * @return ArrayOfJP_RentacarLocationDetail
     */
    public function getRentacarLocationDetails()
    {
      return $this->RentacarLocationDetails;
    }

    /**
     * @param ArrayOfJP_RentacarLocationDetail $RentacarLocationDetails
     * @return JP_RentacarRulesResult
     */
    public function setRentacarLocationDetails($RentacarLocationDetails)
    {
      $this->RentacarLocationDetails = $RentacarLocationDetails;
      return $this;
    }

    /**
     * @return JP_Supplier
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param JP_Supplier $Supplier
     * @return JP_RentacarRulesResult
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return JP_RentacarRulesResult
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginZone()
    {
      return $this->OriginZone;
    }

    /**
     * @param string $OriginZone
     * @return JP_RentacarRulesResult
     */
    public function setOriginZone($OriginZone)
    {
      $this->OriginZone = $OriginZone;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationZone()
    {
      return $this->DestinationZone;
    }

    /**
     * @param string $DestinationZone
     * @return JP_RentacarRulesResult
     */
    public function setDestinationZone($DestinationZone)
    {
      $this->DestinationZone = $DestinationZone;
      return $this;
    }

}
