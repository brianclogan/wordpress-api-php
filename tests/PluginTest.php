<?php

namespace Darkgoldblade01\Wordpress\Tests;

use Darkgoldblade01\Wordpress\Api\Plugin as PluginApi;
use Darkgoldblade01\Wordpress\Models\Plugin;
use Darkgoldblade01\Wordpress\WordpressApi;
use PHPUnit\Framework\TestCase;

class PluginTest extends TestCase
{
    /** @test */
    public function static_function_test()
    {
        $api = WordpressApi::plugin();
        $this->assertTrue(is_a($api, PluginApi::class));
    }

    /** @test */
    public function search()
    {
        $api = new PluginApi();
        $search = $api->search('Jetpack');
        $this->assertIsArray($search);
        $this->assertTrue(strpos($search['plugins'][0]['name'], 'Jetpack') !== false);
    }

    /** @test */
    public function info()
    {
        $api = new PluginApi();
        $jetpack = $api->info('jetpack');
        $this->assertTrue(is_a($jetpack, Plugin::class));
    }

    /** @test */
    public function upToDate()
    {
        $api = new PluginApi();
        $jetpack = $api->info('jetpack');
        foreach ($jetpack->versions as $version => $link) {
            $this->assertTrue($jetpack->upToDate($version));
            continue;
        }
    }
}
