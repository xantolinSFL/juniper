<?php

namespace Juniper\Webservice;

class ArrayOfJP_HotelDailyContracts implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_HotelDailyContracts[] $DailyContracts
     */
    protected $DailyContracts = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelDailyContracts[]
     */
    public function getDailyContracts()
    {
      return $this->DailyContracts;
    }

    /**
     * @param JP_HotelDailyContracts[] $DailyContracts
     * @return ArrayOfJP_HotelDailyContracts
     */
    public function setDailyContracts(array $DailyContracts = null)
    {
      $this->DailyContracts = $DailyContracts;
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
      return isset($this->DailyContracts[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_HotelDailyContracts
     */
    public function offsetGet($offset)
    {
      return $this->DailyContracts[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_HotelDailyContracts $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DailyContracts[] = $value;
      } else {
        $this->DailyContracts[$offset] = $value;
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
      unset($this->DailyContracts[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_HotelDailyContracts Return the current element
     */
    public function current()
    {
      return current($this->DailyContracts);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DailyContracts);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DailyContracts);
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
      reset($this->DailyContracts);
    }

    /**
     * Countable implementation
     *
     * @return JP_HotelDailyContracts Return count of elements
     */
    public function count()
    {
      return count($this->DailyContracts);
    }

}
