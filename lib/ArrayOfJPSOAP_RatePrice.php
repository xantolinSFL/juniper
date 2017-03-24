<?php

class ArrayOfJPSOAP_RatePrice implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_RatePrice[] $RatePrice
     */
    protected $RatePrice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_RatePrice[]
     */
    public function getRatePrice()
    {
      return $this->RatePrice;
    }

    /**
     * @param JPSOAP_RatePrice[] $RatePrice
     * @return ArrayOfJPSOAP_RatePrice
     */
    public function setRatePrice(array $RatePrice = null)
    {
      $this->RatePrice = $RatePrice;
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
      return isset($this->RatePrice[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_RatePrice
     */
    public function offsetGet($offset)
    {
      return $this->RatePrice[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_RatePrice $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RatePrice[] = $value;
      } else {
        $this->RatePrice[$offset] = $value;
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
      unset($this->RatePrice[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_RatePrice Return the current element
     */
    public function current()
    {
      return current($this->RatePrice);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RatePrice);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RatePrice);
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
      reset($this->RatePrice);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_RatePrice Return count of elements
     */
    public function count()
    {
      return count($this->RatePrice);
    }

}
