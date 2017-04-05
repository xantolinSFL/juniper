<?php

namespace Juniper\Webservice;

class JP_Comment
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var JP_CommentType $Type
     */
    protected $Type = null;

    /**
     * @param string $_
     * @param JP_CommentType $Type
     */
    public function __construct($_, $Type)
    {
      $this->_ = $_;
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return JP_Comment
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return JP_CommentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JP_CommentType $Type
     * @return JP_Comment
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
