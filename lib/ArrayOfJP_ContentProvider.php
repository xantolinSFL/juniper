<?php

class ArrayOfJP_ContentProvider implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_ContentProvider[] $ContentProvider
     */
    protected $ContentProvider = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ContentProvider[]
     */
    public function getContentProvider()
    {
      return $this->ContentProvider;
    }

    /**
     * @param JP_ContentProvider[] $ContentProvider
     * @return ArrayOfJP_ContentProvider
     */
    public function setContentProvider(array $ContentProvider = null)
    {
      $this->ContentProvider = $ContentProvider;
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
      return isset($this->ContentProvider[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_ContentProvider
     */
    public function offsetGet($offset)
    {
      return $this->ContentProvider[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_ContentProvider $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ContentProvider[] = $value;
      } else {
        $this->ContentProvider[$offset] = $value;
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
      unset($this->ContentProvider[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_ContentProvider Return the current element
     */
    public function current()
    {
      return current($this->ContentProvider);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ContentProvider);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ContentProvider);
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
      reset($this->ContentProvider);
    }

    /**
     * Countable implementation
     *
     * @return JP_ContentProvider Return count of elements
     */
    public function count()
    {
      return count($this->ContentProvider);
    }

}
