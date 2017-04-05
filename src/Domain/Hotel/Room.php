<?php

namespace StayForLong\Juniper\Domain\Hotel;

use Juniper\Webservice\JP_HotelRoom;

class Room
{
	private $room;

	public function __construct(JP_HotelRoom $room)
	{
		$this->room = $room;
	}

	public function code()
	{
		return $this->room->getCode();
	}

	public function name()
	{
		return $this->room->getName();
	}

	public function description()
	{
		return $this->room->getDescription();
	}

	public function images()
	{
		return $this->room->getImages();
	}

	public function size()
	{
		return $this->room->getSize();
	}

	public function units()
	{
		return $this->room->getUnits();
	}
}