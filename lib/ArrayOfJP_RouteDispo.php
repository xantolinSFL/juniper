<?php

class ArrayOfJP_RouteDispo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_RouteDispo[] $Route
     */
    protected $Route = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RouteDispo[]
     */
    public function getRoute()
    {
      return $this->Route;
    }

    /**
     * @param JP_RouteDispo[] $Route
     * @return ArrayOfJP_RouteDispo
     */
    public function setRoute(array $Route = null)
    {
      $this->Route = $Route;
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
      return isset($this->Route[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_RouteDispo
     */
    public function offsetGet($offset)
    {
      return $this->Route[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_RouteDispo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Route[] = $value;
      } else {
        $this->Route[$offset] = $value;
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
      unset($this->Route[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_RouteDispo Return the current element
     */
    public function current()
    {
      return current($this->Route);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Route);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Route);
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
      reset($this->Route);
    }

    /**
     * Countable implementation
     *
     * @return JP_RouteDispo Return count of elements
     */
    public function count()
    {
      return count($this->Route);
    }

}
