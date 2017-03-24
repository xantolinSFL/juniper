<?php

class ArrayOfJP_ItemHotelRoom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_ItemHotelRoom[] $HotelRoom
     */
    protected $HotelRoom = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ItemHotelRoom[]
     */
    public function getHotelRoom()
    {
      return $this->HotelRoom;
    }

    /**
     * @param JP_ItemHotelRoom[] $HotelRoom
     * @return ArrayOfJP_ItemHotelRoom
     */
    public function setHotelRoom(array $HotelRoom = null)
    {
      $this->HotelRoom = $HotelRoom;
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
      return isset($this->HotelRoom[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_ItemHotelRoom
     */
    public function offsetGet($offset)
    {
      return $this->HotelRoom[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_ItemHotelRoom $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->HotelRoom[] = $value;
      } else {
        $this->HotelRoom[$offset] = $value;
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
      unset($this->HotelRoom[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_ItemHotelRoom Return the current element
     */
    public function current()
    {
      return current($this->HotelRoom);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HotelRoom);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HotelRoom);
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
      reset($this->HotelRoom);
    }

    /**
     * Countable implementation
     *
     * @return JP_ItemHotelRoom Return count of elements
     */
    public function count()
    {
      return count($this->HotelRoom);
    }

}
