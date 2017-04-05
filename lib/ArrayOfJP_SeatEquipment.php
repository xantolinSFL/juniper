<?php

namespace Juniper\Webservice;

class ArrayOfJP_SeatEquipment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_SeatEquipment[] $SeatEquipment
     */
    protected $SeatEquipment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SeatEquipment[]
     */
    public function getSeatEquipment()
    {
      return $this->SeatEquipment;
    }

    /**
     * @param JP_SeatEquipment[] $SeatEquipment
     * @return ArrayOfJP_SeatEquipment
     */
    public function setSeatEquipment(array $SeatEquipment = null)
    {
      $this->SeatEquipment = $SeatEquipment;
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
      return isset($this->SeatEquipment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_SeatEquipment
     */
    public function offsetGet($offset)
    {
      return $this->SeatEquipment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_SeatEquipment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SeatEquipment[] = $value;
      } else {
        $this->SeatEquipment[$offset] = $value;
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
      unset($this->SeatEquipment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_SeatEquipment Return the current element
     */
    public function current()
    {
      return current($this->SeatEquipment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SeatEquipment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SeatEquipment);
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
      reset($this->SeatEquipment);
    }

    /**
     * Countable implementation
     *
     * @return JP_SeatEquipment Return count of elements
     */
    public function count()
    {
      return count($this->SeatEquipment);
    }

}
