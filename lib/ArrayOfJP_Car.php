<?php

namespace Juniper\Webservice;

class ArrayOfJP_Car implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Car[] $Rentacar
     */
    protected $Rentacar = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Car[]
     */
    public function getRentacar()
    {
      return $this->Rentacar;
    }

    /**
     * @param JP_Car[] $Rentacar
     * @return ArrayOfJP_Car
     */
    public function setRentacar(array $Rentacar = null)
    {
      $this->Rentacar = $Rentacar;
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
      return isset($this->Rentacar[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Car
     */
    public function offsetGet($offset)
    {
      return $this->Rentacar[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Car $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Rentacar[] = $value;
      } else {
        $this->Rentacar[$offset] = $value;
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
      unset($this->Rentacar[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Car Return the current element
     */
    public function current()
    {
      return current($this->Rentacar);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Rentacar);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Rentacar);
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
      reset($this->Rentacar);
    }

    /**
     * Countable implementation
     *
     * @return JP_Car Return count of elements
     */
    public function count()
    {
      return count($this->Rentacar);
    }

}
