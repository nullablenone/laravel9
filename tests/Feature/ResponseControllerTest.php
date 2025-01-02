<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResponseControllerTest extends TestCase
{
    public function testResponse()
    {
        $this->get('/response/test')->assertStatus(200)->assertSeeText("test response");
    }

    public function testHeader()
    {
        $this->get('/response/header')->assertStatus(200)
            ->assertSeeText('muhamad')->assertSeeText('yesa')
            ->assertHeader('Content-Type', 'application/json')
            ->assertHeader('Author', 'programmer yesa')
            ->assertHeader('App', 'Belajar Laravel');
    }

    public function testJson()
    {
        $this->get('/response/json')->assertStatus(200)
            ->assertJson([
                'firstname' => 'muhamad',
                'lastname' => 'yesa'
            ]);
    }

    /*
    test download
    public function testDownload(){
        assertDownload();
    }
    */
}
