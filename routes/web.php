<?php

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
    return view('welcome');
});

Route::namespace('Admin')->prefix('admin')->group(function () { 
    Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'DashboardController@index']);
    Route::get('/manajemen/pegawai', ['as' => 'admin.pegawai', 'uses' => 'ManajemenController@indexPegawai']);
    Route::get('/manajemen/bidang', ['as' => 'admin.bidang', 'uses' => 'ManajemenController@indexBidang']);
    Route::get('/manajemen/jabatan', ['as' => 'admin.jabatan', 'uses' => 'ManajemenController@indexJabatan']);
    Route::get('/manajemen/atasan', ['as' => 'admin.atasan', 'uses' => 'ManajemenController@indexAtasan']);
    Route::get('/manajemen/kegiatan', ['as' => 'admin.kegiatan', 'uses' => 'ManajemenController@indexKegiatan']);
    Route::get('/manajemen/user', ['as' => 'admin.user', 'uses' => 'ManajemenController@indexUser']);
});

Route::namespace('Auth')->prefix('auth')->group(function () {
    Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@loginIndex'])->middleware('guest');
});