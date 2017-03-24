<?php

class ArrayOfJP_RentacarLocationSimpleContent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_RentacarLocationSimpleContent[] $RentacarLocation
     */
    protected $RentacarLocation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RentacarLocationSimpleContent[]
     */
    public function getRentacarLocation()
    {
      return $this->RentacarLocation;
    }

    /**
     * @param JP_RentacarLocationSimpleContent[] $RentacarLocation
     * @return ArrayOfJP_RentacarLocationSimpleContent
     */
    public function setRentacarLocation(array $RentacarLocation = null)
    {
      $this->RentacarLocation = $RentacarLocation;
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
      return isset($this->RentacarLocation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_RentacarLocationSimpleContent
     */
    public function offsetGet($offset)
    {
      return $this->RentacarLocation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_RentacarLocationSimpleContent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RentacarLocation[] = $value;
      } else {
        $this->RentacarLocation[$offset] = $value;
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
      unset($this->RentacarLocation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_RentacarLocationSimpleContent Return the current element
     */
    public function current()
    {
      return current($this->RentacarLocation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RentacarLocation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RentacarLocation);
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
      reset($this->RentacarLocation);
    }

    /**
     * Countable implementation
     *
     * @return JP_RentacarLocationSimpleContent Return count of elements
     */
    public function count()
    {
      return count($this->RentacarLocation);
    }

}
