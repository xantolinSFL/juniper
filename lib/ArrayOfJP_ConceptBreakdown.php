<?php

class ArrayOfJP_ConceptBreakdown implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_ConceptBreakdown[] $Concept
     */
    protected $Concept = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ConceptBreakdown[]
     */
    public function getConcept()
    {
      return $this->Concept;
    }

    /**
     * @param JP_ConceptBreakdown[] $Concept
     * @return ArrayOfJP_ConceptBreakdown
     */
    public function setConcept(array $Concept = null)
    {
      $this->Concept = $Concept;
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
      return isset($this->Concept[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_ConceptBreakdown
     */
    public function offsetGet($offset)
    {
      return $this->Concept[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_ConceptBreakdown $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Concept[] = $value;
      } else {
        $this->Concept[$offset] = $value;
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
      unset($this->Concept[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_ConceptBreakdown Return the current element
     */
    public function current()
    {
      return current($this->Concept);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Concept);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Concept);
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
      reset($this->Concept);
    }

    /**
     * Countable implementation
     *
     * @return JP_ConceptBreakdown Return count of elements
     */
    public function count()
    {
      return count($this->Concept);
    }

}
