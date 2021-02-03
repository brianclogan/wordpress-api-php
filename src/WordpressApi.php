<?php

namespace Darkgoldblade01\Wordpress;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class WordpressApi
{

    /**
     * Base URI
     *
     * The base URI for the API.
     *
     * @var string
     */
    protected $base_uri = 'https://api.wordpress.org/';

    /**
     * @var Client
     */
    private $client;

    public function __construct() {
        $this->client = new Client([
            "base_uri" => $this->base_uri,
        ]);
    }

    /**
     * @param null $endpoint
     * @param bool $json_decode
     * @return mixed
     * @throws GuzzleException
     */
    protected function get($endpoint = null, $json_decode = true) {
        $response = $this->client->get($endpoint);
        if($json_decode) {
            return json_decode($response->getBody()->getContents(), true);
        } else {
            return $response->getBody()->getContents();
        }
    }
}
