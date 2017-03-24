<?php

class JP_HotelContractType extends JP_Contract
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param string $Type
     */
    public function __construct($Type)
    {
      parent::__construct($Type);
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
     * @return JP_HotelContractType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
