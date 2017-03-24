<?php

class ArrayOfJP_Feature implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Feature[] $Feature
     */
    protected $Feature = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Feature[]
     */
    public function getFeature()
    {
      return $this->Feature;
    }

    /**
     * @param JP_Feature[] $Feature
     * @return ArrayOfJP_Feature
     */
    public function setFeature(array $Feature = null)
    {
      $this->Feature = $Feature;
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
      return isset($this->Feature[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Feature
     */
    public function offsetGet($offset)
    {
      return $this->Feature[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Feature $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Feature[] = $value;
      } else {
        $this->Feature[$offset] = $value;
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
      unset($this->Feature[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Feature Return the current element
     */
    public function current()
    {
      return current($this->Feature);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Feature);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Feature);
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
      reset($this->Feature);
    }

    /**
     * Countable implementation
     *
     * @return JP_Feature Return count of elements
     */
    public function count()
    {
      return count($this->Feature);
    }

}
