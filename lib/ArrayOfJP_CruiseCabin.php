<?php

class ArrayOfJP_CruiseCabin implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CruiseCabin[] $Cabin
     */
    protected $Cabin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseCabin[]
     */
    public function getCabin()
    {
      return $this->Cabin;
    }

    /**
     * @param JP_CruiseCabin[] $Cabin
     * @return ArrayOfJP_CruiseCabin
     */
    public function setCabin(array $Cabin = null)
    {
      $this->Cabin = $Cabin;
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
      return isset($this->Cabin[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CruiseCabin
     */
    public function offsetGet($offset)
    {
      return $this->Cabin[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CruiseCabin $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Cabin[] = $value;
      } else {
        $this->Cabin[$offset] = $value;
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
      unset($this->Cabin[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CruiseCabin Return the current element
     */
    public function current()
    {
      return current($this->Cabin);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Cabin);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Cabin);
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
      reset($this->Cabin);
    }

    /**
     * Countable implementation
     *
     * @return JP_CruiseCabin Return count of elements
     */
    public function count()
    {
      return count($this->Cabin);
    }

}
