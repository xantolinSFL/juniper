<?php

namespace Juniper\Webservice;

class ArrayOfJPSOAP_OrderedPrice1 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_OrderedPrice[] $ChildrenA
     */
    protected $ChildrenA = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_OrderedPrice[]
     */
    public function getChildrenA()
    {
      return $this->ChildrenA;
    }

    /**
     * @param JPSOAP_OrderedPrice[] $ChildrenA
     * @return ArrayOfJPSOAP_OrderedPrice1
     */
    public function setChildrenA(array $ChildrenA = null)
    {
      $this->ChildrenA = $ChildrenA;
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
      return isset($this->ChildrenA[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_OrderedPrice
     */
    public function offsetGet($offset)
    {
      return $this->ChildrenA[$offset];
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
        $this->ChildrenA[] = $value;
      } else {
        $this->ChildrenA[$offset] = $value;
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
      unset($this->ChildrenA[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_OrderedPrice Return the current element
     */
    public function current()
    {
      return current($this->ChildrenA);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChildrenA);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChildrenA);
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
      reset($this->ChildrenA);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_OrderedPrice Return count of elements
     */
    public function count()
    {
      return count($this->ChildrenA);
    }

}
