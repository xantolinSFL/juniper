<?php

class ArrayOfJP_HotelResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_HotelResult[] $HotelResult
     */
    protected $HotelResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelResult[]
     */
    public function getHotelResult()
    {
      return $this->HotelResult;
    }

    /**
     * @param JP_HotelResult[] $HotelResult
     * @return ArrayOfJP_HotelResult
     */
    public function setHotelResult(array $HotelResult = null)
    {
      $this->HotelResult = $HotelResult;
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
      return isset($this->HotelResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_HotelResult
     */
    public function offsetGet($offset)
    {
      return $this->HotelResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_HotelResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->HotelResult[] = $value;
      } else {
        $this->HotelResult[$offset] = $value;
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
      unset($this->HotelResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_HotelResult Return the current element
     */
    public function current()
    {
      return current($this->HotelResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HotelResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HotelResult);
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
      reset($this->HotelResult);
    }

    /**
     * Countable implementation
     *
     * @return JP_HotelResult Return count of elements
     */
    public function count()
    {
      return count($this->HotelResult);
    }

}
