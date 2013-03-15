<?php

/**
 * This class holds the data for one result item of a multi availability check.
 *
 * @package Transip
 * @class DomainCheckResult
 * @author TransIP (support@transip.nl)
 * @version 20121211 12:04
 */
class Transip_DomainCheckResult
{
	/**
	 * The name of the Domain for which we have a status in this object
	 *
	 * @var string;
	 */
	public $domainName;

	/**
	 * The status for this domain, one of the Transip_DomainService::AVAILABILITY_* constants.
	 *
	 * @var string
	 */
	public $status;
}

?>
