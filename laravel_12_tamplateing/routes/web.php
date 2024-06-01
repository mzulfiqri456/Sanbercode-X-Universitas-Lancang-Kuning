<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CastController;

Route::get('/', function () {
    return view('layout.master');
});

Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/Tabel', [HomeController::class, 'tabel']);
Route::get('/Data-tabel', [HomeController::class, 'fiqri']);
Route::get('/cast', [CastController::class, 'index']);
Route::get('/cast/create', [CastController::class, 'create']);
Route::post('/cast', [CastController::class, 'store']);
Route::get('/cast/{cast_id}', [CastController::class, 'show'])->name('cast.show');
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
Route::put('/cast/{cast_id}', [CastController::class, 'update']);
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']);
Route::resource('cast', CastController::class);
