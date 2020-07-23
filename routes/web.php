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
})->name('index');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('create','KampanyeController@create')->name('create');
Route::get('detail','KampanyeController@detail')->name('detail');
Route::get('/pembayaran','PembayaranController@pembayaran')->name('pembayaran');
Route::get('/transfer','PembayaranController@transfer')->name('transfer');
Route::get('/langsung','PembayaranController@langsung')->name('langsung');
Route::get('/form','PembayaranController@form')->name('form');
Route::get('/instansi','InstansiController@instansi')->name('instansi');
Route::get('/pemilik','InstansiController@pemilik')->name('pemilik');
Route::get('/bantuan','PertanyaanController@bantuan')->name('bantuan');
Route::get('/pertanyaan','PertanyaanController@pertanyaan')->name('pertanyaan');
Route::get('/pencarian','PertanyaanController@pencarian')->name('pencarian');
Route::get('/tentang','PertanyaanController@tentang')->name('tentang');
Route::get('/hasil','PertanyaanController@hasil')->name('hasil');
Route::get('/kategori','PertanyaanController@kategori')->name('kategori');
Route::get('/tentang','PertanyaanController@tentang')->name('tentang');
