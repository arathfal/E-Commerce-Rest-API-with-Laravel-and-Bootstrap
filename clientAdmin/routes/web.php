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

// Route::get('/', function () {
//     return view('welcome');
// });

//Authentication
Route::get('/pengurus', 'AdminController@PageLogin');
Route::post('/pengurus/login', 'AdminController@LoginAdmin');
Route::get('/pengurus/logout', 'AdminController@LogoutAdmin');


// Route daftar member
Route::get('/pengurus/register', 'AdminController@PageRegister');
Route::post('/pengurus/register/simpan', 'AdminController@DaftarBaru');


Route::get('/pengurus/dashboard', 'AdminController@PageDashboard');
Route::get('/pengurus/table-pengguna', 'PenggunaController@getAll');
Route::get('/pengurus/table-kategori', 'KategoriController@getAll');
Route::get('/pengurus/table-barang', 'BarangController@getAll');
Route::post('/pengurus/tambah_barang', 'BarangController@store');
Route::post('/pengurus/update_barang', 'BarangController@update');
Route::post('/pengurus/hapus_barang', 'BarangController@destroy');
Route::get('/pengurus/sampah', 'AdminController@sampah');
