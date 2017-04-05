<?php

namespace Juniper\Webservice;

class JP_HotelAvailAdvancedOptions extends JP_AvailAdvancedOptions
{

    /**
     * @var boolean $ShowHotelInfo
     */
    protected $ShowHotelInfo = null;

    /**
     * @var boolean $ShowOnlyAvailable
     */
    protected $ShowOnlyAvailable = null;

    /**
     * @var boolean $ShowAllCombinations
     */
    protected $ShowAllCombinations = null;

    /**
     * @var boolean $ShowOnlyBestPriceCombination
     */
    protected $ShowOnlyBestPriceCombination = null;

    /**
     * @var boolean $ShowAllRates
     */
    protected $ShowAllRates = null;

    /**
     * @var boolean $ShowAllPortfolio
     */
    protected $ShowAllPortfolio = null;

    /**
     * @var boolean $ShowAllChildrenCombinations
     */
    protected $ShowAllChildrenCombinations = null;

    /**
     * @var boolean $ShowCancellationPolicies
     */
    protected $ShowCancellationPolicies = null;

    /**
     * @var boolean $ExcludeNonRefundable
     */
    protected $ExcludeNonRefundable = null;

    /**
     * @var boolean $ShowDynamicInventory
     */
    protected $ShowDynamicInventory = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getShowHotelInfo()
    {
      return $this->ShowHotelInfo;
    }

    /**
     * @param boolean $ShowHotelInfo
     * @return JP_HotelAvailAdvancedOptions
     */
    public function setShowHotelInfo($ShowHotelInfo)
    {
      $this->ShowHotelInfo = $ShowHotelInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowOnlyAvailable()
    {
      return $this->ShowOnlyAvailable;
    }

    /**
     * @param boolean $ShowOnlyAvailable
     * @return JP_HotelAvailAdvancedOptions
     */
    public function setShowOnlyAvailable($ShowOnlyAvailable)
    {
      $this->ShowOnlyAvailable = $ShowOnlyAvailable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowAllCombinations()
    {
      return $this->ShowAllCombinations;
    }

    /**
     * @param boolean $ShowAllCombinations
     * @return JP_HotelAvailAdvancedOptions
     */
    public function setShowAllCombinations($ShowAllCombinations)
    {
      $this->ShowAllCombinations = $ShowAllCombinations;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowOnlyBestPriceCombination()
    {
      return $this->ShowOnlyBestPriceCombination;
    }

    /**
     * @param boolean $ShowOnlyBestPriceCombination
     * @return JP_HotelAvailAdvancedOptions
     */
    public function setShowOnlyBestPriceCombination($ShowOnlyBestPriceCombination)
    {
      $this->ShowOnlyBestPriceCombination = $ShowOnlyBestPriceCombination;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowAllRates()
    {
      return $this->ShowAllRates;
    }

    /**
     * @param boolean $ShowAllRates
     * @return JP_HotelAvailAdvancedOptions
     */
    public function setShowAllRates($ShowAllRates)
    {
      $this->ShowAllRates = $ShowAllRates;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowAllPortfolio()
    {
      return $this->ShowAllPortfolio;
    }

    /**
     * @param boolean $ShowAllPortfolio
     * @return JP_HotelAvailAdvancedOptions
     */
    public function setShowAllPortfolio($ShowAllPortfolio)
    {
      $this->ShowAllPortfolio = $ShowAllPortfolio;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowAllChildrenCombinations()
    {
      return $this->ShowAllChildrenCombinations;
    }

    /**
     * @param boolean $ShowAllChildrenCombinations
     * @return JP_HotelAvailAdvancedOptions
     */
    public function setShowAllChildrenCombinations($ShowAllChildrenCombinations)
    {
      $this->ShowAllChildrenCombinations = $ShowAllChildrenCombinations;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowCancellationPolicies()
    {
      return $this->ShowCancellationPolicies;
    }

    /**
     * @param boolean $ShowCancellationPolicies
     * @return JP_HotelAvailAdvancedOptions
     */
    public function setShowCancellationPolicies($ShowCancellationPolicies)
    {
      $this->ShowCancellationPolicies = $ShowCancellationPolicies;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeNonRefundable()
    {
      return $this->ExcludeNonRefundable;
    }

    /**
     * @param boolean $ExcludeNonRefundable
     * @return JP_HotelAvailAdvancedOptions
     */
    public function setExcludeNonRefundable($ExcludeNonRefundable)
    {
      $this->ExcludeNonRefundable = $ExcludeNonRefundable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowDynamicInventory()
    {
      return $this->ShowDynamicInventory;
    }

    /**
     * @param boolean $ShowDynamicInventory
     * @return JP_HotelAvailAdvancedOptions
     */
    public function setShowDynamicInventory($ShowDynamicInventory)
    {
      $this->ShowDynamicInventory = $ShowDynamicInventory;
      return $this;
    }

}
