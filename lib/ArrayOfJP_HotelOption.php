<?php

class ArrayOfJP_HotelOption implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_HotelOption[] $HotelOption
     */
    protected $HotelOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelOption[]
     */
    public function getHotelOption()
    {
      return $this->HotelOption;
    }

    /**
     * @param JP_HotelOption[] $HotelOption
     * @return ArrayOfJP_HotelOption
     */
    public function setHotelOption(array $HotelOption = null)
    {
      $this->HotelOption = $HotelOption;
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
      return isset($this->HotelOption[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_HotelOption
     */
    public function offsetGet($offset)
    {
      return $this->HotelOption[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_HotelOption $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->HotelOption[] = $value;
      } else {
        $this->HotelOption[$offset] = $value;
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
      unset($this->HotelOption[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_HotelOption Return the current element
     */
    public function current()
    {
      return current($this->HotelOption);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HotelOption);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HotelOption);
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
      reset($this->HotelOption);
    }

    /**
     * Countable implementation
     *
     * @return JP_HotelOption Return count of elements
     */
    public function count()
    {
      return count($this->HotelOption);
    }

}
