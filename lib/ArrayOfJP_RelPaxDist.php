<?php

class ArrayOfJP_RelPaxDist implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_RelPaxDist[] $RelPaxDist
     */
    protected $RelPaxDist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RelPaxDist[]
     */
    public function getRelPaxDist()
    {
      return $this->RelPaxDist;
    }

    /**
     * @param JP_RelPaxDist[] $RelPaxDist
     * @return ArrayOfJP_RelPaxDist
     */
    public function setRelPaxDist(array $RelPaxDist = null)
    {
      $this->RelPaxDist = $RelPaxDist;
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
      return isset($this->RelPaxDist[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_RelPaxDist
     */
    public function offsetGet($offset)
    {
      return $this->RelPaxDist[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_RelPaxDist $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RelPaxDist[] = $value;
      } else {
        $this->RelPaxDist[$offset] = $value;
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
      unset($this->RelPaxDist[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_RelPaxDist Return the current element
     */
    public function current()
    {
      return current($this->RelPaxDist);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RelPaxDist);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RelPaxDist);
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
      reset($this->RelPaxDist);
    }

    /**
     * Countable implementation
     *
     * @return JP_RelPaxDist Return count of elements
     */
    public function count()
    {
      return count($this->RelPaxDist);
    }

}
