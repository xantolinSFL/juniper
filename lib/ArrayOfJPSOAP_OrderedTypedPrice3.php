<?php

class ArrayOfJPSOAP_OrderedTypedPrice3 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_OrderedTypedPrice[] $Infant
     */
    protected $Infant = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_OrderedTypedPrice[]
     */
    public function getInfant()
    {
      return $this->Infant;
    }

    /**
     * @param JPSOAP_OrderedTypedPrice[] $Infant
     * @return ArrayOfJPSOAP_OrderedTypedPrice3
     */
    public function setInfant(array $Infant = null)
    {
      $this->Infant = $Infant;
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
      return isset($this->Infant[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_OrderedTypedPrice
     */
    public function offsetGet($offset)
    {
      return $this->Infant[$offset];
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
        $this->Infant[] = $value;
      } else {
        $this->Infant[$offset] = $value;
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
      unset($this->Infant[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_OrderedTypedPrice Return the current element
     */
    public function current()
    {
      return current($this->Infant);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Infant);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Infant);
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
      reset($this->Infant);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_OrderedTypedPrice Return count of elements
     */
    public function count()
    {
      return count($this->Infant);
    }

}
