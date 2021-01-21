<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicPlayerTest()
    {
        $response = $this->get('api/players/');
        $response->assertStatus(200);
    }

    public function testBasicTest()
    {
        $response = $this->get('api/players/randomForwards');
        $response->assertStatus(200);
    }
}
