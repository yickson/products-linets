<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteMainTest extends TestCase
{
    /**
     * Route main webApp
     * Status 200
     * @return void
     */
    public function testBasicTestRouteMain()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
