<?php

namespace Juniper\Webservice;

abstract class JP_BaseElement
{

    /**
     * @var JP_BookingCode $BookingCode
     */
    protected $BookingCode = null;

    /**
     * @var string $ExternalItemReference
     */
    protected $ExternalItemReference = null;

    /**
     * @var ArrayOfJP_RelPaxDist $RelPaxesDist
     */
    protected $RelPaxesDist = null;

    /**
     * @var ArrayOfJP_Comment $Comments
     */
    protected $Comments = null;

    /**
     * @var JP_CreditCardInfo $CreditCard
     */
    protected $CreditCard = null;

    /**
     * @var string $ElementId
     */
    protected $ElementId = null;

    /**
     * @param string $ElementId
     */
    public function __construct($ElementId)
    {
      $this->ElementId = $ElementId;
    }

    /**
     * @return JP_BookingCode
     */
    public function getBookingCode()
    {
      return $this->BookingCode;
    }

    /**
     * @param JP_BookingCode $BookingCode
     * @return JP_BaseElement
     */
    public function setBookingCode($BookingCode)
    {
      $this->BookingCode = $BookingCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalItemReference()
    {
      return $this->ExternalItemReference;
    }

    /**
     * @param string $ExternalItemReference
     * @return JP_BaseElement
     */
    public function setExternalItemReference($ExternalItemReference)
    {
      $this->ExternalItemReference = $ExternalItemReference;
      return $this;
    }

    /**
     * @return ArrayOfJP_RelPaxDist
     */
    public function getRelPaxesDist()
    {
      return $this->RelPaxesDist;
    }

    /**
     * @param ArrayOfJP_RelPaxDist $RelPaxesDist
     * @return JP_BaseElement
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
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
     * @return JP_BaseElement
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return JP_CreditCardInfo
     */
    public function getCreditCard()
    {
      return $this->CreditCard;
    }

    /**
     * @param JP_CreditCardInfo $CreditCard
     * @return JP_BaseElement
     */
    public function setCreditCard($CreditCard)
    {
      $this->CreditCard = $CreditCard;
      return $this;
    }

    /**
     * @return string
     */
    public function getElementId()
    {
      return $this->ElementId;
    }

    /**
     * @param string $ElementId
     * @return JP_BaseElement
     */
    public function setElementId($ElementId)
    {
      $this->ElementId = $ElementId;
      return $this;
    }

}
