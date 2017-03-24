<?php

class ArrayOfJP_Email implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Email[] $Email
     */
    protected $Email = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Email[]
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param JP_Email[] $Email
     * @return ArrayOfJP_Email
     */
    public function setEmail(array $Email = null)
    {
      $this->Email = $Email;
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
      return isset($this->Email[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Email
     */
    public function offsetGet($offset)
    {
      return $this->Email[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Email $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Email[] = $value;
      } else {
        $this->Email[$offset] = $value;
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
      unset($this->Email[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Email Return the current element
     */
    public function current()
    {
      return current($this->Email);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Email);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Email);
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
      reset($this->Email);
    }

    /**
     * Countable implementation
     *
     * @return JP_Email Return count of elements
     */
    public function count()
    {
      return count($this->Email);
    }

}
