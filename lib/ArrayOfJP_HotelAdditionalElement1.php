<?php

class ArrayOfJP_HotelAdditionalElement1 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_HotelAdditionalElement[] $HotelOffer
     */
    protected $HotelOffer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelAdditionalElement[]
     */
    public function getHotelOffer()
    {
      return $this->HotelOffer;
    }

    /**
     * @param JP_HotelAdditionalElement[] $HotelOffer
     * @return ArrayOfJP_HotelAdditionalElement1
     */
    public function setHotelOffer(array $HotelOffer = null)
    {
      $this->HotelOffer = $HotelOffer;
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
      return isset($this->HotelOffer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_HotelAdditionalElement
     */
    public function offsetGet($offset)
    {
      return $this->HotelOffer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_HotelAdditionalElement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->HotelOffer[] = $value;
      } else {
        $this->HotelOffer[$offset] = $value;
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
      unset($this->HotelOffer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_HotelAdditionalElement Return the current element
     */
    public function current()
    {
      return current($this->HotelOffer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HotelOffer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HotelOffer);
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
      reset($this->HotelOffer);
    }

    /**
     * Countable implementation
     *
     * @return JP_HotelAdditionalElement Return count of elements
     */
    public function count()
    {
      return count($this->HotelOffer);
    }

}
