<?php

namespace Juniper\Webservice;

class ArrayOfJP_CruiseItinerary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CruiseItinerary[] $CruiseItinerary
     */
    protected $CruiseItinerary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseItinerary[]
     */
    public function getCruiseItinerary()
    {
      return $this->CruiseItinerary;
    }

    /**
     * @param JP_CruiseItinerary[] $CruiseItinerary
     * @return ArrayOfJP_CruiseItinerary
     */
    public function setCruiseItinerary(array $CruiseItinerary = null)
    {
      $this->CruiseItinerary = $CruiseItinerary;
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
      return isset($this->CruiseItinerary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CruiseItinerary
     */
    public function offsetGet($offset)
    {
      return $this->CruiseItinerary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CruiseItinerary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CruiseItinerary[] = $value;
      } else {
        $this->CruiseItinerary[$offset] = $value;
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
      unset($this->CruiseItinerary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CruiseItinerary Return the current element
     */
    public function current()
    {
      return current($this->CruiseItinerary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CruiseItinerary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CruiseItinerary);
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
      reset($this->CruiseItinerary);
    }

    /**
     * Countable implementation
     *
     * @return JP_CruiseItinerary Return count of elements
     */
    public function count()
    {
      return count($this->CruiseItinerary);
    }

}
