<?php

use App\Http\Controllers\CookieController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\ResponseController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::post('/input/filterOnly', [InputController::class, 'InputFilterOnly']);
Route::post('/input/filterExcept', [InputController::class, 'InputFilterExcept']);
Route::post('/input/filterMerge', [InputController::class, 'InputFilterMerge']);

Route::post('/file/upload', [FileController::class, 'fileUpload'])
    ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);

Route::get('/response/test', [ResponseController::class, 'response']);
Route::get('/response/header', [ResponseController::class, 'header']);
Route::get('/response/json', [ResponseController::class, 'Responsejson']);

Route::get('/cookie/setCookie', [CookieController::class, 'setCookie']);
Route::get('/cookie/getCookie', [CookieController::class, 'getCookie']);
Route::get('/cookie/clearCookie', [CookieController::class, 'clearCookie']);

Route::get('/redirect/to', [RedirectController::class, 'redirectTo']);
Route::get('/redirect/form', [RedirectController::class, 'redirectForm']);

Route::get('/middleware/test', function () {
    return "Oke!";
})->middleware(['contoh:nullablenone, 401']);
