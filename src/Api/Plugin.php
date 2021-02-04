<?php

namespace Darkgoldblade01\Wordpress\Api;

use Darkgoldblade01\Wordpress\Models\Plugin as PluginModel;
use Darkgoldblade01\Wordpress\WordpressApi;

class Plugin extends WordpressApi
{
    protected $base_uri = 'https://api.wordpress.org/plugins/';

    /**
     * Info.
     *
     * Returns the information for the plugin.
     *
     * @param string $slug  The slug of the plugin you want to pull
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function info(string $slug): PluginModel
    {
        $info = $this->get('info/1.2/?action=plugin_information&request[slug]='.$slug);

        return (new PluginModel())->fill($info);
    }

    /**
     * Info.
     *
     * Returns the information for the plugin.
     *
     * @param string $search
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function search(string $search)
    {
        return $this->get('info/1.2/?action=query_plugins&request[search]='.$search);
    }
}
