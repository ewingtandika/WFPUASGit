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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/layoutmahasiswa', function () {
//     return view('/layouts/menumahasiswa');
// });

// Route::get('/layoutadmin', function () {
//     return view('/layouts/menuadmin');
// });

// Route::get('/layoutdosen', function () {
//     return view('/layouts/menudosen');
// });

Route::get('/informasimatakuliah', 'MatakuliahController@index');

Route::get('/mainmahasiswa', 'InputPerwalianController@beranda');


// Route::get('/fpp1', function () {
//     return view('/content/prosesfpp1');
// });

Route::resource('perwalian', 'MatakuliahController');
Route::get('/fpp', 'fppcontroller@index')->middleware('mahasiswamiddleware');
Route::post('/FindKp','fppcontroller@cariKpajax');
Route::get('/hasilfpp', 'hasilfppcontroller@index')->middleware('mahasiswamiddleware');
Route::get('/update-perwalian','InputPerwalianController@tampil')->middleware('adminmiddleware');

Route::post('/CariPerwalian', 'MatakuliahController@find');
Route::get('/CariPerwalian', 'MatakuliahController@index');
Route::post('/AddMatkul','fppcontroller@AddMk');
Route::post('/SaveMatkul','fppcontroller@SaveMk');
Route::post('/update-perwalian','InputPerwalianController@ubah');



//Kresna
Route::get('/adminpage', 'PagesController@adminpage')->middleware('adminmiddleware');
Route::get('/tambah-kelas', 'PagesController@tambahkelaspage')->middleware('adminmiddleware');
Route::get('/admin-listkelas', 'AdminKelasController@listMatkul')->middleware('adminmiddleware');
Route::get('/delete-kelas/{id}', 'AdminKelasController@destroy')->middleware('adminmiddleware');
Route::get('/admin-inputperwalian', 'PagesController@admininputperwalian')->middleware('adminmiddleware');
Route::get('/list-perwalian', 'InputPerwalianController@listMatkul')->middleware('adminmiddleware');
Route::get('/delete-perwalian/{id}', 'InputPerwalianController@destroy')->middleware('adminmiddleware');
Route::get('/list-matkul', 'AdminController@listMatkul')->middleware('adminmiddleware');
Route::get('/delete-matkul/{id}', 'AdminController@destroy')->middleware('adminmiddleware');

Route::post('/simpan-data-kategori', 'KategoriController@store');
Route::post('/simpan-inputperwalian', 'InputPerwalianController@store');
Route::post('/simpan-kelas', 'AdminKelasController@store');
Route::post('/simpan-matkul', 'AdminController@store');
