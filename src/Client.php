<?php

namespace Franjsco\CryptoFearGreedIndex;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;

class Client
{
    private $httpClient;

    protected const BASE_URI = 'https://api.alternative.me/';

    public function __construct()
    {
        $this->httpClient = new GuzzleClient(['base_uri' => self::BASE_URI]);
    }


    public function getHttpClient(): GuzzleClient
    {
        return $this->httpClient;
    }


    public function getData() 
    {   
        try {
            $response = $this->httpClient->request('GET','fng');
            $body = (string) $response->getBody();

            return $this->transformData($body);
        } catch (RequestException $e) {
            return [];
        }
       
    }


    private function transformData($jsonData)
    {
        $array = json_decode($jsonData, true);
        return $array['data'][0];
    }
}