<?php

namespace Juniper\Webservice;

class ArrayOfJP_CommonPriceBreakdown implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CommonPriceBreakdown[] $Tax
     */
    protected $Tax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CommonPriceBreakdown[]
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param JP_CommonPriceBreakdown[] $Tax
     * @return ArrayOfJP_CommonPriceBreakdown
     */
    public function setTax(array $Tax = null)
    {
      $this->Tax = $Tax;
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
      return isset($this->Tax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CommonPriceBreakdown
     */
    public function offsetGet($offset)
    {
      return $this->Tax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CommonPriceBreakdown $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Tax[] = $value;
      } else {
        $this->Tax[$offset] = $value;
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
      unset($this->Tax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CommonPriceBreakdown Return the current element
     */
    public function current()
    {
      return current($this->Tax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Tax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Tax);
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
      reset($this->Tax);
    }

    /**
     * Countable implementation
     *
     * @return JP_CommonPriceBreakdown Return count of elements
     */
    public function count()
    {
      return count($this->Tax);
    }

}
