<?php

class ArrayOfJP_InternalSupplier implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_InternalSupplier[] $InternalServiceSupplier
     */
    protected $InternalServiceSupplier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_InternalSupplier[]
     */
    public function getInternalServiceSupplier()
    {
      return $this->InternalServiceSupplier;
    }

    /**
     * @param JP_InternalSupplier[] $InternalServiceSupplier
     * @return ArrayOfJP_InternalSupplier
     */
    public function setInternalServiceSupplier(array $InternalServiceSupplier = null)
    {
      $this->InternalServiceSupplier = $InternalServiceSupplier;
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
      return isset($this->InternalServiceSupplier[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_InternalSupplier
     */
    public function offsetGet($offset)
    {
      return $this->InternalServiceSupplier[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_InternalSupplier $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->InternalServiceSupplier[] = $value;
      } else {
        $this->InternalServiceSupplier[$offset] = $value;
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
      unset($this->InternalServiceSupplier[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_InternalSupplier Return the current element
     */
    public function current()
    {
      return current($this->InternalServiceSupplier);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InternalServiceSupplier);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InternalServiceSupplier);
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
      reset($this->InternalServiceSupplier);
    }

    /**
     * Countable implementation
     *
     * @return JP_InternalSupplier Return count of elements
     */
    public function count()
    {
      return count($this->InternalServiceSupplier);
    }

}
