<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setCookie(Request $request): Response
    {
        return response("create cookie")
            ->cookie("user", "mhmd yesa", 60, '/')
            ->cookie('member', true);
    }

    public function getCookie(Request $request): JsonResponse
    {
        return response()->json([
            'is_user' => $request->cookie('user_cookie'),
            'is_member' => $request->cookie('member_cookie')
        ]);
    }

    public function clearCookie(Request $request): Response
    {
        return response("clear Cookie")
            ->withoutCookie('user')
            ->withoutCookie('member');
    }
}
