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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/daftarbarang', 'PagesController@daftarbarang');
Route::get('/profile', 'PagesController@profile');
Route::get('/hobby', 'PagesController@hobby');
Route::get('/gallery', 'PagesController@gallery');

//Route::get('/tambah-data-kategori', 'KategoriController@create');
//Route::post('/simpan-data-kategori', 'KategoriController@store');
//Route::get('/daftar-kategori', 'KategoriController@index');
Route::resource('kategoris', 'KategoriController');
Route::resource('perwalian', 'MatakuliahController');

Route::get('/fpp', 'fppcontroller@index');
Route::get('/hasilfpp', 'hasilfppcontroller@index');