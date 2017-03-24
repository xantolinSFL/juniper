<?php

class JP_SearchSegmentInsurance extends JP_SearchSegmentBase
{

    /**
     * @param date $Start
     * @param date $End
     * @param int $OriginZone
     * @param string $JPDCode
     * @param int $DestinationZone
     */
    public function __construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone)
    {
      parent::__construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone);
    }

}
