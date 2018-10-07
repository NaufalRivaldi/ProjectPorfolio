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

Route::get('/', 'HomeController@index');

//admin====================================================================
Route::get('admin', 'AuthController@getlogin')->middleware('guest');
Route::post('admin', 'AuthController@postlogin')->middleware('guest')->name('login');

//Login & user backend
Route::group(['middleware' => ['web']], function(){
	Route::get('admin/dashboard', 'AdminController@dashboard')->middleware('auth');
	Route::get('admin/user/', 'AuthController@getregister')->middleware('auth');
	Route::post('admin/user/', 'AuthController@postregister')->middleware('auth')->name('register');
	Route::get('admin/user/{id}/edit', 'AuthController@edit')->middleware('auth');
	Route::post('admin/user/update/{id}', 'AuthController@update')->middleware('auth');
	Route::get('admin/user/delete/{id}', 'AuthController@delete')->middleware('auth');
	Route::get('admin/logout', 'AuthController@logout')->middleware('auth');	
});

//Admin Barang
Route::group(['middleware' => ['web']],function(){
	Route::post('admin/barang', 'BarangController@create')->middleware('auth');
	Route::post('admin/barang/view/search', 'BarangController@search')->middleware('auth');
	Route::post('admin/barang/update/{id}', 'BarangController@update')->middleware('auth');
	Route::get('admin/barang', 'BarangController@index')->middleware('auth');
	Route::get('admin/barang/view', 'BarangController@view')->middleware('auth');
	Route::get('admin/barang/show/{id}', 'BarangController@show')->middleware('auth');
	Route::get('admin/barang/{id}/edit', 'BarangController@edit')->middleware('auth');
	Route::get('admin/barang/delete/{id}', 'BarangController@delete')->middleware('auth');
});

//Admin Kategori Barang
Route::group(['middleware' => ['web']],function(){
	Route::post('admin/kategoribarang', 'KategoriBarangController@create')->middleware('auth');
	Route::post('admin/kategoribarang/update/{id}', 'KategoriBarangController@update')->middleware('auth');
	Route::get('admin/kategoribarang', 'KategoriBarangController@index')->middleware('auth');
	Route::get('admin/kategoribarang/{id}/edit', 'KategoriBarangController@edit')->middleware('auth');
	Route::get('admin/kategoribarang/delete/{id}', 'KategoriBarangController@delete')->middleware('auth');
});

//Admin Options
Route::group(['middleware' => ['web']],function(){
	Route::post('admin/options', 'OptionsController@create')->middleware('auth');
	Route::post('admin/options/update/{id}', 'OptionsController@update')->middleware('auth');
	Route::get('admin/options', 'OptionsController@index')->middleware('auth');
	Route::get('admin/options/{id}/edit', 'OptionsController@edit')->middleware('auth');
});