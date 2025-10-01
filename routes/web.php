<?php

use Illuminate\Support\Facades\Route;

Route::get('/anggota', function () {
    return view('anggota');
});
Route::get('/ketua', function () {
    return view('ketua');
});


