<?php

class ArrayOfJP_Equipment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Equipment[] $Equipment
     */
    protected $Equipment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Equipment[]
     */
    public function getEquipment()
    {
      return $this->Equipment;
    }

    /**
     * @param JP_Equipment[] $Equipment
     * @return ArrayOfJP_Equipment
     */
    public function setEquipment(array $Equipment = null)
    {
      $this->Equipment = $Equipment;
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
      return isset($this->Equipment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Equipment
     */
    public function offsetGet($offset)
    {
      return $this->Equipment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Equipment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Equipment[] = $value;
      } else {
        $this->Equipment[$offset] = $value;
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
      unset($this->Equipment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Equipment Return the current element
     */
    public function current()
    {
      return current($this->Equipment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Equipment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Equipment);
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
      reset($this->Equipment);
    }

    /**
     * Countable implementation
     *
     * @return JP_Equipment Return count of elements
     */
    public function count()
    {
      return count($this->Equipment);
    }

}
