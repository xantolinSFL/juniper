<?php

class ArrayOfJP_Hour implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Hour[] $Hour
     */
    protected $Hour = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Hour[]
     */
    public function getHour()
    {
      return $this->Hour;
    }

    /**
     * @param JP_Hour[] $Hour
     * @return ArrayOfJP_Hour
     */
    public function setHour(array $Hour = null)
    {
      $this->Hour = $Hour;
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
      return isset($this->Hour[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Hour
     */
    public function offsetGet($offset)
    {
      return $this->Hour[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Hour $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Hour[] = $value;
      } else {
        $this->Hour[$offset] = $value;
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
      unset($this->Hour[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Hour Return the current element
     */
    public function current()
    {
      return current($this->Hour);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Hour);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Hour);
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
      reset($this->Hour);
    }

    /**
     * Countable implementation
     *
     * @return JP_Hour Return count of elements
     */
    public function count()
    {
      return count($this->Hour);
    }

}
