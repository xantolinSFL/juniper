<?php

class ArrayOfJP_SupplementHotelType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_SupplementHotelType[] $SupplementType
     */
    protected $SupplementType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SupplementHotelType[]
     */
    public function getSupplementType()
    {
      return $this->SupplementType;
    }

    /**
     * @param JP_SupplementHotelType[] $SupplementType
     * @return ArrayOfJP_SupplementHotelType
     */
    public function setSupplementType(array $SupplementType = null)
    {
      $this->SupplementType = $SupplementType;
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
      return isset($this->SupplementType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_SupplementHotelType
     */
    public function offsetGet($offset)
    {
      return $this->SupplementType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_SupplementHotelType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SupplementType[] = $value;
      } else {
        $this->SupplementType[$offset] = $value;
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
      unset($this->SupplementType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_SupplementHotelType Return the current element
     */
    public function current()
    {
      return current($this->SupplementType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SupplementType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SupplementType);
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
      reset($this->SupplementType);
    }

    /**
     * Countable implementation
     *
     * @return JP_SupplementHotelType Return count of elements
     */
    public function count()
    {
      return count($this->SupplementType);
    }

}
