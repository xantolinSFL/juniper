<?php

class ArrayOfJP_Ship implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Ship[] $Ship
     */
    protected $Ship = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Ship[]
     */
    public function getShip()
    {
      return $this->Ship;
    }

    /**
     * @param JP_Ship[] $Ship
     * @return ArrayOfJP_Ship
     */
    public function setShip(array $Ship = null)
    {
      $this->Ship = $Ship;
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
      return isset($this->Ship[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Ship
     */
    public function offsetGet($offset)
    {
      return $this->Ship[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Ship $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Ship[] = $value;
      } else {
        $this->Ship[$offset] = $value;
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
      unset($this->Ship[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Ship Return the current element
     */
    public function current()
    {
      return current($this->Ship);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Ship);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Ship);
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
      reset($this->Ship);
    }

    /**
     * Countable implementation
     *
     * @return JP_Ship Return count of elements
     */
    public function count()
    {
      return count($this->Ship);
    }

}
