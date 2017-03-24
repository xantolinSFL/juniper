<?php

class ArrayOfJP_Zone implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Zone[] $Zone
     */
    protected $Zone = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Zone[]
     */
    public function getZone()
    {
      return $this->Zone;
    }

    /**
     * @param JP_Zone[] $Zone
     * @return ArrayOfJP_Zone
     */
    public function setZone(array $Zone = null)
    {
      $this->Zone = $Zone;
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
      return isset($this->Zone[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Zone
     */
    public function offsetGet($offset)
    {
      return $this->Zone[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Zone $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Zone[] = $value;
      } else {
        $this->Zone[$offset] = $value;
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
      unset($this->Zone[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Zone Return the current element
     */
    public function current()
    {
      return current($this->Zone);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Zone);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Zone);
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
      reset($this->Zone);
    }

    /**
     * Countable implementation
     *
     * @return JP_Zone Return count of elements
     */
    public function count()
    {
      return count($this->Zone);
    }

}
