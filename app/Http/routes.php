<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
 Route::get('/lagu2', function () {
     return view('lagu2');
 });

// Route::get('home/home', 'BerandaController@awal');    


Route::get('lagu', 'LaguController@awal');    
Route::get('lagu/tambah', 'LaguController@tambah');
Route::get('lagu/lihat/{lagu}','LaguController@lihat');
Route::post('lagu/simpan','LaguController@simpan');
Route::get('lagu/edit/{lagu}','LaguController@edit');
Route::post('lagu/edit/{lagu}','LaguController@update');
Route::get('lagu/hapus/{lagu}','LaguController@hapus');

Route::get('album', 'AlbumController@awal');    
Route::get('album/tambah', 'AlbumController@tambah');
Route::get('album/lihat/{album}','AlbumController@lihat');
Route::post('album/simpan','AlbumController@simpan');
Route::get('album/edit/{album}','AlbumController@edit');
Route::post('album/edit/{album}','AlbumController@update');
Route::get('album/hapus/{album}','AlbumController@hapus');

Route::get('gendre', 'GendreController@awal');    
Route::get('gendre/tambah', 'GendreController@tambah');
Route::get('gendre/lihat/{gendre}','GendreController@lihat');
Route::post('gendre/simpan','GendreController@simpan');
Route::get('gendre/edit/{gendre}','GendreController@edit');
Route::post('gendre/edit/{gendre}','GendreController@update');
Route::get('gendre/hapus/{gendre}','GendreController@hapus');

Route::get('penyanyi', 'PenyanyiController@awal');    
Route::get('penyanyi/tambah', 'PenyanyiController@tambah');
Route::get('penyanyi/lihat/{penyanyi}','PenyanyiController@lihat');
Route::post('penyanyi/simpan','PenyanyiController@simpan');
Route::get('penyanyi/edit/{penyanyi}','PenyanyiController@edit');
Route::post('penyanyi/edit/{penyanyi}','PenyanyiController@update');
Route::get('penyanyi/hapus/{penyanyi}','PenyanyiController@hapus');



Route::get('/logincek','SesiController@form');
Route::post('/logincek','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');
