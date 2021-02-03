<?php

namespace Darkgoldblade01\Wordpress\Api;

use Darkgoldblade01\Wordpress\WordpressApi;

class Secret extends WordpressApi {

    protected $base_uri = 'https://api.wordpress.org/secret-key/';

    /**
     * Version 1.0
     *
     * Returns the version 1.0 definitions.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function version_1_0() {
        return $this->get('1.0');
    }

    /**
     * Version 1.1
     *
     * Returns the version 1.1 definitions.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function version_1_1() {
        return $this->get('1.1');
    }

    /**
     * Version 1.1 Salt
     *
     * Returns the version 1.1 salt definitions.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function version_1_1_salt() {
        return $this->get('1.1/salt');
    }
}