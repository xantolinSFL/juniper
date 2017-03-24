<?php

class ArrayOfJP_GenericCatalogueItemContent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_GenericCatalogueItemContent[] $ItemContent
     */
    protected $ItemContent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_GenericCatalogueItemContent[]
     */
    public function getItemContent()
    {
      return $this->ItemContent;
    }

    /**
     * @param JP_GenericCatalogueItemContent[] $ItemContent
     * @return ArrayOfJP_GenericCatalogueItemContent
     */
    public function setItemContent(array $ItemContent = null)
    {
      $this->ItemContent = $ItemContent;
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
      return isset($this->ItemContent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_GenericCatalogueItemContent
     */
    public function offsetGet($offset)
    {
      return $this->ItemContent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_GenericCatalogueItemContent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ItemContent[] = $value;
      } else {
        $this->ItemContent[$offset] = $value;
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
      unset($this->ItemContent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_GenericCatalogueItemContent Return the current element
     */
    public function current()
    {
      return current($this->ItemContent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ItemContent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ItemContent);
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
      reset($this->ItemContent);
    }

    /**
     * Countable implementation
     *
     * @return JP_GenericCatalogueItemContent Return count of elements
     */
    public function count()
    {
      return count($this->ItemContent);
    }

}
