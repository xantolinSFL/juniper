<?php

class ArrayOfJPSOAP_Occupancy implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_Occupancy[] $Occupancy
     */
    protected $Occupancy = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_Occupancy[]
     */
    public function getOccupancy()
    {
      return $this->Occupancy;
    }

    /**
     * @param JPSOAP_Occupancy[] $Occupancy
     * @return ArrayOfJPSOAP_Occupancy
     */
    public function setOccupancy(array $Occupancy = null)
    {
      $this->Occupancy = $Occupancy;
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
      return isset($this->Occupancy[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_Occupancy
     */
    public function offsetGet($offset)
    {
      return $this->Occupancy[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_Occupancy $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Occupancy[] = $value;
      } else {
        $this->Occupancy[$offset] = $value;
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
      unset($this->Occupancy[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_Occupancy Return the current element
     */
    public function current()
    {
      return current($this->Occupancy);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Occupancy);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Occupancy);
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
      reset($this->Occupancy);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_Occupancy Return count of elements
     */
    public function count()
    {
      return count($this->Occupancy);
    }

}
