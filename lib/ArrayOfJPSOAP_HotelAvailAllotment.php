<?php

namespace Juniper\Webservice;

class ArrayOfJPSOAP_HotelAvailAllotment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_HotelAvailAllotment[] $Allotment
     */
    protected $Allotment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_HotelAvailAllotment[]
     */
    public function getAllotment()
    {
      return $this->Allotment;
    }

    /**
     * @param JPSOAP_HotelAvailAllotment[] $Allotment
     * @return ArrayOfJPSOAP_HotelAvailAllotment
     */
    public function setAllotment(array $Allotment = null)
    {
      $this->Allotment = $Allotment;
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
      return isset($this->Allotment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_HotelAvailAllotment
     */
    public function offsetGet($offset)
    {
      return $this->Allotment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_HotelAvailAllotment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Allotment[] = $value;
      } else {
        $this->Allotment[$offset] = $value;
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
      unset($this->Allotment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_HotelAvailAllotment Return the current element
     */
    public function current()
    {
      return current($this->Allotment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Allotment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Allotment);
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
      reset($this->Allotment);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_HotelAvailAllotment Return count of elements
     */
    public function count()
    {
      return count($this->Allotment);
    }

}
