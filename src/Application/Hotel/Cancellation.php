<?php

namespace StayForLong\Juniper\Application\Hotel;

use Juniper\Webservice\CancelBooking;
use Juniper\Webservice\JP_CancelRequest;
use Juniper\Webservice\JP_CancelRQ;
use StayForLong\Juniper\Infrastructure\Services\JuniperWebService;
use StayForLong\Juniper\Infrastructure\Services\WebService;

class Cancellation
{
	private $juniperWebService;
	private $locator;

	/**
	 * Cancellation constructor.
	 * @param JuniperWebService $juniperWebService
	 */
	public function __construct(JuniperWebService $juniperWebService, $locator)
	{
		$this->juniperWebService = $juniperWebService;
		$this->locator           = $locator;
	}

	public function __invoke()
	{
		$JP_CancelRequest = new JP_CancelRequest($this->locator);
		$JP_CancelRQ      = new JP_CancelRQ(WebService::JUNIPER_WS_VERSION, $this->juniperWebService->language());
		$JP_CancelRQ->setLogin($this->juniperWebService->login())
			->setCancelRequest($JP_CancelRequest);
		$JP_CancelRQ = new CancelBooking($JP_CancelRQ);
		$response    = $this->juniperWebService->service()->CancelBooking($JP_CancelRQ);

		if ($response->getBookingRS()->getErrors()) {
			foreach ($response->getBookingRS()->getErrors()->getError() as $error) {
				CancellationException::throwBecauseOf($error->getText());
			}

			return;
		}

		return $response->getBookingRS();
	}
}

final class CancellationException extends \Exception
{
	public static function throwBecauseOf($messages)
	{
		throw new self($messages);
	}
}