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

Route::get('/layoutmahasiswa', function () {
    return view('/layouts/menumahasiswa');
});

Route::get('/layoutadmin', function () {
    return view('/layouts/menuadmin');
});

Route::get('/layoutdosen', function () {
    return view('/layouts/menudosen');
});

Route::get('/informasimatakuliah', 'MatakuliahController@index');

Route::get('/jadwalmatakuliah', 'MatakuliahController@jadwal');

Route::get('/jadwalmatakuliahsemester', 'MatakuliahController@jadwalsemester');
Route::post('/CariJadwal', 'MatakuliahController@findjadwal');
Route::get('/mainmahasiswa', 'InputPerwalianController@beranda');


// Route::get('/fpp1', function () {
//     return view('/content/prosesfpp1');
// });

Route::resource('perwalian', 'MatakuliahController');
Route::get('/fpp', 'fppcontroller@index');
Route::post('/FindKp','fppcontroller@cariKpajax');
Route::get('/hasilfpp', 'hasilfppcontroller@index');
Route::get('/update-perwalian','InputPerwalianController@tampil');

Route::post('/CariPerwalian', 'MatakuliahController@find');
Route::post('/AddMatkul','fppcontroller@AddMk');
Route::post('/SaveMatkul','fppcontroller@SaveMk');
Route::post('/update-perwalian','InputPerwalianController@ubah');




Route::get('/adminlistkelas', 'AdminKelasController@listMatkul');
Route::get('/delete-kelas/{id}', 'AdminKelasController@destroy');

Route::get('/listperwalian', 'InputPerwalianController@listMatkul');
Route::get('/delete-perwalian/{id}', 'InputPerwalianController@destroy');

Route::get('/listmatkul', 'AdminController@listMatkul');
Route::get('/delete-matkul/{id}', 'AdminController@destroy');


//halaman
Route::get('/adminpage', 'PagesController@adminpage');
Route::get('/tambah-kelas', 'PagesController@tambahkelaspage');
Route::get('/tambah-perwalian', 'PagesController@admininputperwalian');

Route::post('/simpan-kelas', 'AdminKelasController@store');
Route::post('/simpan-matkul', 'AdminController@store');
Route::post('/simpan-inputperwalian', 'InputPerwalianController@store');



Route::get('/matakuliahdosen', 'Dosen@index');
