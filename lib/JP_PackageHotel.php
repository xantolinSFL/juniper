<?php

namespace Juniper\Webservice;

class JP_PackageHotel
{

    /**
     * @var JP_HotelInfo $HotelInfo
     */
    protected $HotelInfo = null;

    /**
     * @var ArrayOfJP_HotelOption $HotelOptions
     */
    protected $HotelOptions = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var date $End
     */
    protected $End = null;

    /**
     * @var string $ICode
     */
    protected $ICode = null;

    /**
     * @var boolean $SearchMore
     */
    protected $SearchMore = null;

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @var boolean $Recommended
     */
    protected $Recommended = null;

    /**
     * @var int $Priority
     */
    protected $Priority = null;

    /**
     * @param string $Code
     * @param date $Start
     * @param date $End
     * @param string $ICode
     * @param boolean $SearchMore
     * @param int $Order
     * @param boolean $Recommended
     * @param int $Priority
     */
    public function __construct($Code, $Start, $End, $ICode, $SearchMore, $Order, $Recommended, $Priority)
    {
      $this->Code = $Code;
      $this->Start = $Start;
      $this->End = $End;
      $this->ICode = $ICode;
      $this->SearchMore = $SearchMore;
      $this->Order = $Order;
      $this->Recommended = $Recommended;
      $this->Priority = $Priority;
    }

    /**
     * @return JP_HotelInfo
     */
    public function getHotelInfo()
    {
      return $this->HotelInfo;
    }

    /**
     * @param JP_HotelInfo $HotelInfo
     * @return JP_PackageHotel
     */
    public function setHotelInfo($HotelInfo)
    {
      $this->HotelInfo = $HotelInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelOption
     */
    public function getHotelOptions()
    {
      return $this->HotelOptions;
    }

    /**
     * @param ArrayOfJP_HotelOption $HotelOptions
     * @return JP_PackageHotel
     */
    public function setHotelOptions($HotelOptions)
    {
      $this->HotelOptions = $HotelOptions;
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
     * @return JP_PackageHotel
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return date
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param date $Start
     * @return JP_PackageHotel
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return date
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param date $End
     * @return JP_PackageHotel
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

    /**
     * @return string
     */
    public function getICode()
    {
      return $this->ICode;
    }

    /**
     * @param string $ICode
     * @return JP_PackageHotel
     */
    public function setICode($ICode)
    {
      $this->ICode = $ICode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchMore()
    {
      return $this->SearchMore;
    }

    /**
     * @param boolean $SearchMore
     * @return JP_PackageHotel
     */
    public function setSearchMore($SearchMore)
    {
      $this->SearchMore = $SearchMore;
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
     * @return JP_PackageHotel
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRecommended()
    {
      return $this->Recommended;
    }

    /**
     * @param boolean $Recommended
     * @return JP_PackageHotel
     */
    public function setRecommended($Recommended)
    {
      $this->Recommended = $Recommended;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param int $Priority
     * @return JP_PackageHotel
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

}
