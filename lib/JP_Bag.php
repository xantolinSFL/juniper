<?php

namespace Juniper\Webservice;

class JP_Bag
{

    /**
     * @var ArrayOfJP_ExtendedRelPaxBag $RelPaxes
     */
    protected $RelPaxes = null;

    /**
     * @var JP_Price $Price
     */
    protected $Price = null;

    /**
     * @var JP_BaggageType $BaggageType
     */
    protected $BaggageType = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $Weight
     */
    protected $Weight = null;

    /**
     * @var string $Size
     */
    protected $Size = null;

    /**
     * @param JP_BaggageType $BaggageType
     * @param int $Quantity
     * @param int $Weight
     * @param string $Size
     */
    public function __construct($BaggageType, $Quantity, $Weight, $Size)
    {
      $this->BaggageType = $BaggageType;
      $this->Quantity = $Quantity;
      $this->Weight = $Weight;
      $this->Size = $Size;
    }

    /**
     * @return ArrayOfJP_ExtendedRelPaxBag
     */
    public function getRelPaxes()
    {
      return $this->RelPaxes;
    }

    /**
     * @param ArrayOfJP_ExtendedRelPaxBag $RelPaxes
     * @return JP_Bag
     */
    public function setRelPaxes($RelPaxes)
    {
      $this->RelPaxes = $RelPaxes;
      return $this;
    }

    /**
     * @return JP_Price
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param JP_Price $Price
     * @return JP_Bag
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return JP_BaggageType
     */
    public function getBaggageType()
    {
      return $this->BaggageType;
    }

    /**
     * @param JP_BaggageType $BaggageType
     * @return JP_Bag
     */
    public function setBaggageType($BaggageType)
    {
      $this->BaggageType = $BaggageType;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return JP_Bag
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param int $Weight
     * @return JP_Bag
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getSize()
    {
      return $this->Size;
    }

    /**
     * @param string $Size
     * @return JP_Bag
     */
    public function setSize($Size)
    {
      $this->Size = $Size;
      return $this;
    }

}
