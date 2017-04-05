<?php

namespace Juniper\Webservice;

class JP_HotelRoomCode
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $CategoryCode
     */
    protected $CategoryCode = null;

    /**
     * @var string $CategoryType
     */
    protected $CategoryType = null;

    /**
     * @param string $_
     * @param string $Code
     * @param string $CategoryCode
     * @param string $CategoryType
     */
    public function __construct($_, $Code, $CategoryCode, $CategoryType)
    {
      $this->_ = $_;
      $this->Code = $Code;
      $this->CategoryCode = $CategoryCode;
      $this->CategoryType = $CategoryType;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return JP_HotelRoomCode
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return JP_HotelRoomCode
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryCode()
    {
      return $this->CategoryCode;
    }

    /**
     * @param string $CategoryCode
     * @return JP_HotelRoomCode
     */
    public function setCategoryCode($CategoryCode)
    {
      $this->CategoryCode = $CategoryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryType()
    {
      return $this->CategoryType;
    }

    /**
     * @param string $CategoryType
     * @return JP_HotelRoomCode
     */
    public function setCategoryType($CategoryType)
    {
      $this->CategoryType = $CategoryType;
      return $this;
    }

}
