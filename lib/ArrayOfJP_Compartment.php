<?php

namespace Juniper\Webservice;

class ArrayOfJP_Compartment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Compartment[] $Compartment
     */
    protected $Compartment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Compartment[]
     */
    public function getCompartment()
    {
      return $this->Compartment;
    }

    /**
     * @param JP_Compartment[] $Compartment
     * @return ArrayOfJP_Compartment
     */
    public function setCompartment(array $Compartment = null)
    {
      $this->Compartment = $Compartment;
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
      return isset($this->Compartment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Compartment
     */
    public function offsetGet($offset)
    {
      return $this->Compartment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Compartment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Compartment[] = $value;
      } else {
        $this->Compartment[$offset] = $value;
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
      unset($this->Compartment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Compartment Return the current element
     */
    public function current()
    {
      return current($this->Compartment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Compartment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Compartment);
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
      reset($this->Compartment);
    }

    /**
     * Countable implementation
     *
     * @return JP_Compartment Return count of elements
     */
    public function count()
    {
      return count($this->Compartment);
    }

}
