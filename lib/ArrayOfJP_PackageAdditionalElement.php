<?php

namespace Juniper\Webservice;

class ArrayOfJP_PackageAdditionalElement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_PackageAdditionalElement[] $PackageSupplement
     */
    protected $PackageSupplement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PackageAdditionalElement[]
     */
    public function getPackageSupplement()
    {
      return $this->PackageSupplement;
    }

    /**
     * @param JP_PackageAdditionalElement[] $PackageSupplement
     * @return ArrayOfJP_PackageAdditionalElement
     */
    public function setPackageSupplement(array $PackageSupplement = null)
    {
      $this->PackageSupplement = $PackageSupplement;
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
      return isset($this->PackageSupplement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_PackageAdditionalElement
     */
    public function offsetGet($offset)
    {
      return $this->PackageSupplement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_PackageAdditionalElement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PackageSupplement[] = $value;
      } else {
        $this->PackageSupplement[$offset] = $value;
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
      unset($this->PackageSupplement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_PackageAdditionalElement Return the current element
     */
    public function current()
    {
      return current($this->PackageSupplement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PackageSupplement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PackageSupplement);
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
      reset($this->PackageSupplement);
    }

    /**
     * Countable implementation
     *
     * @return JP_PackageAdditionalElement Return count of elements
     */
    public function count()
    {
      return count($this->PackageSupplement);
    }

}
