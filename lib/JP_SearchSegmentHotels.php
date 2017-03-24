<?php

class JP_SearchSegmentHotels extends JP_SearchSegmentBase
{

    /**
     * @param string $Start
     * @param string $End
     * @param int $OriginZone
     * @param string $JPDCode
     * @param int $DestinationZone
     */
    public function __construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone)
    {
      parent::__construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone);
    }

}
