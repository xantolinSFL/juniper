<?php

namespace Juniper\Webservice;

class ArrayOfJP_Origin implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Origin[] $Origin
     */
    protected $Origin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Origin[]
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param JP_Origin[] $Origin
     * @return ArrayOfJP_Origin
     */
    public function setOrigin(array $Origin = null)
    {
      $this->Origin = $Origin;
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
      return isset($this->Origin[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Origin
     */
    public function offsetGet($offset)
    {
      return $this->Origin[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Origin $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Origin[] = $value;
      } else {
        $this->Origin[$offset] = $value;
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
      unset($this->Origin[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Origin Return the current element
     */
    public function current()
    {
      return current($this->Origin);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Origin);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Origin);
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
      reset($this->Origin);
    }

    /**
     * Countable implementation
     *
     * @return JP_Origin Return count of elements
     */
    public function count()
    {
      return count($this->Origin);
    }

}
