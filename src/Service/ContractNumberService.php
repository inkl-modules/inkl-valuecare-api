<?php

namespace Inkl\ValueCareApi\Service;

use Inkl\ValueCareApi\Client;

class ContractNumberService
{
	/** @var Client */
	private $client;

	/**
	 * @param Client $client
	 * @param LegalDocumentFactory $legalDocumentFactory
	 */
	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function getNewContractNumber()
	{
		$result = $this->client->requestWithSession('callservice', [
			'FUNCTION' => 'GET_NEW_CONTRACTNUMBER',
			'SHAPING' => 'DEFAULT',
		]);

		return $result['RESULT']['NEWCONTRACTNUMBER'] ?? null;
	}

}