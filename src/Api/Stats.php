<?php

namespace Darkgoldblade01\Wordpress\Api;

use Darkgoldblade01\Wordpress\WordpressApi;

class Stats extends WordpressApi {

    protected $base_uri = 'https://api.wordpress.org/stats/';

    /**
     * Wordpress
     *
     * Returns the stats for Wordpress.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function wordpress() {
        return $this->get('wordpress/1.0');
    }

    /**
     * PHP
     *
     * Returns the stats for PHP.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function php() {
        return $this->get('php/1.0');
    }

    /**
     * MySQL
     *
     * Returns the stats for MySQL.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function mysql() {
        return $this->get('mysql/1.0');
    }

    /**
     * Plugin
     *
     * Returns the stats for a Plugin.
     *
     * @param $slug     string  The slug of the Plugin
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function plugin(string $slug) {
        return $this->get('plugin/1.0/' . $slug);
    }

    /**
     * Downloads
     *
     * Returns the download stats for a Plugin.
     *
     * @param $slug     string  The slug of the Plugin
     * @param $days     int     The number of days you want
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function plugin_downloads(string $slug, int $days) {
        return $this->get('plugin/1.0/downloads.php?slug=' . $slug . '&limit=' . $days);
    }
}