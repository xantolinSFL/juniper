<?php

class ArrayOfJP_RequiredField implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_RequiredField[] $Field
     */
    protected $Field = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RequiredField[]
     */
    public function getField()
    {
      return $this->Field;
    }

    /**
     * @param JP_RequiredField[] $Field
     * @return ArrayOfJP_RequiredField
     */
    public function setField(array $Field = null)
    {
      $this->Field = $Field;
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
      return isset($this->Field[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_RequiredField
     */
    public function offsetGet($offset)
    {
      return $this->Field[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_RequiredField $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Field[] = $value;
      } else {
        $this->Field[$offset] = $value;
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
      unset($this->Field[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_RequiredField Return the current element
     */
    public function current()
    {
      return current($this->Field);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Field);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Field);
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
      reset($this->Field);
    }

    /**
     * Countable implementation
     *
     * @return JP_RequiredField Return count of elements
     */
    public function count()
    {
      return count($this->Field);
    }

}
