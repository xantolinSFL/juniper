<?php

class ArrayOfJP_CruiseSupplier implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CruiseSupplier[] $CruiseSupplier
     */
    protected $CruiseSupplier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseSupplier[]
     */
    public function getCruiseSupplier()
    {
      return $this->CruiseSupplier;
    }

    /**
     * @param JP_CruiseSupplier[] $CruiseSupplier
     * @return ArrayOfJP_CruiseSupplier
     */
    public function setCruiseSupplier(array $CruiseSupplier = null)
    {
      $this->CruiseSupplier = $CruiseSupplier;
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
      return isset($this->CruiseSupplier[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CruiseSupplier
     */
    public function offsetGet($offset)
    {
      return $this->CruiseSupplier[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CruiseSupplier $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CruiseSupplier[] = $value;
      } else {
        $this->CruiseSupplier[$offset] = $value;
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
      unset($this->CruiseSupplier[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CruiseSupplier Return the current element
     */
    public function current()
    {
      return current($this->CruiseSupplier);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CruiseSupplier);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CruiseSupplier);
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
      reset($this->CruiseSupplier);
    }

    /**
     * Countable implementation
     *
     * @return JP_CruiseSupplier Return count of elements
     */
    public function count()
    {
      return count($this->CruiseSupplier);
    }

}
