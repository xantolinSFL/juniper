<?php

class JP_Hour
{

    /**
     * @var string $Start
     */
    protected $Start = null;

    /**
     * @var string $End
     */
    protected $End = null;

    /**
     * @param string $Start
     * @param string $End
     */
    public function __construct($Start, $End)
    {
      $this->Start = $Start;
      $this->End = $End;
    }

    /**
     * @return string
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param string $Start
     * @return JP_Hour
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param string $End
     * @return JP_Hour
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

}
