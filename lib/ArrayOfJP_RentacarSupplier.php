<?php

class ArrayOfJP_RentacarSupplier implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_RentacarSupplier[] $RentacarSupplier
     */
    protected $RentacarSupplier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RentacarSupplier[]
     */
    public function getRentacarSupplier()
    {
      return $this->RentacarSupplier;
    }

    /**
     * @param JP_RentacarSupplier[] $RentacarSupplier
     * @return ArrayOfJP_RentacarSupplier
     */
    public function setRentacarSupplier(array $RentacarSupplier = null)
    {
      $this->RentacarSupplier = $RentacarSupplier;
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
      return isset($this->RentacarSupplier[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_RentacarSupplier
     */
    public function offsetGet($offset)
    {
      return $this->RentacarSupplier[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_RentacarSupplier $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RentacarSupplier[] = $value;
      } else {
        $this->RentacarSupplier[$offset] = $value;
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
      unset($this->RentacarSupplier[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_RentacarSupplier Return the current element
     */
    public function current()
    {
      return current($this->RentacarSupplier);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RentacarSupplier);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RentacarSupplier);
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
      reset($this->RentacarSupplier);
    }

    /**
     * Countable implementation
     *
     * @return JP_RentacarSupplier Return count of elements
     */
    public function count()
    {
      return count($this->RentacarSupplier);
    }

}
