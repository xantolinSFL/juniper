<?php


namespace StayForLong\Juniper\Application\Hotel\Exception;


final class BookingInfoListException extends \Exception
{
	public static function throwBecauseOf($messages)
	{
		throw new self($messages);
	}
}