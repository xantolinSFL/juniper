<?php

class ArrayOfJPSOAP_HotelAvailStopSale implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_HotelAvailStopSale[] $StopSale
     */
    protected $StopSale = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_HotelAvailStopSale[]
     */
    public function getStopSale()
    {
      return $this->StopSale;
    }

    /**
     * @param JPSOAP_HotelAvailStopSale[] $StopSale
     * @return ArrayOfJPSOAP_HotelAvailStopSale
     */
    public function setStopSale(array $StopSale = null)
    {
      $this->StopSale = $StopSale;
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
      return isset($this->StopSale[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_HotelAvailStopSale
     */
    public function offsetGet($offset)
    {
      return $this->StopSale[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_HotelAvailStopSale $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->StopSale[] = $value;
      } else {
        $this->StopSale[$offset] = $value;
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
      unset($this->StopSale[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_HotelAvailStopSale Return the current element
     */
    public function current()
    {
      return current($this->StopSale);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->StopSale);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->StopSale);
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
      reset($this->StopSale);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_HotelAvailStopSale Return count of elements
     */
    public function count()
    {
      return count($this->StopSale);
    }

}
