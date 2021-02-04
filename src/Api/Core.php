<?php

namespace Darkgoldblade01\Wordpress\Api;

use Darkgoldblade01\Wordpress\WordpressApi;

class Core extends WordpressApi
{
    protected $base_uri = 'https://api.wordpress.org/core/';

    /**
     * PHP Serialized.
     *
     * Returns the PHP Serialized version of the current Wordpress Core.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function php()
    {
        return $this->get('version-check/1.6', false);
    }

    /**
     * JSON.
     *
     * Returns the JSON for the current Wordpress Core.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function json()
    {
        return $this->get('version-check/1.7');
    }

    /**
     * JSON.
     *
     * Returns the JSON for the current Wordpress Core.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function stability_check()
    {
        return $this->get('stable-check/1.0');
    }
}
