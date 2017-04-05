<?php

namespace Juniper\Webservice;

class ArrayOfJP_HotelType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_HotelType[] $HotelType
     */
    protected $HotelType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelType[]
     */
    public function getHotelType()
    {
      return $this->HotelType;
    }

    /**
     * @param JP_HotelType[] $HotelType
     * @return ArrayOfJP_HotelType
     */
    public function setHotelType(array $HotelType = null)
    {
      $this->HotelType = $HotelType;
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
      return isset($this->HotelType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_HotelType
     */
    public function offsetGet($offset)
    {
      return $this->HotelType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_HotelType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->HotelType[] = $value;
      } else {
        $this->HotelType[$offset] = $value;
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
      unset($this->HotelType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_HotelType Return the current element
     */
    public function current()
    {
      return current($this->HotelType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HotelType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HotelType);
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
      reset($this->HotelType);
    }

    /**
     * Countable implementation
     *
     * @return JP_HotelType Return count of elements
     */
    public function count()
    {
      return count($this->HotelType);
    }

}
