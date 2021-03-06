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
// Route::get('/enkripsi', 'EncryptController@enkripsi');
Route::get('/data/', 'EncryptController@data');
Route::get('/data/{data_rahasia}', 'EncryptController@data_proses');
Route::get('/hash', 'HashController@hash');
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/upload/hapus/{id}', 'UploadController@hapus');

//Tutorial Sessions
Route::get('/session/tampil','TesController@tampilkanSession');
Route::get('/session/buat','TesController@buatSession');
Route::get('/session/hapus','TesController@hapusSession');

Route::get('/pesan','NotifController@index');
Route::get('/pesan/sukses','NotifController@sukses');
Route::get('/pesan/peringatan','NotifController@peringatan');
Route::get('/pesan/gagal','NotifController@gagal');

Route::get('/malasngoding','MalasngodingController@index');
Route::get('/malasngoding/{nama}','MalasngodingController@index');

Route::get('/kirimemail','MalasngodingController@index');

