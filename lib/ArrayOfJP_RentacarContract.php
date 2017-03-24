<?php

class ArrayOfJP_RentacarContract implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_RentacarContract[] $RentacarContract
     */
    protected $RentacarContract = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RentacarContract[]
     */
    public function getRentacarContract()
    {
      return $this->RentacarContract;
    }

    /**
     * @param JP_RentacarContract[] $RentacarContract
     * @return ArrayOfJP_RentacarContract
     */
    public function setRentacarContract(array $RentacarContract = null)
    {
      $this->RentacarContract = $RentacarContract;
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
      return isset($this->RentacarContract[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_RentacarContract
     */
    public function offsetGet($offset)
    {
      return $this->RentacarContract[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_RentacarContract $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RentacarContract[] = $value;
      } else {
        $this->RentacarContract[$offset] = $value;
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
      unset($this->RentacarContract[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_RentacarContract Return the current element
     */
    public function current()
    {
      return current($this->RentacarContract);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RentacarContract);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RentacarContract);
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
      reset($this->RentacarContract);
    }

    /**
     * Countable implementation
     *
     * @return JP_RentacarContract Return count of elements
     */
    public function count()
    {
      return count($this->RentacarContract);
    }

}
