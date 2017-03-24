<?php

class ArrayOfJP_Day implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Day[] $Day
     */
    protected $Day = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Day[]
     */
    public function getDay()
    {
      return $this->Day;
    }

    /**
     * @param JP_Day[] $Day
     * @return ArrayOfJP_Day
     */
    public function setDay(array $Day = null)
    {
      $this->Day = $Day;
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
      return isset($this->Day[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Day
     */
    public function offsetGet($offset)
    {
      return $this->Day[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Day $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Day[] = $value;
      } else {
        $this->Day[$offset] = $value;
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
      unset($this->Day[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Day Return the current element
     */
    public function current()
    {
      return current($this->Day);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Day);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Day);
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
      reset($this->Day);
    }

    /**
     * Countable implementation
     *
     * @return JP_Day Return count of elements
     */
    public function count()
    {
      return count($this->Day);
    }

}
