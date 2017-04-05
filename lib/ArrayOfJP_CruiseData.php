<?php

namespace Juniper\Webservice;

class ArrayOfJP_CruiseData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CruiseData[] $CruiseData
     */
    protected $CruiseData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseData[]
     */
    public function getCruiseData()
    {
      return $this->CruiseData;
    }

    /**
     * @param JP_CruiseData[] $CruiseData
     * @return ArrayOfJP_CruiseData
     */
    public function setCruiseData(array $CruiseData = null)
    {
      $this->CruiseData = $CruiseData;
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
      return isset($this->CruiseData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CruiseData
     */
    public function offsetGet($offset)
    {
      return $this->CruiseData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CruiseData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CruiseData[] = $value;
      } else {
        $this->CruiseData[$offset] = $value;
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
      unset($this->CruiseData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CruiseData Return the current element
     */
    public function current()
    {
      return current($this->CruiseData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CruiseData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CruiseData);
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
      reset($this->CruiseData);
    }

    /**
     * Countable implementation
     *
     * @return JP_CruiseData Return count of elements
     */
    public function count()
    {
      return count($this->CruiseData);
    }

}
