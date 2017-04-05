<?php

namespace Juniper\Webservice;

class ArrayOfJP_GenericCatalogueItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_GenericCatalogueItem[] $CatalogueItem
     */
    protected $CatalogueItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_GenericCatalogueItem[]
     */
    public function getCatalogueItem()
    {
      return $this->CatalogueItem;
    }

    /**
     * @param JP_GenericCatalogueItem[] $CatalogueItem
     * @return ArrayOfJP_GenericCatalogueItem
     */
    public function setCatalogueItem(array $CatalogueItem = null)
    {
      $this->CatalogueItem = $CatalogueItem;
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
      return isset($this->CatalogueItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_GenericCatalogueItem
     */
    public function offsetGet($offset)
    {
      return $this->CatalogueItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_GenericCatalogueItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CatalogueItem[] = $value;
      } else {
        $this->CatalogueItem[$offset] = $value;
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
      unset($this->CatalogueItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_GenericCatalogueItem Return the current element
     */
    public function current()
    {
      return current($this->CatalogueItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CatalogueItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CatalogueItem);
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
      reset($this->CatalogueItem);
    }

    /**
     * Countable implementation
     *
     * @return JP_GenericCatalogueItem Return count of elements
     */
    public function count()
    {
      return count($this->CatalogueItem);
    }

}
