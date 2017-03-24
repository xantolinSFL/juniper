<?php

class ArrayOfJPSOAP_hotelRatePlanRate implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_hotelRatePlanRate[] $Rate
     */
    protected $Rate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_hotelRatePlanRate[]
     */
    public function getRate()
    {
      return $this->Rate;
    }

    /**
     * @param JPSOAP_hotelRatePlanRate[] $Rate
     * @return ArrayOfJPSOAP_hotelRatePlanRate
     */
    public function setRate(array $Rate = null)
    {
      $this->Rate = $Rate;
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
      return isset($this->Rate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_hotelRatePlanRate
     */
    public function offsetGet($offset)
    {
      return $this->Rate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_hotelRatePlanRate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Rate[] = $value;
      } else {
        $this->Rate[$offset] = $value;
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
      unset($this->Rate[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_hotelRatePlanRate Return the current element
     */
    public function current()
    {
      return current($this->Rate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Rate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Rate);
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
      reset($this->Rate);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_hotelRatePlanRate Return count of elements
     */
    public function count()
    {
      return count($this->Rate);
    }

}
