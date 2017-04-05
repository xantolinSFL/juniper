<?php

namespace Juniper\Webservice;

class ArrayOfJP_HotelElement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_HotelElement[] $HotelElement
     */
    protected $HotelElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelElement[]
     */
    public function getHotelElement()
    {
      return $this->HotelElement;
    }

    /**
     * @param JP_HotelElement[] $HotelElement
     * @return ArrayOfJP_HotelElement
     */
    public function setHotelElement(array $HotelElement = null)
    {
      $this->HotelElement = $HotelElement;
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
      return isset($this->HotelElement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_HotelElement
     */
    public function offsetGet($offset)
    {
      return $this->HotelElement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_HotelElement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->HotelElement[] = $value;
      } else {
        $this->HotelElement[$offset] = $value;
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
      unset($this->HotelElement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_HotelElement Return the current element
     */
    public function current()
    {
      return current($this->HotelElement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HotelElement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HotelElement);
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
      reset($this->HotelElement);
    }

    /**
     * Countable implementation
     *
     * @return JP_HotelElement Return count of elements
     */
    public function count()
    {
      return count($this->HotelElement);
    }

}
