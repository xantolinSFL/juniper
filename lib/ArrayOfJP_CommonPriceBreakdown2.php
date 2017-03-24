<?php

class ArrayOfJP_CommonPriceBreakdown2 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CommonPriceBreakdown[] $Discount
     */
    protected $Discount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CommonPriceBreakdown[]
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param JP_CommonPriceBreakdown[] $Discount
     * @return ArrayOfJP_CommonPriceBreakdown2
     */
    public function setDiscount(array $Discount = null)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->Discount[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CommonPriceBreakdown
     */
    public function offsetGet($offset)
    {
      return $this->Discount[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CommonPriceBreakdown $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Discount[] = $value;
      } else {
        $this->Discount[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Discount[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CommonPriceBreakdown Return the current element
     */
    public function current()
    {
      return current($this->Discount);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Discount);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Discount);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->Discount);
    }

    /**
     * Countable implementation
     *
     * @return JP_CommonPriceBreakdown Return count of elements
     */
    public function count()
    {
      return count($this->Discount);
    }

}
