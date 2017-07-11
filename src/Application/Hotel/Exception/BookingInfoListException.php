<?php


namespace StayForLong\Juniper\Application\Hotel\Exception;


final class BookingInfoListException extends \Exception
{
	public static function throwBecauseOf($messages)
	{
		return new self($messages);
	}
}