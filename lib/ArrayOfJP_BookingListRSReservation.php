<?php

class ArrayOfJP_BookingListRSReservation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Reservation[] $Reservation
     */
    protected $Reservation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Reservation[]
     */
    public function getReservation()
    {
      return $this->Reservation;
    }

    /**
     * @param Reservation[] $Reservation
     * @return ArrayOfJP_BookingListRSReservation
     */
    public function setReservation(array $Reservation = null)
    {
      $this->Reservation = $Reservation;
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
      return isset($this->Reservation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Reservation
     */
    public function offsetGet($offset)
    {
      return $this->Reservation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Reservation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Reservation[] = $value;
      } else {
        $this->Reservation[$offset] = $value;
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
      unset($this->Reservation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Reservation Return the current element
     */
    public function current()
    {
      return current($this->Reservation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Reservation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Reservation);
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
      reset($this->Reservation);
    }

    /**
     * Countable implementation
     *
     * @return Reservation Return count of elements
     */
    public function count()
    {
      return count($this->Reservation);
    }

}
