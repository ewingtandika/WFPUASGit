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

Route::get('/mainmahasiswa', function () {
    return view('/content/mainmahasiswa');
});


// Route::get('/fpp1', function () {
//     return view('/content/prosesfpp1');
// });

Route::resource('perwalian', 'MatakuliahController');
Route::get('/fpp', 'fppcontroller@index');
Route::get('/hasilfpp', 'hasilfppcontroller@index');

Route::post('/CariPerwalian', 'MatakuliahController@find');
Route::post('/AddMatkul','fppcontroller@AddMk');
Route::post('/SaveMatkul','fppcontroller@SaveMk');