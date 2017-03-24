<?php

class ArrayOfJP_PropertyType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_PropertyType[] $PropertyType
     */
    protected $PropertyType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PropertyType[]
     */
    public function getPropertyType()
    {
      return $this->PropertyType;
    }

    /**
     * @param JP_PropertyType[] $PropertyType
     * @return ArrayOfJP_PropertyType
     */
    public function setPropertyType(array $PropertyType = null)
    {
      $this->PropertyType = $PropertyType;
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
      return isset($this->PropertyType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_PropertyType
     */
    public function offsetGet($offset)
    {
      return $this->PropertyType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_PropertyType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PropertyType[] = $value;
      } else {
        $this->PropertyType[$offset] = $value;
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
      unset($this->PropertyType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_PropertyType Return the current element
     */
    public function current()
    {
      return current($this->PropertyType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PropertyType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PropertyType);
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
      reset($this->PropertyType);
    }

    /**
     * Countable implementation
     *
     * @return JP_PropertyType Return count of elements
     */
    public function count()
    {
      return count($this->PropertyType);
    }

}
