<?php

namespace StayForLong\Juniper\Domain\Hotel;

use Juniper\Webservice\JP_ContactInfo;

/**
 * Class ContactInfo
 * @package StayForLong\Juniper\Domain\Hotel
 */
class ContactInfo
{
	/**
	 * @var JP_ContactInfo
	 */
	private $contactInfo;

	/**
	 * @var array
	 */
	private $phones = [];
	/**
	 * @var array
	 */
	private $faxes = [];
	/**
	 * @var array
	 */
	private $emails = [];

	/**
	 * ContactInfo constructor.
	 * @param JP_ContactInfo $contactInfo
	 */
	public function __construct(JP_ContactInfo $contactInfo)
	{
		$this->contactInfo = $contactInfo;
	}

	public function __invoke()
	{
		foreach ($this->contactInfo->getPhoneNumbers() as $phoneNumber) {
			$this->phones[] = $phoneNumber->get_();
		}

		foreach ($this->contactInfo->getFaxes() as $fax) {
			$this->faxes[] = $fax->get_();
		}

		foreach ($this->contactInfo->getEmails() as $email) {
			$this->emails[] = $email->get_();
		}
	}

	/**
	 * @return array
	 */
	public function getPhones()
	{
		return $this->phones;
	}

	/**
	 * @return array
	 */
	public function getEmails()
	{
		return $this->emails;
	}

	/**
	 * @return array
	 */
	public function getFaxes()
	{
		return $this->faxes;
	}
}