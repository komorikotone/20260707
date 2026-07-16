<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BushoController;
use App\Http\Controllers\ShainController;

Route::get('/', function () {
    return view('welcome');
});

// 部署一覧表示
route::get('/busho', [BushoController::class, 'index'])->name('busho.index');
route::get('/busho/sakusei', [BushoController::class, 'sakusei'])->name('busho.sakusei');
route::post('/busho/hozon', [BushoController::class, 'hozon'])->name('busho.hozon');

route::get('/busho/edit/{id}', [BushoController::class, 'edit'])->name('busho.edit');
route::put('/busho/update/{id}', [BushoController::class, 'update'])->name('busho.update');
route::delete('/busho/delete/{id}', [BushoController::class, 'delete'])->name('busho.delete');

// 社員一覧表示
route::get('/shain', [ShainController::class, 'index'])->name('shain.index');
route::get('/shain/sakusei', [ShainController::class, 'sakusei'])->name('shain.sakusei');
route::post('/shain/hozon', [ShainController::class, 'hozon'])->name('shain.hozon');

route::get('/shain/edit/{id}', [ShainController::class, 'edit'])->name('shain.edit');
route::put('/shain/update/{id}', [ShainController::class, 'update'])->name('shain.update');
route::delete('/shain/delete/{id}', [ShainController::class, 'delete'])->name('shain.delete');
