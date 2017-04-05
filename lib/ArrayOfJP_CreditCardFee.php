<?php

namespace Juniper\Webservice;

class ArrayOfJP_CreditCardFee implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CreditCardFee[] $CreditCardFee
     */
    protected $CreditCardFee = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CreditCardFee[]
     */
    public function getCreditCardFee()
    {
      return $this->CreditCardFee;
    }

    /**
     * @param JP_CreditCardFee[] $CreditCardFee
     * @return ArrayOfJP_CreditCardFee
     */
    public function setCreditCardFee(array $CreditCardFee = null)
    {
      $this->CreditCardFee = $CreditCardFee;
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
      return isset($this->CreditCardFee[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CreditCardFee
     */
    public function offsetGet($offset)
    {
      return $this->CreditCardFee[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CreditCardFee $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CreditCardFee[] = $value;
      } else {
        $this->CreditCardFee[$offset] = $value;
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
      unset($this->CreditCardFee[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CreditCardFee Return the current element
     */
    public function current()
    {
      return current($this->CreditCardFee);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CreditCardFee);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CreditCardFee);
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
      reset($this->CreditCardFee);
    }

    /**
     * Countable implementation
     *
     * @return JP_CreditCardFee Return count of elements
     */
    public function count()
    {
      return count($this->CreditCardFee);
    }

}
