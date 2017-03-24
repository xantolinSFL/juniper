<?php

class ArrayOfJP_ImageLong implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_ImageLong[] $Image
     */
    protected $Image = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ImageLong[]
     */
    public function getImage()
    {
      return $this->Image;
    }

    /**
     * @param JP_ImageLong[] $Image
     * @return ArrayOfJP_ImageLong
     */
    public function setImage(array $Image = null)
    {
      $this->Image = $Image;
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
      return isset($this->Image[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_ImageLong
     */
    public function offsetGet($offset)
    {
      return $this->Image[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_ImageLong $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Image[] = $value;
      } else {
        $this->Image[$offset] = $value;
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
      unset($this->Image[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_ImageLong Return the current element
     */
    public function current()
    {
      return current($this->Image);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Image);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Image);
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
      reset($this->Image);
    }

    /**
     * Countable implementation
     *
     * @return JP_ImageLong Return count of elements
     */
    public function count()
    {
      return count($this->Image);
    }

}
