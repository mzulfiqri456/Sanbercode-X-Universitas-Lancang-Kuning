<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('layout.master');
});

Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/Tabel', [HomeController::class, 'tabel']);
Route::get('/Data-tabel', [HomeController::class, 'fiqri']);

