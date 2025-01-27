<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirectTo(): string
    {
        return "redirect to";
    }

    public function redirectForm(): RedirectResponse
    {
        return redirect('/redirect/to');
    }
}
