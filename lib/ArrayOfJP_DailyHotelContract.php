<?php

class ArrayOfJP_DailyHotelContract implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_DailyHotelContract[] $DailyContract
     */
    protected $DailyContract = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_DailyHotelContract[]
     */
    public function getDailyContract()
    {
      return $this->DailyContract;
    }

    /**
     * @param JP_DailyHotelContract[] $DailyContract
     * @return ArrayOfJP_DailyHotelContract
     */
    public function setDailyContract(array $DailyContract = null)
    {
      $this->DailyContract = $DailyContract;
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
      return isset($this->DailyContract[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_DailyHotelContract
     */
    public function offsetGet($offset)
    {
      return $this->DailyContract[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_DailyHotelContract $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DailyContract[] = $value;
      } else {
        $this->DailyContract[$offset] = $value;
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
      unset($this->DailyContract[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_DailyHotelContract Return the current element
     */
    public function current()
    {
      return current($this->DailyContract);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DailyContract);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DailyContract);
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
      reset($this->DailyContract);
    }

    /**
     * Countable implementation
     *
     * @return JP_DailyHotelContract Return count of elements
     */
    public function count()
    {
      return count($this->DailyContract);
    }

}
