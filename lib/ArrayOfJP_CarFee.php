<?php

namespace Juniper\Webservice;

class ArrayOfJP_CarFee implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CarFee[] $CarFee
     */
    protected $CarFee = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CarFee[]
     */
    public function getCarFee()
    {
      return $this->CarFee;
    }

    /**
     * @param JP_CarFee[] $CarFee
     * @return ArrayOfJP_CarFee
     */
    public function setCarFee(array $CarFee = null)
    {
      $this->CarFee = $CarFee;
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
      return isset($this->CarFee[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CarFee
     */
    public function offsetGet($offset)
    {
      return $this->CarFee[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CarFee $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CarFee[] = $value;
      } else {
        $this->CarFee[$offset] = $value;
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
      unset($this->CarFee[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CarFee Return the current element
     */
    public function current()
    {
      return current($this->CarFee);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CarFee);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CarFee);
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
      reset($this->CarFee);
    }

    /**
     * Countable implementation
     *
     * @return JP_CarFee Return count of elements
     */
    public function count()
    {
      return count($this->CarFee);
    }

}
