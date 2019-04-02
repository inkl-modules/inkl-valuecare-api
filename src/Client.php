<?php

namespace Inkl\ValueCareApi;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
    const API_TYPE = 'JSON';
    const ENDPOINT = 'https://web.serviceeu.com/mdp/ws/prod/%s.pl';

    /** @var GuzzleClient */
    private $guzzleClient;
    /** @var Contract\ClientConfigInterface */
    private $clientConfig;

    private $session = '';

    /**
     * @param GuzzleClient $guzzleClient
     * @param Contract\ClientConfigInterface $clientConfig
     */
    public function __construct(GuzzleClient $guzzleClient,
                                Contract\ClientConfigInterface $clientConfig)
    {
        $this->guzzleClient = $guzzleClient;
        $this->clientConfig = $clientConfig;

        $this->setSession($clientConfig->getLastSession());
    }

    public function request($endpointFunction, $params = [])
    {
        $params['API'] = self::API_TYPE;

        $response = $this->guzzleClient->post(
            sprintf(self::ENDPOINT, $endpointFunction), [
                'form_params' => $params
            ]
        );

        return json_decode($response->getBody()->getContents(), true);
    }

    public function requestWithSession($endpointFunction, $params = [])
    {
        if (!$this->checkSession())
        {
            $this->login();
        }
        $params['SESSION'] = $this->getSession();

        return $this->request($endpointFunction, $params);
    }

    public function setSession($session)
    {
        $this->session = $session;
        return $this;
    }

    public function getSession()
    {
        return $this->session;
    }

    public function checkSession()
    {
        $result = $this->request('checksession', [
            'SESSION' => $this->getSession()
        ]);

        $statusCode = $result['STATUSCODE'] ?? -1;

        return ($statusCode == 0);
    }

    public function login()
    {
        $result = $this->request('login', [
            'USER' => $this->clientConfig->getUser(),
            'PASSWORD' => $this->clientConfig->getPassword(),
            'COMPANY' => $this->clientConfig->getCompany(),
            'ROLE' => $this->clientConfig->getRole()
        ]);

        $statusCode = $result['STATUSCODE'] ?? -1;

        if ($statusCode != 0)
        {
            throw new \Exception($result['STATUS'] ?? 'unknown error on login');
        }

        $this->setSession($result['SESSION']);
    }

}
