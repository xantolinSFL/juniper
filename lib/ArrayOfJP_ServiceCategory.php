<?php

class ArrayOfJP_ServiceCategory implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_ServiceCategory[] $ServiceCategory
     */
    protected $ServiceCategory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ServiceCategory[]
     */
    public function getServiceCategory()
    {
      return $this->ServiceCategory;
    }

    /**
     * @param JP_ServiceCategory[] $ServiceCategory
     * @return ArrayOfJP_ServiceCategory
     */
    public function setServiceCategory(array $ServiceCategory = null)
    {
      $this->ServiceCategory = $ServiceCategory;
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
      return isset($this->ServiceCategory[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_ServiceCategory
     */
    public function offsetGet($offset)
    {
      return $this->ServiceCategory[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_ServiceCategory $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ServiceCategory[] = $value;
      } else {
        $this->ServiceCategory[$offset] = $value;
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
      unset($this->ServiceCategory[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_ServiceCategory Return the current element
     */
    public function current()
    {
      return current($this->ServiceCategory);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceCategory);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceCategory);
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
      reset($this->ServiceCategory);
    }

    /**
     * Countable implementation
     *
     * @return JP_ServiceCategory Return count of elements
     */
    public function count()
    {
      return count($this->ServiceCategory);
    }

}
