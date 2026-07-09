<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/busho', [App\Http\Controllers\BushoController::class, 'index']);
route::get('/shain', [App\Http\Controllers\ShainController::class, 'index']);