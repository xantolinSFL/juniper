<?php

class ArrayOfJP_CruiseComponent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CruiseComponent[] $Component
     */
    protected $Component = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseComponent[]
     */
    public function getComponent()
    {
      return $this->Component;
    }

    /**
     * @param JP_CruiseComponent[] $Component
     * @return ArrayOfJP_CruiseComponent
     */
    public function setComponent(array $Component = null)
    {
      $this->Component = $Component;
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
      return isset($this->Component[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CruiseComponent
     */
    public function offsetGet($offset)
    {
      return $this->Component[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CruiseComponent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Component[] = $value;
      } else {
        $this->Component[$offset] = $value;
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
      unset($this->Component[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CruiseComponent Return the current element
     */
    public function current()
    {
      return current($this->Component);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Component);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Component);
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
      reset($this->Component);
    }

    /**
     * Countable implementation
     *
     * @return JP_CruiseComponent Return count of elements
     */
    public function count()
    {
      return count($this->Component);
    }

}
