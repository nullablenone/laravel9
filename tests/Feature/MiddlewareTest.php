<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MiddlewareTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInvalid()
    {
        $this->get('/middleware/test')
            ->assertSeeText("invalid")
            ->assertStatus(401);
    }

    public function testValid()
    {
        $this->withHeader('name', 'nullablenone')
            ->get('/middleware/test')
            ->assertStatus(200)
            ->assertSeeText('Oke!');
    }
}
