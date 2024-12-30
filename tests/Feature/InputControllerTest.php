<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InputControllerTest extends TestCase
{
    public function testInputFilterOnly()
    {
        $this->post('/input/filterOnly', [
            "depan" => "muhamad",
            "tengah" => "yesa",
            "belakang" => "programmer",
        ])->assertSeeText("muhamad")->assertSeeText("muhamad")->assertDontSeeText("yesa");
    }

    public function testInputFilterExcept()
    {
        $this->post('/input/filterExcept', [
            "username" => "programmer_yesa",
            "password" => "rahasia",
            "admin" => true,
        ])->assertSeeText("programmer_yesa")->assertSeeText("rahasia")->assertDontSeeText("admin");
    }

    public function testInputFilterMerge()
    {
        $this->post('/input/filterMerge', [
            "username" => "programmer_yesa",
            "password" => "rahasia",
            "admin" => true,
        ])->assertSeeText("programmer_yesa")->assertSeeText("rahasia")->assertSeeText("false");
    }
}
