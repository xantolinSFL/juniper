<?php

class JP_CruisePriceInformation
{

    /**
     * @var ArrayOfJP_CruiseComponent $Components
     */
    protected $Components = null;

    /**
     * @var JP_CruiseCategory $Category
     */
    protected $Category = null;

    /**
     * @var JP_CruiseAdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_CruiseComponent
     */
    public function getComponents()
    {
      return $this->Components;
    }

    /**
     * @param ArrayOfJP_CruiseComponent $Components
     * @return JP_CruisePriceInformation
     */
    public function setComponents($Components)
    {
      $this->Components = $Components;
      return $this;
    }

    /**
     * @return JP_CruiseCategory
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param JP_CruiseCategory $Category
     * @return JP_CruisePriceInformation
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return JP_CruiseAdditionalElements
     */
    public function getAdditionalElements()
    {
      return $this->AdditionalElements;
    }

    /**
     * @param JP_CruiseAdditionalElements $AdditionalElements
     * @return JP_CruisePriceInformation
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
      return $this;
    }

    /**
     * @return ArrayOfJP_Price
     */
    public function getPrices()
    {
      return $this->Prices;
    }

    /**
     * @param ArrayOfJP_Price $Prices
     * @return JP_CruisePriceInformation
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

}
