<?php

class ArrayOfJP_PackageZone implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_PackageZone[] $PackageZone
     */
    protected $PackageZone = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PackageZone[]
     */
    public function getPackageZone()
    {
      return $this->PackageZone;
    }

    /**
     * @param JP_PackageZone[] $PackageZone
     * @return ArrayOfJP_PackageZone
     */
    public function setPackageZone(array $PackageZone = null)
    {
      $this->PackageZone = $PackageZone;
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
      return isset($this->PackageZone[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_PackageZone
     */
    public function offsetGet($offset)
    {
      return $this->PackageZone[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_PackageZone $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PackageZone[] = $value;
      } else {
        $this->PackageZone[$offset] = $value;
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
      unset($this->PackageZone[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_PackageZone Return the current element
     */
    public function current()
    {
      return current($this->PackageZone);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PackageZone);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PackageZone);
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
      reset($this->PackageZone);
    }

    /**
     * Countable implementation
     *
     * @return JP_PackageZone Return count of elements
     */
    public function count()
    {
      return count($this->PackageZone);
    }

}
