<?php

namespace Juniper\Webservice;

class ArrayOfJP_ProductSupplier implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_ProductSupplier[] $Supplier
     */
    protected $Supplier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ProductSupplier[]
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param JP_ProductSupplier[] $Supplier
     * @return ArrayOfJP_ProductSupplier
     */
    public function setSupplier(array $Supplier = null)
    {
      $this->Supplier = $Supplier;
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
      return isset($this->Supplier[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_ProductSupplier
     */
    public function offsetGet($offset)
    {
      return $this->Supplier[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_ProductSupplier $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Supplier[] = $value;
      } else {
        $this->Supplier[$offset] = $value;
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
      unset($this->Supplier[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_ProductSupplier Return the current element
     */
    public function current()
    {
      return current($this->Supplier);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Supplier);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Supplier);
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
      reset($this->Supplier);
    }

    /**
     * Countable implementation
     *
     * @return JP_ProductSupplier Return count of elements
     */
    public function count()
    {
      return count($this->Supplier);
    }

}
