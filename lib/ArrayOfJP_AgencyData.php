<?php

class ArrayOfJP_AgencyData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_AgencyData[] $AgencyData
     */
    protected $AgencyData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_AgencyData[]
     */
    public function getAgencyData()
    {
      return $this->AgencyData;
    }

    /**
     * @param JP_AgencyData[] $AgencyData
     * @return ArrayOfJP_AgencyData
     */
    public function setAgencyData(array $AgencyData = null)
    {
      $this->AgencyData = $AgencyData;
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
      return isset($this->AgencyData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_AgencyData
     */
    public function offsetGet($offset)
    {
      return $this->AgencyData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_AgencyData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AgencyData[] = $value;
      } else {
        $this->AgencyData[$offset] = $value;
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
      unset($this->AgencyData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_AgencyData Return the current element
     */
    public function current()
    {
      return current($this->AgencyData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AgencyData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AgencyData);
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
      reset($this->AgencyData);
    }

    /**
     * Countable implementation
     *
     * @return JP_AgencyData Return count of elements
     */
    public function count()
    {
      return count($this->AgencyData);
    }

}
