<?php

class ArrayOfJP_CruiseSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CruiseSegment[] $Segment
     */
    protected $Segment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseSegment[]
     */
    public function getSegment()
    {
      return $this->Segment;
    }

    /**
     * @param JP_CruiseSegment[] $Segment
     * @return ArrayOfJP_CruiseSegment
     */
    public function setSegment(array $Segment = null)
    {
      $this->Segment = $Segment;
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
      return isset($this->Segment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CruiseSegment
     */
    public function offsetGet($offset)
    {
      return $this->Segment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CruiseSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Segment[] = $value;
      } else {
        $this->Segment[$offset] = $value;
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
      unset($this->Segment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CruiseSegment Return the current element
     */
    public function current()
    {
      return current($this->Segment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Segment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Segment);
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
      reset($this->Segment);
    }

    /**
     * Countable implementation
     *
     * @return JP_CruiseSegment Return count of elements
     */
    public function count()
    {
      return count($this->Segment);
    }

}
