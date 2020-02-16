<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route user
// Route::get('/pengguna', 'PenggunaController@get');
Route::get('/pengguna', 'PenggunaController@search');
Route::post('/pengguna', 'PenggunaController@create');
Route::put('/pengguna', 'PenggunaController@update');
Route::delete('/pengguna', 'PenggunaController@delete');

//Route kategori
// Route::get('/kategori', 'KategoriController@get');
Route::get('kategori', 'KategoriController@search');
Route::post('/kategori', 'KategoriController@create');
Route::put('/kategori', 'KategoriController@update');
Route::delete('/kategori', 'KategoriController@delete');

//Route barang
// Route::get('/barang', 'BarangController@get');
Route::get('/barang', 'BarangController@search');
Route::post('/barang', 'BarangController@create');
Route::put('/barang', 'BarangController@update');
Route::delete('/barang', 'BarangController@delete');

//Route keranjang
// Route::get('/keranjang', 'KeranjangController@get');
Route::get('/keranjang', 'BarangController@search');
Route::post('/keranjang', 'KeranjangController@create');
Route::put('/keranjang', 'KeranjangController@update');
Route::delete('/keranjang', 'KeranjangController@delete');

//Route penjualan
// Route::get('/penjualan', 'PenjualanController@get');
Route::get('/penjualan', 'BarangController@search');
Route::post('/penjualan', 'PenjualanController@create');
Route::put('/penjualan', 'PenjualanController@update');
Route::delete('/penjualan', 'PenjualanController@delete');
