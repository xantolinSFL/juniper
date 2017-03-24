<?php

class JP_RentacarSaleContract
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
     * @var string $Includes
     */
    protected $Includes = null;

    /**
     * @var string $NotIncludes
     */
    protected $NotIncludes = null;

    
    public function __construct()
    {
    
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
     * @return JP_RentacarSaleContract
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
     * @return JP_RentacarSaleContract
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getIncludes()
    {
      return $this->Includes;
    }

    /**
     * @param string $Includes
     * @return JP_RentacarSaleContract
     */
    public function setIncludes($Includes)
    {
      $this->Includes = $Includes;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotIncludes()
    {
      return $this->NotIncludes;
    }

    /**
     * @param string $NotIncludes
     * @return JP_RentacarSaleContract
     */
    public function setNotIncludes($NotIncludes)
    {
      $this->NotIncludes = $NotIncludes;
      return $this;
    }

}
