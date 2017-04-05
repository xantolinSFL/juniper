<?php

namespace Juniper\Webservice;

class JP_Contents
{

    /**
     * @var JP_HotelContent[] $HotelContent
     */
    protected $HotelContent = null;

    /**
     * @var JP_PackageContent[] $PackageContent
     */
    protected $PackageContent = null;

    /**
     * @var JP_RentacarLocationDetail[] $RentacarLocationContent
     */
    protected $RentacarLocationContent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelContent[]
     */
    public function getHotelContent()
    {
      return $this->HotelContent;
    }

    /**
     * @param JP_HotelContent[] $HotelContent
     * @return JP_Contents
     */
    public function setHotelContent(array $HotelContent = null)
    {
      $this->HotelContent = $HotelContent;
      return $this;
    }

    /**
     * @return JP_PackageContent[]
     */
    public function getPackageContent()
    {
      return $this->PackageContent;
    }

    /**
     * @param JP_PackageContent[] $PackageContent
     * @return JP_Contents
     */
    public function setPackageContent(array $PackageContent = null)
    {
      $this->PackageContent = $PackageContent;
      return $this;
    }

    /**
     * @return JP_RentacarLocationDetail[]
     */
    public function getRentacarLocationContent()
    {
      return $this->RentacarLocationContent;
    }

    /**
     * @param JP_RentacarLocationDetail[] $RentacarLocationContent
     * @return JP_Contents
     */
    public function setRentacarLocationContent(array $RentacarLocationContent = null)
    {
      $this->RentacarLocationContent = $RentacarLocationContent;
      return $this;
    }

}
