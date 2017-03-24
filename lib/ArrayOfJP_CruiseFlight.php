<?php

class ArrayOfJP_CruiseFlight implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CruiseFlight[] $Flight
     */
    protected $Flight = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseFlight[]
     */
    public function getFlight()
    {
      return $this->Flight;
    }

    /**
     * @param JP_CruiseFlight[] $Flight
     * @return ArrayOfJP_CruiseFlight
     */
    public function setFlight(array $Flight = null)
    {
      $this->Flight = $Flight;
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
      return isset($this->Flight[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CruiseFlight
     */
    public function offsetGet($offset)
    {
      return $this->Flight[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CruiseFlight $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Flight[] = $value;
      } else {
        $this->Flight[$offset] = $value;
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
      unset($this->Flight[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CruiseFlight Return the current element
     */
    public function current()
    {
      return current($this->Flight);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Flight);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Flight);
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
      reset($this->Flight);
    }

    /**
     * Countable implementation
     *
     * @return JP_CruiseFlight Return count of elements
     */
    public function count()
    {
      return count($this->Flight);
    }

}
