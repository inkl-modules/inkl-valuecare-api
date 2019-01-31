<?php

namespace Inkl\ValueCareApi\Service;

use Inkl\ValueCareApi\Client;

class AgentDataService
{

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function getAvailableProducts()
	{
		$result = $this->client->requestWithSession('callservice', [
			'FUNCTION' => 'GET_AGENT_DATA',
			'SHAPING' => 'AVAILABLE_PRODUCTS',
			'EXTENDED_RESULT' => true,
			'AGENT_NR' => '42008'
		]);

		$status = $result['STATUS'] ?? null;
		if ($status != 'OK')
		{
			throw new \Exception(sprintf('[%s] bad status: %s', __METHOD__, $status));
		}

		$list = $result['RESULT']['PRODUCT_LIST']['PRODUCT'] ?? [];

		return array_values($list);
	}
}