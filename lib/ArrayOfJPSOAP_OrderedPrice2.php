<?php

class ArrayOfJPSOAP_OrderedPrice2 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_OrderedPrice[] $ChildrenB
     */
    protected $ChildrenB = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_OrderedPrice[]
     */
    public function getChildrenB()
    {
      return $this->ChildrenB;
    }

    /**
     * @param JPSOAP_OrderedPrice[] $ChildrenB
     * @return ArrayOfJPSOAP_OrderedPrice2
     */
    public function setChildrenB(array $ChildrenB = null)
    {
      $this->ChildrenB = $ChildrenB;
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
      return isset($this->ChildrenB[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_OrderedPrice
     */
    public function offsetGet($offset)
    {
      return $this->ChildrenB[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_OrderedPrice $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ChildrenB[] = $value;
      } else {
        $this->ChildrenB[$offset] = $value;
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
      unset($this->ChildrenB[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_OrderedPrice Return the current element
     */
    public function current()
    {
      return current($this->ChildrenB);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChildrenB);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChildrenB);
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
      reset($this->ChildrenB);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_OrderedPrice Return count of elements
     */
    public function count()
    {
      return count($this->ChildrenB);
    }

}
