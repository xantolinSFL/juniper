<?php

class JP_SupplementHotelType
{

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
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return JP_SupplementHotelType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
