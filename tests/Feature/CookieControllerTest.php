<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CookieControllerTest extends TestCase
{
    public function testSetCookie()
    {
        $this->get('/cookie/setCookie')
            ->assertSeeText('create cookie')
            ->assertCookie('user', 'mhmd yesa')
            ->assertCookie('member', true)
            ->assertCookieNotExpired('user')
            ->assertCookieMissing('name');
    }

    public function testGetCookie()
    {
        //noted : withCookie = mengirim cookie tanpa membuat cookie dahulu
        $this
            ->withCookie('user_cookie', 'mhmd')
            ->withCookie('member_cookie', true)
            ->get('/cookie/getCookie')
            ->assertJson([
                'is_user' => 'mhmd',
                'is_member' => true,
            ]);
    }
}
