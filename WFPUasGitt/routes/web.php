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
Route::post('/CariPerwalian', 'MatakuliahController@find');

Route::post('/AddMatkul','fppcontroller@AddMk');
Route::post('/SaveMatkul','fppcontroller@SaveMk');
<<<<<<< HEAD

//punya kresna
Route::get('/adminpage', 'PagesController@adminpage');
Route::get('/tambah-kelas', 'PagesController@tambahkelaspage');
Route::get('/admin-listkelas', 'AdminKelasController@list');
Route::get('/delete-kelas/{id}', 'AdminKelasController@destroy');
Route::get('/admin-inputperwalian', 'PagesController@admininputperwalian');
Route::post('/simpan-inputperwalian', 'InputPerwalianController@store');
Route::get('/list-perwalian', 'InputPerwalianController@list');
Route::get('/delete-perwalian/{id}', 'InputPerwalianController@destroy');
Route::post('/simpan-kelas', 'AdminKelasController@store');
Route::post('/simpan-matkul', 'AdminController@store');
Route::get('/list-matkul', 'AdminController@list');
Route::get('/delete-matkul/{id}', 'AdminController@destroy');
Route::get('/daftar-barang', 'PagesController@home');
Route::get('/tambah-data-kategori', 'KategoriController@home');
Route::post('/simpan-data-kategori', 'KategoriController@store');
=======
Route::post('/CariPerwalian', 'MatakuliahController@find');
>>>>>>> 8e8b80b6bf7fd0a6488e240e1235eedfa670589e
