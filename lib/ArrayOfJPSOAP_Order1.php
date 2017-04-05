<?php

namespace Juniper\Webservice;

class ArrayOfJPSOAP_Order1 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_Order[] $ChildA
     */
    protected $ChildA = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_Order[]
     */
    public function getChildA()
    {
      return $this->ChildA;
    }

    /**
     * @param JPSOAP_Order[] $ChildA
     * @return ArrayOfJPSOAP_Order1
     */
    public function setChildA(array $ChildA = null)
    {
      $this->ChildA = $ChildA;
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
      return isset($this->ChildA[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_Order
     */
    public function offsetGet($offset)
    {
      return $this->ChildA[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_Order $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ChildA[] = $value;
      } else {
        $this->ChildA[$offset] = $value;
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
      unset($this->ChildA[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_Order Return the current element
     */
    public function current()
    {
      return current($this->ChildA);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChildA);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChildA);
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
      reset($this->ChildA);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_Order Return count of elements
     */
    public function count()
    {
      return count($this->ChildA);
    }

}
