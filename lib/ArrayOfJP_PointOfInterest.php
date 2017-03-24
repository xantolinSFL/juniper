<?php

class ArrayOfJP_PointOfInterest implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_PointOfInterest[] $PointOfInterest
     */
    protected $PointOfInterest = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PointOfInterest[]
     */
    public function getPointOfInterest()
    {
      return $this->PointOfInterest;
    }

    /**
     * @param JP_PointOfInterest[] $PointOfInterest
     * @return ArrayOfJP_PointOfInterest
     */
    public function setPointOfInterest(array $PointOfInterest = null)
    {
      $this->PointOfInterest = $PointOfInterest;
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
      return isset($this->PointOfInterest[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_PointOfInterest
     */
    public function offsetGet($offset)
    {
      return $this->PointOfInterest[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_PointOfInterest $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PointOfInterest[] = $value;
      } else {
        $this->PointOfInterest[$offset] = $value;
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
      unset($this->PointOfInterest[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_PointOfInterest Return the current element
     */
    public function current()
    {
      return current($this->PointOfInterest);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PointOfInterest);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PointOfInterest);
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
      reset($this->PointOfInterest);
    }

    /**
     * Countable implementation
     *
     * @return JP_PointOfInterest Return count of elements
     */
    public function count()
    {
      return count($this->PointOfInterest);
    }

}
