<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/inventaris-listbarang', function () {
    return view('admin/inventaris-listbarang');
});

Route::get('/user-peminjaman', function () {
    return view('user/peminjaman');
});

Route::get('/user-pengembalian', function () {
    return view('user/pengembalian');
});

Route::get('/admin-laporan', function () {
    return view('admin/index');
});


