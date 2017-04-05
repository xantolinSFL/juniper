<?php

namespace Juniper\Webservice;

class ArrayOfJPSOAP_HotelInventoryRoomType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_HotelInventoryRoomType[] $RoomType
     */
    protected $RoomType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_HotelInventoryRoomType[]
     */
    public function getRoomType()
    {
      return $this->RoomType;
    }

    /**
     * @param JPSOAP_HotelInventoryRoomType[] $RoomType
     * @return ArrayOfJPSOAP_HotelInventoryRoomType
     */
    public function setRoomType(array $RoomType = null)
    {
      $this->RoomType = $RoomType;
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
      return isset($this->RoomType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_HotelInventoryRoomType
     */
    public function offsetGet($offset)
    {
      return $this->RoomType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_HotelInventoryRoomType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RoomType[] = $value;
      } else {
        $this->RoomType[$offset] = $value;
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
      unset($this->RoomType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_HotelInventoryRoomType Return the current element
     */
    public function current()
    {
      return current($this->RoomType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoomType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoomType);
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
      reset($this->RoomType);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_HotelInventoryRoomType Return count of elements
     */
    public function count()
    {
      return count($this->RoomType);
    }

}
