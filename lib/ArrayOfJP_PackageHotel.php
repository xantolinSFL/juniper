<?php

namespace Juniper\Webservice;

class ArrayOfJP_PackageHotel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_PackageHotel[] $Hotel
     */
    protected $Hotel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PackageHotel[]
     */
    public function getHotel()
    {
      return $this->Hotel;
    }

    /**
     * @param JP_PackageHotel[] $Hotel
     * @return ArrayOfJP_PackageHotel
     */
    public function setHotel(array $Hotel = null)
    {
      $this->Hotel = $Hotel;
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
      return isset($this->Hotel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_PackageHotel
     */
    public function offsetGet($offset)
    {
      return $this->Hotel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_PackageHotel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Hotel[] = $value;
      } else {
        $this->Hotel[$offset] = $value;
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
      unset($this->Hotel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_PackageHotel Return the current element
     */
    public function current()
    {
      return current($this->Hotel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Hotel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Hotel);
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
      reset($this->Hotel);
    }

    /**
     * Countable implementation
     *
     * @return JP_PackageHotel Return count of elements
     */
    public function count()
    {
      return count($this->Hotel);
    }

}
