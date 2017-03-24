<?php

class JP_ConceptBreakdown
{

    /**
     * @var ArrayOfJP_ItemBreakdown $Items
     */
    protected $Items = null;

    /**
     * @var ArrayOfJP_CommonPriceBreakdown $Taxes
     */
    protected $Taxes = null;

    /**
     * @var anonymous84 $Type
     */
    protected $Type = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param anonymous84 $Type
     * @param string $Name
     * @param string $Code
     */
    public function __construct($Type, $Name, $Code)
    {
      $this->Type = $Type;
      $this->Name = $Name;
      $this->Code = $Code;
    }

    /**
     * @return ArrayOfJP_ItemBreakdown
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfJP_ItemBreakdown $Items
     * @return JP_ConceptBreakdown
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

    /**
     * @return ArrayOfJP_CommonPriceBreakdown
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfJP_CommonPriceBreakdown $Taxes
     * @return JP_ConceptBreakdown
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return anonymous84
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous84 $Type
     * @return JP_ConceptBreakdown
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return JP_ConceptBreakdown
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return JP_ConceptBreakdown
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
