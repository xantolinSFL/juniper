<?php

namespace StayForLong\Juniper\Domain\Hotel;

use Juniper\Webservice\ArrayOfJP_HotelRoom;

/**
 * Class Rooms
 * @package StayForLong\Juniper\Domain\Hotel
 */
class Rooms
{
	/**
	 * @var $arrayOfJP_Feature
	 */
	private $arrayOfJP_HotelRoom;

	/**
	 * Rooms constructor.
	 * @param ArrayOfJP_HotelRoom $arrayOfJP_HotelRoom
	 */
	public function __construct(ArrayOfJP_HotelRoom $arrayOfJP_HotelRoom)
	{
		$this->arrayOfJP_HotelRoom = $arrayOfJP_HotelRoom;
	}

	/**
	 * @return Room[]
	 */
	public function __invoke()
	{
		$rooms = [];
		foreach ($this->arrayOfJP_HotelRoom as $room) {
			$rooms[] = new Room($room);
		}

		return $rooms;
	}
}