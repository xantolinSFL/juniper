<?php

namespace Juniper\Webservice;

class ArrayOfJP_InternalSupplier2 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_InternalSupplier[] $InternalVisaSupplier
     */
    protected $InternalVisaSupplier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_InternalSupplier[]
     */
    public function getInternalVisaSupplier()
    {
      return $this->InternalVisaSupplier;
    }

    /**
     * @param JP_InternalSupplier[] $InternalVisaSupplier
     * @return ArrayOfJP_InternalSupplier2
     */
    public function setInternalVisaSupplier(array $InternalVisaSupplier = null)
    {
      $this->InternalVisaSupplier = $InternalVisaSupplier;
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
      return isset($this->InternalVisaSupplier[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_InternalSupplier
     */
    public function offsetGet($offset)
    {
      return $this->InternalVisaSupplier[$offset];
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
        $this->InternalVisaSupplier[] = $value;
      } else {
        $this->InternalVisaSupplier[$offset] = $value;
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
      unset($this->InternalVisaSupplier[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_InternalSupplier Return the current element
     */
    public function current()
    {
      return current($this->InternalVisaSupplier);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InternalVisaSupplier);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InternalVisaSupplier);
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
      reset($this->InternalVisaSupplier);
    }

    /**
     * Countable implementation
     *
     * @return JP_InternalSupplier Return count of elements
     */
    public function count()
    {
      return count($this->InternalVisaSupplier);
    }

}
