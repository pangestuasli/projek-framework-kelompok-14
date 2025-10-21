<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisDokumenController;

// Root route
Route::get('/', function () {
    return view('welcome');
});

Route::get('/anggota', function () {
    return view('anggota');
})->name('anggota');

Route::get('/ketua', function () {
    return view('ketua');
})->name('ketua');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('jenis_dokumen', JenisDokumenController::class);

