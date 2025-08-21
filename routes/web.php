<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

// Halaman katalog produk
Route::get('/katalog', function () {
    return view('katalog');
});

// admin dashboard
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

// nambah produk
Route::get('/admin/tambah-produk', function () {
    return view('admin.tambah_produk');
});
