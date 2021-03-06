<?php

namespace Juniper\Webservice;

class ArrayOfJPSOAP_HotelInventoryDescription implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_HotelInventoryDescription[] $Description
     */
    protected $Description = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_HotelInventoryDescription[]
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param JPSOAP_HotelInventoryDescription[] $Description
     * @return ArrayOfJPSOAP_HotelInventoryDescription
     */
    public function setDescription(array $Description = null)
    {
      $this->Description = $Description;
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
      return isset($this->Description[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_HotelInventoryDescription
     */
    public function offsetGet($offset)
    {
      return $this->Description[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_HotelInventoryDescription $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Description[] = $value;
      } else {
        $this->Description[$offset] = $value;
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
      unset($this->Description[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_HotelInventoryDescription Return the current element
     */
    public function current()
    {
      return current($this->Description);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Description);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Description);
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
      reset($this->Description);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_HotelInventoryDescription Return count of elements
     */
    public function count()
    {
      return count($this->Description);
    }

}
