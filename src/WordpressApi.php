<?php

namespace Darkgoldblade01\Wordpress;

use Darkgoldblade01\Wordpress\Api\Core;
use Darkgoldblade01\Wordpress\Api\Plugin;
use Darkgoldblade01\Wordpress\Api\Secret;
use Darkgoldblade01\Wordpress\Api\Stats;
use Darkgoldblade01\Wordpress\Api\Theme;
use Darkgoldblade01\Wordpress\Api\Translation;
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
     * @return Core
     */
    public static function core(): Core
    {
        return new Core();
    }

    /**
     * @return Plugin
     */
    public static function plugin(): Plugin
    {
        return new Plugin();
    }

    /**
     * @return Secret
     */
    public static function secret(): Secret
    {
        return new Secret();
    }

    /**
     * @return Stats
     */
    public static function stats(): Stats
    {
        return new Stats();
    }

    /**
     * @return Theme
     */
    public static function theme(): Theme
    {
        return new Theme();
    }

    /**
     * @return Translation
     */
    public static function translation(): Translation
    {
        return new Translation();
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
