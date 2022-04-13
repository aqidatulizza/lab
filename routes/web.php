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

Route::get('/admin-inventaris', function () {
    return view('admin/inventaris');
});

Route::get('/user-peminjaman', function () {
    return view('user/peminjaman');
});

Route::get('/user-pengembalian', function () {
    return view('user/pengembalian');
});

Route::get('/admin-laporan', function () {
    return view('admin/laporan');
});

Route::get('/admin-ruangan', function () {
    return view('admin/ruangan');
});

Route::get('/admin-jadwal', function () {
    return view('admin/jadwal');
});

Route::get('/admin-dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/admin-peminjaman', function () {
    return view('admin/peminjaman');
});

Route::get('/admin-pengembalian', function () {
    return view('admin/pengembalian');
});

Route::get('/admin-user', function () {
    return view('admin/user');
});

Route::get('/user-riwayat', function () {
    return view('user/riwayat');
});


