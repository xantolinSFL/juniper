<?php

namespace Juniper\Webservice;

class ArrayOfJP_PackageSearcherItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_PackageSearcherItem[] $PackageSearcherItem
     */
    protected $PackageSearcherItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PackageSearcherItem[]
     */
    public function getPackageSearcherItem()
    {
      return $this->PackageSearcherItem;
    }

    /**
     * @param JP_PackageSearcherItem[] $PackageSearcherItem
     * @return ArrayOfJP_PackageSearcherItem
     */
    public function setPackageSearcherItem(array $PackageSearcherItem = null)
    {
      $this->PackageSearcherItem = $PackageSearcherItem;
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
      return isset($this->PackageSearcherItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_PackageSearcherItem
     */
    public function offsetGet($offset)
    {
      return $this->PackageSearcherItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_PackageSearcherItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PackageSearcherItem[] = $value;
      } else {
        $this->PackageSearcherItem[$offset] = $value;
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
      unset($this->PackageSearcherItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_PackageSearcherItem Return the current element
     */
    public function current()
    {
      return current($this->PackageSearcherItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PackageSearcherItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PackageSearcherItem);
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
      reset($this->PackageSearcherItem);
    }

    /**
     * Countable implementation
     *
     * @return JP_PackageSearcherItem Return count of elements
     */
    public function count()
    {
      return count($this->PackageSearcherItem);
    }

}
