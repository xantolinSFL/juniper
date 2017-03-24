<?php

class JP_RestrictedOptions
{

    /**
     * @var JP_RestrictedOption[] $RestrictedOption
     */
    protected $RestrictedOption = null;

    /**
     * @var string $Context
     */
    protected $Context = null;

    /**
     * @param string $Context
     */
    public function __construct($Context)
    {
      $this->Context = $Context;
    }

    /**
     * @return JP_RestrictedOption[]
     */
    public function getRestrictedOption()
    {
      return $this->RestrictedOption;
    }

    /**
     * @param JP_RestrictedOption[] $RestrictedOption
     * @return JP_RestrictedOptions
     */
    public function setRestrictedOption(array $RestrictedOption = null)
    {
      $this->RestrictedOption = $RestrictedOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getContext()
    {
      return $this->Context;
    }

    /**
     * @param string $Context
     * @return JP_RestrictedOptions
     */
    public function setContext($Context)
    {
      $this->Context = $Context;
      return $this;
    }

}
