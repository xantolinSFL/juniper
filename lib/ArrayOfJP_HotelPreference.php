<?php

namespace Juniper\Webservice;

class ArrayOfJP_HotelPreference implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_HotelPreference[] $Preference
     */
    protected $Preference = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelPreference[]
     */
    public function getPreference()
    {
      return $this->Preference;
    }

    /**
     * @param JP_HotelPreference[] $Preference
     * @return ArrayOfJP_HotelPreference
     */
    public function setPreference(array $Preference = null)
    {
      $this->Preference = $Preference;
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
      return isset($this->Preference[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_HotelPreference
     */
    public function offsetGet($offset)
    {
      return $this->Preference[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_HotelPreference $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Preference[] = $value;
      } else {
        $this->Preference[$offset] = $value;
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
      unset($this->Preference[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_HotelPreference Return the current element
     */
    public function current()
    {
      return current($this->Preference);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Preference);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Preference);
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
      reset($this->Preference);
    }

    /**
     * Countable implementation
     *
     * @return JP_HotelPreference Return count of elements
     */
    public function count()
    {
      return count($this->Preference);
    }

}
