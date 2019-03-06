<?php

namespace Inkl\ValueCareApi\Service;

use Inkl\ValueCareApi\Client;

class SetXmlInterfaceService
{
	/** @var Client */
	private $client;

	/**
	 * @param Client $client
	 */
	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function submit($xmlContent)
	{
		$result = $this->client->requestWithSession('callservice', [
			'FUNCTION' => 'SET_XML_INTERFACE',
			'SHAPING' => 'DEFAULT',
			'DATA' => $xmlContent
		]);

		$status = $result['STATUS'] ?? null;
		if ($status != 'OK')
		{
			return false;
		}

		return true;
	}

}