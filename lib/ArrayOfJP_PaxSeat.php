<?php

class ArrayOfJP_PaxSeat implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_PaxSeat[] $PaxSeat
     */
    protected $PaxSeat = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PaxSeat[]
     */
    public function getPaxSeat()
    {
      return $this->PaxSeat;
    }

    /**
     * @param JP_PaxSeat[] $PaxSeat
     * @return ArrayOfJP_PaxSeat
     */
    public function setPaxSeat(array $PaxSeat = null)
    {
      $this->PaxSeat = $PaxSeat;
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
      return isset($this->PaxSeat[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_PaxSeat
     */
    public function offsetGet($offset)
    {
      return $this->PaxSeat[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_PaxSeat $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PaxSeat[] = $value;
      } else {
        $this->PaxSeat[$offset] = $value;
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
      unset($this->PaxSeat[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_PaxSeat Return the current element
     */
    public function current()
    {
      return current($this->PaxSeat);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PaxSeat);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PaxSeat);
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
      reset($this->PaxSeat);
    }

    /**
     * Countable implementation
     *
     * @return JP_PaxSeat Return count of elements
     */
    public function count()
    {
      return count($this->PaxSeat);
    }

}
