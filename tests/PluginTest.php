<?php

namespace Darkgoldblade01\Wordpress\Tests;

use Darkgoldblade01\Wordpress\Api\Plugin AS PluginApi;
use Darkgoldblade01\Wordpress\Models\Plugin;
use PHPUnit\Framework\TestCase;

class PluginTest extends TestCase
{

    /** @test */
    public function search() {
        $api = new PluginApi();
        $search = $api->search('Jetpack');
        $this->assertIsArray($search);
        $this->assertTrue(strpos($search['plugins'][0]['name'], 'Jetpack') !== false);
    }

    /** @test */
    public function info() {
        $api = new PluginApi();
        $jetpack = $api->info('jetpack');
        $this->assertTrue(is_a($jetpack, Plugin::class));
    }

    /** @test */
    public function upToDate() {
        $api = new PluginApi();
        $jetpack = $api->info('jetpack');
        foreach($jetpack->versions AS $version => $link) {
            $this->assertTrue($jetpack->upToDate($version));
            continue;
        }
    }
}
