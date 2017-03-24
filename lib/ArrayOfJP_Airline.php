<?php

class ArrayOfJP_Airline implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Airline[] $Airline
     */
    protected $Airline = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Airline[]
     */
    public function getAirline()
    {
      return $this->Airline;
    }

    /**
     * @param JP_Airline[] $Airline
     * @return ArrayOfJP_Airline
     */
    public function setAirline(array $Airline = null)
    {
      $this->Airline = $Airline;
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
      return isset($this->Airline[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Airline
     */
    public function offsetGet($offset)
    {
      return $this->Airline[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Airline $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Airline[] = $value;
      } else {
        $this->Airline[$offset] = $value;
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
      unset($this->Airline[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Airline Return the current element
     */
    public function current()
    {
      return current($this->Airline);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Airline);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Airline);
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
      reset($this->Airline);
    }

    /**
     * Countable implementation
     *
     * @return JP_Airline Return count of elements
     */
    public function count()
    {
      return count($this->Airline);
    }

}
