<?php

namespace Juniper\Webservice;

class JP_FinalCustomerData
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Surname
     */
    protected $Surname = null;

    /**
     * @var JP_FinalCustomerContactData $ContactData
     */
    protected $ContactData = null;

    /**
     * @var JP_Document $Document
     */
    protected $Document = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var ArrayOfJP_Comment $Comments
     */
    protected $Comments = null;

    /**
     * @var boolean $IsCorporative
     */
    protected $IsCorporative = null;

    /**
     * @var boolean $AcceptOfferMailing
     */
    protected $AcceptOfferMailing = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @param boolean $IsCorporative
     * @param boolean $AcceptOfferMailing
     * @param boolean $Active
     */
    public function __construct($IsCorporative, $AcceptOfferMailing, $Active)
    {
      $this->IsCorporative = $IsCorporative;
      $this->AcceptOfferMailing = $AcceptOfferMailing;
      $this->Active = $Active;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return JP_FinalCustomerData
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JP_FinalCustomerData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
      return $this->Surname;
    }

    /**
     * @param string $Surname
     * @return JP_FinalCustomerData
     */
    public function setSurname($Surname)
    {
      $this->Surname = $Surname;
      return $this;
    }

    /**
     * @return JP_FinalCustomerContactData
     */
    public function getContactData()
    {
      return $this->ContactData;
    }

    /**
     * @param JP_FinalCustomerContactData $ContactData
     * @return JP_FinalCustomerData
     */
    public function setContactData($ContactData)
    {
      $this->ContactData = $ContactData;
      return $this;
    }

    /**
     * @return JP_Document
     */
    public function getDocument()
    {
      return $this->Document;
    }

    /**
     * @param JP_Document $Document
     * @return JP_FinalCustomerData
     */
    public function setDocument($Document)
    {
      $this->Document = $Document;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return JP_FinalCustomerData
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return ArrayOfJP_Comment
     */
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param ArrayOfJP_Comment $Comments
     * @return JP_FinalCustomerData
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCorporative()
    {
      return $this->IsCorporative;
    }

    /**
     * @param boolean $IsCorporative
     * @return JP_FinalCustomerData
     */
    public function setIsCorporative($IsCorporative)
    {
      $this->IsCorporative = $IsCorporative;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAcceptOfferMailing()
    {
      return $this->AcceptOfferMailing;
    }

    /**
     * @param boolean $AcceptOfferMailing
     * @return JP_FinalCustomerData
     */
    public function setAcceptOfferMailing($AcceptOfferMailing)
    {
      $this->AcceptOfferMailing = $AcceptOfferMailing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return JP_FinalCustomerData
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

}
