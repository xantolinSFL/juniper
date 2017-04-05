<?php

namespace Juniper\Webservice;

class ArrayOfJP_CarSupplement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CarSupplement[] $CarSupplement
     */
    protected $CarSupplement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CarSupplement[]
     */
    public function getCarSupplement()
    {
      return $this->CarSupplement;
    }

    /**
     * @param JP_CarSupplement[] $CarSupplement
     * @return ArrayOfJP_CarSupplement
     */
    public function setCarSupplement(array $CarSupplement = null)
    {
      $this->CarSupplement = $CarSupplement;
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
      return isset($this->CarSupplement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CarSupplement
     */
    public function offsetGet($offset)
    {
      return $this->CarSupplement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CarSupplement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CarSupplement[] = $value;
      } else {
        $this->CarSupplement[$offset] = $value;
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
      unset($this->CarSupplement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CarSupplement Return the current element
     */
    public function current()
    {
      return current($this->CarSupplement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CarSupplement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CarSupplement);
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
      reset($this->CarSupplement);
    }

    /**
     * Countable implementation
     *
     * @return JP_CarSupplement Return count of elements
     */
    public function count()
    {
      return count($this->CarSupplement);
    }

}
