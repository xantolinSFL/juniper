<?php

namespace Juniper\Webservice;

class ArrayOfJP_HotelAdditionalElement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_HotelAdditionalElement[] $HotelSupplement
     */
    protected $HotelSupplement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelAdditionalElement[]
     */
    public function getHotelSupplement()
    {
      return $this->HotelSupplement;
    }

    /**
     * @param JP_HotelAdditionalElement[] $HotelSupplement
     * @return ArrayOfJP_HotelAdditionalElement
     */
    public function setHotelSupplement(array $HotelSupplement = null)
    {
      $this->HotelSupplement = $HotelSupplement;
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
      return isset($this->HotelSupplement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_HotelAdditionalElement
     */
    public function offsetGet($offset)
    {
      return $this->HotelSupplement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_HotelAdditionalElement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->HotelSupplement[] = $value;
      } else {
        $this->HotelSupplement[$offset] = $value;
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
      unset($this->HotelSupplement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_HotelAdditionalElement Return the current element
     */
    public function current()
    {
      return current($this->HotelSupplement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HotelSupplement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HotelSupplement);
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
      reset($this->HotelSupplement);
    }

    /**
     * Countable implementation
     *
     * @return JP_HotelAdditionalElement Return count of elements
     */
    public function count()
    {
      return count($this->HotelSupplement);
    }

}
