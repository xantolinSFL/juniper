<?php

namespace StayForLong\Juniper\Hotels;

class HotelRooms
{
	/**
	 * @var $arrayOfJP_Feature
	 */
	private $arrayOfJP_HotelRoom;

	/**
	 * HotelDescriptions constructor.
	 * @param \ArrayOfJP_HotelRoom $arrayOfJP_Feature
	 */
	public function __construct(\ArrayOfJP_HotelRoom $arrayOfJP_HotelRoom)
	{
		$this->arrayOfJP_HotelRoom = $arrayOfJP_HotelRoom;
	}

	/**
	 * @return array
	 */
	public function __invoke()
	{
		$rooms = [];
		foreach ($this->arrayOfJP_HotelRoom as $room) {
			$rooms[] = [
				"code"        => $room->getCode(),
				"name"        => $room->getName(),
				"description" => $room->getDescription(),
				"images"      => $room->getImages(),
				"size"        => $room->getSize(),
				"units"       => $room->getUnits(),
			];
		}

		return $rooms;
	}
}