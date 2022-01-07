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

Route::get('/', 'App\Http\Controllers\MenuController@readtoIndex');
Route::get('/login', function () {
    return view('customer.login');
});

//Admin Login
Route::get('/admin', function () {
    return view('admin.login-admin');
});
Route::post('/admin-login', 'App\Http\Controllers\AuthController@login');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

Route::group(['middleware' => ['cek-login:0']], function () {
//Dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
//Ketegori
Route::get('/data-kategori', 'App\Http\Controllers\KategoriController@read');
Route::get('/tambah-data-kategori', function () {
    return view('admin.tambah-data-kategori');
});
Route::post('/tambah-kategori', 'App\Http\Controllers\KategoriController@create');
//Menu
Route::post('/tambah-menu', 'App\Http\Controllers\MenuController@create')->name('tambahdatamenu');
Route::get('/data-menu', 'App\Http\Controllers\MenuController@read');
Route::get('/tambah-data-menu', 'App\Http\Controllers\MenuController@readKategori');
//Pesanan
Route::get('/pesanan-masuk', function () {
    return view('admin.pesanan-masuk');
});
});