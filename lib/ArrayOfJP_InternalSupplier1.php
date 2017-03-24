<?php

class ArrayOfJP_InternalSupplier1 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_InternalSupplier[] $InternalTransferSupplier
     */
    protected $InternalTransferSupplier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_InternalSupplier[]
     */
    public function getInternalTransferSupplier()
    {
      return $this->InternalTransferSupplier;
    }

    /**
     * @param JP_InternalSupplier[] $InternalTransferSupplier
     * @return ArrayOfJP_InternalSupplier1
     */
    public function setInternalTransferSupplier(array $InternalTransferSupplier = null)
    {
      $this->InternalTransferSupplier = $InternalTransferSupplier;
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
      return isset($this->InternalTransferSupplier[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_InternalSupplier
     */
    public function offsetGet($offset)
    {
      return $this->InternalTransferSupplier[$offset];
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
        $this->InternalTransferSupplier[] = $value;
      } else {
        $this->InternalTransferSupplier[$offset] = $value;
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
      unset($this->InternalTransferSupplier[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_InternalSupplier Return the current element
     */
    public function current()
    {
      return current($this->InternalTransferSupplier);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InternalTransferSupplier);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InternalTransferSupplier);
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
      reset($this->InternalTransferSupplier);
    }

    /**
     * Countable implementation
     *
     * @return JP_InternalSupplier Return count of elements
     */
    public function count()
    {
      return count($this->InternalTransferSupplier);
    }

}
