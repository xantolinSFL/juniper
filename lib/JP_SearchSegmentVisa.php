<?php

namespace Juniper\Webservice;

class JP_SearchSegmentVisa extends JP_SearchSegmentBase
{

    /**
     * @var ArrayOfString3 $Suppliers
     */
    protected $Suppliers = null;

    /**
     * @var int $Type
     */
    protected $Type = null;

    /**
     * @var int $InternalSupplier
     */
    protected $InternalSupplier = null;

    /**
     * @param date $Start
     * @param date $End
     * @param int $OriginZone
     * @param string $JPDCode
     * @param int $DestinationZone
     * @param int $Type
     * @param int $InternalSupplier
     */
    public function __construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone, $Type, $InternalSupplier)
    {
      parent::__construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone);
      $this->Type = $Type;
      $this->InternalSupplier = $InternalSupplier;
    }

    /**
     * @return ArrayOfString3
     */
    public function getSuppliers()
    {
      return $this->Suppliers;
    }

    /**
     * @param ArrayOfString3 $Suppliers
     * @return JP_SearchSegmentVisa
     */
    public function setSuppliers($Suppliers)
    {
      $this->Suppliers = $Suppliers;
      return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param int $Type
     * @return JP_SearchSegmentVisa
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getInternalSupplier()
    {
      return $this->InternalSupplier;
    }

    /**
     * @param int $InternalSupplier
     * @return JP_SearchSegmentVisa
     */
    public function setInternalSupplier($InternalSupplier)
    {
      $this->InternalSupplier = $InternalSupplier;
      return $this;
    }

}
