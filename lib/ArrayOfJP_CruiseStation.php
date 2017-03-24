<?php

class ArrayOfJP_CruiseStation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CruiseStation[] $Station
     */
    protected $Station = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseStation[]
     */
    public function getStation()
    {
      return $this->Station;
    }

    /**
     * @param JP_CruiseStation[] $Station
     * @return ArrayOfJP_CruiseStation
     */
    public function setStation(array $Station = null)
    {
      $this->Station = $Station;
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
      return isset($this->Station[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CruiseStation
     */
    public function offsetGet($offset)
    {
      return $this->Station[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CruiseStation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Station[] = $value;
      } else {
        $this->Station[$offset] = $value;
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
      unset($this->Station[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CruiseStation Return the current element
     */
    public function current()
    {
      return current($this->Station);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Station);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Station);
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
      reset($this->Station);
    }

    /**
     * Countable implementation
     *
     * @return JP_CruiseStation Return count of elements
     */
    public function count()
    {
      return count($this->Station);
    }

}
