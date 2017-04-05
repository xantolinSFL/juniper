<?php

namespace Juniper\Webservice;

class ArrayOfJP_MeetingPointsZone implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_MeetingPointsZone[] $MeetingPointZone
     */
    protected $MeetingPointZone = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_MeetingPointsZone[]
     */
    public function getMeetingPointZone()
    {
      return $this->MeetingPointZone;
    }

    /**
     * @param JP_MeetingPointsZone[] $MeetingPointZone
     * @return ArrayOfJP_MeetingPointsZone
     */
    public function setMeetingPointZone(array $MeetingPointZone = null)
    {
      $this->MeetingPointZone = $MeetingPointZone;
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
      return isset($this->MeetingPointZone[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_MeetingPointsZone
     */
    public function offsetGet($offset)
    {
      return $this->MeetingPointZone[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_MeetingPointsZone $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MeetingPointZone[] = $value;
      } else {
        $this->MeetingPointZone[$offset] = $value;
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
      unset($this->MeetingPointZone[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_MeetingPointsZone Return the current element
     */
    public function current()
    {
      return current($this->MeetingPointZone);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MeetingPointZone);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MeetingPointZone);
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
      reset($this->MeetingPointZone);
    }

    /**
     * Countable implementation
     *
     * @return JP_MeetingPointsZone Return count of elements
     */
    public function count()
    {
      return count($this->MeetingPointZone);
    }

}
