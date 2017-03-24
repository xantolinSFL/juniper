<?php

class JP_SearchSegmentServices extends JP_SearchSegmentBase
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
     * @var int $Class
     */
    protected $Class = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

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
     * @param int $Class
     * @param string $Code
     * @param int $InternalSupplier
     */
    public function __construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone, $Type, $Class, $Code, $InternalSupplier)
    {
      parent::__construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone);
      $this->Type = $Type;
      $this->Class = $Class;
      $this->Code = $Code;
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
     * @return JP_SearchSegmentServices
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
     * @return JP_SearchSegmentServices
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getClass()
    {
      return $this->Class;
    }

    /**
     * @param int $Class
     * @return JP_SearchSegmentServices
     */
    public function setClass($Class)
    {
      $this->Class = $Class;
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
     * @return JP_SearchSegmentServices
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return JP_SearchSegmentServices
     */
    public function setInternalSupplier($InternalSupplier)
    {
      $this->InternalSupplier = $InternalSupplier;
      return $this;
    }

}
