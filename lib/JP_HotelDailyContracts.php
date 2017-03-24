<?php

class JP_HotelDailyContracts
{

    /**
     * @var JP_HotelDailyContract[] $DailyContract
     */
    protected $DailyContract = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param string $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return JP_HotelDailyContract[]
     */
    public function getDailyContract()
    {
      return $this->DailyContract;
    }

    /**
     * @param JP_HotelDailyContract[] $DailyContract
     * @return JP_HotelDailyContracts
     */
    public function setDailyContract(array $DailyContract = null)
    {
      $this->DailyContract = $DailyContract;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return JP_HotelDailyContracts
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
