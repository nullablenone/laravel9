<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\ResponseController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::post('/input/filterOnly', [InputController::class, 'InputFilterOnly']);
Route::post('/input/filterExcept', [InputController::class, 'InputFilterExcept']);
Route::post('/input/filterMerge', [InputController::class, 'InputFilterMerge']);

Route::post('/file/upload', [FileController::class, 'fileUpload']);

Route::get('/response/test', [ResponseController::class, 'response']);
Route::get('/response/header', [ResponseController::class, 'header']);
Route::get('/response/json', [ResponseController::class, 'Responsejson']);
