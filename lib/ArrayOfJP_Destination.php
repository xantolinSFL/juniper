<?php

namespace Juniper\Webservice;

class ArrayOfJP_Destination implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Destination[] $Destination
     */
    protected $Destination = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Destination[]
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param JP_Destination[] $Destination
     * @return ArrayOfJP_Destination
     */
    public function setDestination(array $Destination = null)
    {
      $this->Destination = $Destination;
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
      return isset($this->Destination[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Destination
     */
    public function offsetGet($offset)
    {
      return $this->Destination[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Destination $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Destination[] = $value;
      } else {
        $this->Destination[$offset] = $value;
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
      unset($this->Destination[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Destination Return the current element
     */
    public function current()
    {
      return current($this->Destination);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Destination);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Destination);
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
      reset($this->Destination);
    }

    /**
     * Countable implementation
     *
     * @return JP_Destination Return count of elements
     */
    public function count()
    {
      return count($this->Destination);
    }

}
