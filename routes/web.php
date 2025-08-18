<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

// Halaman katalog produk
Route::get('/katalog', function () {
    return view('katalog');
});
