<?php

class JP_RentacarLocationDetail
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var JP_Zone $Zone
     */
    protected $Zone = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $Latitude
     */
    protected $Latitude = null;

    /**
     * @var string $Longitude
     */
    protected $Longitude = null;

    /**
     * @var ArrayOfJP_PhoneNumber $PhoneNumbers
     */
    protected $PhoneNumbers = null;

    /**
     * @var JP_OperationSchedule $OperationSchedule
     */
    protected $OperationSchedule = null;

    /**
     * @var JP_Supplier $Supplier
     */
    protected $Supplier = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Group
     */
    protected $Group = null;

    /**
     * @var anonymous214 $LocationType
     */
    protected $LocationType = null;

    /**
     * @param string $Code
     * @param string $Group
     * @param anonymous214 $LocationType
     */
    public function __construct($Code, $Group, $LocationType)
    {
      $this->Code = $Code;
      $this->Group = $Group;
      $this->LocationType = $LocationType;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JP_RentacarLocationDetail
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return JP_Zone
     */
    public function getZone()
    {
      return $this->Zone;
    }

    /**
     * @param JP_Zone $Zone
     * @return JP_RentacarLocationDetail
     */
    public function setZone($Zone)
    {
      $this->Zone = $Zone;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return JP_RentacarLocationDetail
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return JP_RentacarLocationDetail
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return JP_RentacarLocationDetail
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

    /**
     * @return ArrayOfJP_PhoneNumber
     */
    public function getPhoneNumbers()
    {
      return $this->PhoneNumbers;
    }

    /**
     * @param ArrayOfJP_PhoneNumber $PhoneNumbers
     * @return JP_RentacarLocationDetail
     */
    public function setPhoneNumbers($PhoneNumbers)
    {
      $this->PhoneNumbers = $PhoneNumbers;
      return $this;
    }

    /**
     * @return JP_OperationSchedule
     */
    public function getOperationSchedule()
    {
      return $this->OperationSchedule;
    }

    /**
     * @param JP_OperationSchedule $OperationSchedule
     * @return JP_RentacarLocationDetail
     */
    public function setOperationSchedule($OperationSchedule)
    {
      $this->OperationSchedule = $OperationSchedule;
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
     * @return JP_RentacarLocationDetail
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
     * @return JP_RentacarLocationDetail
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
      return $this->Group;
    }

    /**
     * @param string $Group
     * @return JP_RentacarLocationDetail
     */
    public function setGroup($Group)
    {
      $this->Group = $Group;
      return $this;
    }

    /**
     * @return anonymous214
     */
    public function getLocationType()
    {
      return $this->LocationType;
    }

    /**
     * @param anonymous214 $LocationType
     * @return JP_RentacarLocationDetail
     */
    public function setLocationType($LocationType)
    {
      $this->LocationType = $LocationType;
      return $this;
    }

}
