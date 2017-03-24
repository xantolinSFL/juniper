<?php

class JP_Tour
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Image
     */
    protected $Image = null;

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
     * @param string $Code
     * @param date $Start
     * @param date $End
     * @param string $ICode
     * @param boolean $SearchMore
     * @param int $Order
     */
    public function __construct($Code, $Start, $End, $ICode, $SearchMore, $Order)
    {
      $this->Code = $Code;
      $this->Start = $Start;
      $this->End = $End;
      $this->ICode = $ICode;
      $this->SearchMore = $SearchMore;
      $this->Order = $Order;
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
     * @return JP_Tour
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return JP_Tour
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
      return $this->Image;
    }

    /**
     * @param string $Image
     * @return JP_Tour
     */
    public function setImage($Image)
    {
      $this->Image = $Image;
      return $this;
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
     * @return JP_Tour
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
     * @return JP_Tour
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
     * @return JP_Tour
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
     * @return JP_Tour
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
     * @return JP_Tour
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
     * @return JP_Tour
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
     * @return JP_Tour
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
     * @return JP_Tour
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

}
