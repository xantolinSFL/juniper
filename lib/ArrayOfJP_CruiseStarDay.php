<?php

class ArrayOfJP_CruiseStarDay implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CruiseStarDay[] $StarDay
     */
    protected $StarDay = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseStarDay[]
     */
    public function getStarDay()
    {
      return $this->StarDay;
    }

    /**
     * @param JP_CruiseStarDay[] $StarDay
     * @return ArrayOfJP_CruiseStarDay
     */
    public function setStarDay(array $StarDay = null)
    {
      $this->StarDay = $StarDay;
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
      return isset($this->StarDay[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CruiseStarDay
     */
    public function offsetGet($offset)
    {
      return $this->StarDay[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CruiseStarDay $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->StarDay[] = $value;
      } else {
        $this->StarDay[$offset] = $value;
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
      unset($this->StarDay[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CruiseStarDay Return the current element
     */
    public function current()
    {
      return current($this->StarDay);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->StarDay);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->StarDay);
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
      reset($this->StarDay);
    }

    /**
     * Countable implementation
     *
     * @return JP_CruiseStarDay Return count of elements
     */
    public function count()
    {
      return count($this->StarDay);
    }

}
