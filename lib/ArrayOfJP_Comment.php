<?php

class ArrayOfJP_Comment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Comment[] $Comment
     */
    protected $Comment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Comment[]
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param JP_Comment[] $Comment
     * @return ArrayOfJP_Comment
     */
    public function setComment(array $Comment = null)
    {
      $this->Comment = $Comment;
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
      return isset($this->Comment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Comment
     */
    public function offsetGet($offset)
    {
      return $this->Comment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Comment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Comment[] = $value;
      } else {
        $this->Comment[$offset] = $value;
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
      unset($this->Comment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Comment Return the current element
     */
    public function current()
    {
      return current($this->Comment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Comment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Comment);
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
      reset($this->Comment);
    }

    /**
     * Countable implementation
     *
     * @return JP_Comment Return count of elements
     */
    public function count()
    {
      return count($this->Comment);
    }

}
