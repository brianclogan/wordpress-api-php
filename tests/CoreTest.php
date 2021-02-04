<?php

namespace Darkgoldblade01\Wordpress\Tests;

use Darkgoldblade01\Wordpress\Api\Core as CoreApi;
use Darkgoldblade01\Wordpress\WordpressApi;
use PHPUnit\Framework\TestCase;

class CoreTest extends TestCase
{
    /** @test */
    public function static_function_test()
    {
        $api = WordpressApi::core();
        $this->assertTrue(is_a($api, CoreApi::class));
    }

    /** @test */
    public function json_check()
    {
        $json = WordpressApi::core()->json();
        $this->assertIsArray($json);
    }

    /** @test */
    public function stability_check()
    {
        $stability_check = WordpressApi::core()->stability_check();
        $this->assertIsArray($stability_check);
    }
}
