<?php

namespace Darkgoldblade01\Wordpress\Api;

use Darkgoldblade01\Wordpress\WordpressApi;

class Plugin extends WordpressApi {

    protected $base_uri = 'https://api.wordpress.org/plugins/';

    /**
     * Info
     *
     * Returns the information for the plugin.
     *
     * @param $slug string  The slug of the plugin you want to pull
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function info(string $slug) {
        return $this->get('info/' . $slug . '.json');
    }

    /**
     * JSON
     *
     * Returns the JSON for the current Wordpress Version.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function json() {
        return $this->get('version-check/1.7');
    }
}