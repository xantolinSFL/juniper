<?php

class ArrayOfJPSOAP_OrderedTypedPrice2 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_OrderedTypedPrice[] $ChildB
     */
    protected $ChildB = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_OrderedTypedPrice[]
     */
    public function getChildB()
    {
      return $this->ChildB;
    }

    /**
     * @param JPSOAP_OrderedTypedPrice[] $ChildB
     * @return ArrayOfJPSOAP_OrderedTypedPrice2
     */
    public function setChildB(array $ChildB = null)
    {
      $this->ChildB = $ChildB;
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
      return isset($this->ChildB[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_OrderedTypedPrice
     */
    public function offsetGet($offset)
    {
      return $this->ChildB[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_OrderedTypedPrice $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ChildB[] = $value;
      } else {
        $this->ChildB[$offset] = $value;
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
      unset($this->ChildB[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_OrderedTypedPrice Return the current element
     */
    public function current()
    {
      return current($this->ChildB);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChildB);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChildB);
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
      reset($this->ChildB);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_OrderedTypedPrice Return count of elements
     */
    public function count()
    {
      return count($this->ChildB);
    }

}
