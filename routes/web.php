<?php

use App\Http\Controllers\InputController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::post('/input/filterOnly', [InputController::class, 'InputFilterOnly']);
Route::post('/input/filterExcept', [InputController::class, 'InputFilterExcept']);
Route::post('/input/filterMerge', [InputController::class, 'InputFilterMerge']);
