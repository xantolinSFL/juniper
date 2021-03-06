<?php

namespace Juniper\Webservice;

class ArrayOfJP_ItemBreakdown implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_ItemBreakdown[] $Item
     */
    protected $Item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ItemBreakdown[]
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param JP_ItemBreakdown[] $Item
     * @return ArrayOfJP_ItemBreakdown
     */
    public function setItem(array $Item = null)
    {
      $this->Item = $Item;
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
      return isset($this->Item[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_ItemBreakdown
     */
    public function offsetGet($offset)
    {
      return $this->Item[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_ItemBreakdown $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Item[] = $value;
      } else {
        $this->Item[$offset] = $value;
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
      unset($this->Item[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_ItemBreakdown Return the current element
     */
    public function current()
    {
      return current($this->Item);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Item);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Item);
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
      reset($this->Item);
    }

    /**
     * Countable implementation
     *
     * @return JP_ItemBreakdown Return count of elements
     */
    public function count()
    {
      return count($this->Item);
    }

}
