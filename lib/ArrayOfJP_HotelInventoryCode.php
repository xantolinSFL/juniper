<?php

namespace Juniper\Webservice;

class ArrayOfJP_HotelInventoryCode implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_HotelInventoryCode[] $HotelCode
     */
    protected $HotelCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelInventoryCode[]
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param JP_HotelInventoryCode[] $HotelCode
     * @return ArrayOfJP_HotelInventoryCode
     */
    public function setHotelCode(array $HotelCode = null)
    {
      $this->HotelCode = $HotelCode;
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
      return isset($this->HotelCode[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_HotelInventoryCode
     */
    public function offsetGet($offset)
    {
      return $this->HotelCode[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_HotelInventoryCode $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->HotelCode[] = $value;
      } else {
        $this->HotelCode[$offset] = $value;
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
      unset($this->HotelCode[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_HotelInventoryCode Return the current element
     */
    public function current()
    {
      return current($this->HotelCode);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HotelCode);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HotelCode);
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
      reset($this->HotelCode);
    }

    /**
     * Countable implementation
     *
     * @return JP_HotelInventoryCode Return count of elements
     */
    public function count()
    {
      return count($this->HotelCode);
    }

}
