<?php

class JP_HotelService
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Board
     */
    protected $Board = null;

    /**
     * @var date $CheckoutDate
     */
    protected $CheckoutDate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Block
     */
    protected $Block = null;

    /**
     * @var JP_Room $Room
     */
    protected $Room = null;

    
    public function __construct()
    {
    
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
     * @return JP_HotelService
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getBoard()
    {
      return $this->Board;
    }

    /**
     * @param string $Board
     * @return JP_HotelService
     */
    public function setBoard($Board)
    {
      $this->Board = $Board;
      return $this;
    }

    /**
     * @return date
     */
    public function getCheckoutDate()
    {
      return $this->CheckoutDate;
    }

    /**
     * @param date $CheckoutDate
     * @return JP_HotelService
     */
    public function setCheckoutDate($CheckoutDate)
    {
      $this->CheckoutDate = $CheckoutDate;
      return $this;
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
     * @return JP_HotelService
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getBlock()
    {
      return $this->Block;
    }

    /**
     * @param string $Block
     * @return JP_HotelService
     */
    public function setBlock($Block)
    {
      $this->Block = $Block;
      return $this;
    }

    /**
     * @return JP_Room
     */
    public function getRoom()
    {
      return $this->Room;
    }

    /**
     * @param JP_Room $Room
     * @return JP_HotelService
     */
    public function setRoom($Room)
    {
      $this->Room = $Room;
      return $this;
    }

}
