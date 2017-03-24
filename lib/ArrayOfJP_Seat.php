<?php

class ArrayOfJP_Seat implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Seat[] $Seat
     */
    protected $Seat = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Seat[]
     */
    public function getSeat()
    {
      return $this->Seat;
    }

    /**
     * @param JP_Seat[] $Seat
     * @return ArrayOfJP_Seat
     */
    public function setSeat(array $Seat = null)
    {
      $this->Seat = $Seat;
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
      return isset($this->Seat[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Seat
     */
    public function offsetGet($offset)
    {
      return $this->Seat[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Seat $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Seat[] = $value;
      } else {
        $this->Seat[$offset] = $value;
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
      unset($this->Seat[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Seat Return the current element
     */
    public function current()
    {
      return current($this->Seat);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Seat);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Seat);
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
      reset($this->Seat);
    }

    /**
     * Countable implementation
     *
     * @return JP_Seat Return count of elements
     */
    public function count()
    {
      return count($this->Seat);
    }

}
