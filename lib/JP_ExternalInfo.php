<?php

class JP_ExternalInfo
{

    /**
     * @var JP_Supplier $Supplier
     */
    protected $Supplier = null;

    /**
     * @var string $ExternalLocator
     */
    protected $ExternalLocator = null;

    
    public function __construct()
    {
    
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
     * @return JP_ExternalInfo
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalLocator()
    {
      return $this->ExternalLocator;
    }

    /**
     * @param string $ExternalLocator
     * @return JP_ExternalInfo
     */
    public function setExternalLocator($ExternalLocator)
    {
      $this->ExternalLocator = $ExternalLocator;
      return $this;
    }

}
