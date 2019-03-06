<?php

namespace Inkl\ValueCareApi\Service;

use Inkl\ValueCareApi\Client;

class ProductDataService
{
	/** @var Client */
	private $client;
	/** @var LegalDocumentFactory */
	private $legalDocumentFactory;

	/**
	 * @param Client $client
	 * @param LegalDocumentFactory $legalDocumentFactory
	 */
	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function getLegalDocuments($applicationCode, $productType)
	{
		return $this->getProductData('LEGAL_DOCUMENTS', $applicationCode, $productType, 'DOCUMENT');
	}

	public function getParameters($applicationCode, $productType)
	{
		return $this->getProductData('PARAMETERS', $applicationCode, $productType, 'PRODUCT');
	}

	private function getProductData($shaping, $applicationCode, $productType, $resultKey)
	{
		$result = $this->client->requestWithSession('callservice', [
			'FUNCTION' => 'GET_PRODUCT_DATA',
			'SHAPING' => $shaping,
			'APPLICATION_CODE' => $applicationCode,
			'PRODUCT_TYPE' => $productType
		]);

		$status = $result['STATUS'] ?? null;
		if ($status != 'OK')
		{
			return [];
		}

		$list = [$result['RESULT'][$resultKey]] ?? [];

		return $list;
	}

}