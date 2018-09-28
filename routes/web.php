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

Route::get('admin', 'AdminController@index');
Route::get('admin/dashboard', 'AdminController@dashboard');

//Admin Barang
Route::group(['middleware' => ['web']],function(){
	Route::post('admin/barang', 'BarangController@create');
	Route::post('admin/barang/view/search', 'BarangController@search');
	Route::post('admin/barang/update/{id}', 'BarangController@update');
	Route::get('admin/barang', 'BarangController@index');
	Route::get('admin/barang/view', 'BarangController@view');
	Route::get('admin/barang/show/{id}', 'BarangController@show');
	Route::get('admin/barang/{id}/edit', 'BarangController@edit');
	Route::get('admin/barang/delete/{id}', 'BarangController@delete');
});

//Admin Kategori Barang
Route::group(['middleware' => ['web']],function(){
	Route::post('admin/kategoribarang', 'KategoriBarangController@create');
	Route::post('admin/kategoribarang/update/{id}', 'KategoriBarangController@update');
	Route::get('admin/kategoribarang', 'KategoriBarangController@index');
	Route::get('admin/kategoribarang/{id}/edit', 'KategoriBarangController@edit');
	Route::get('admin/kategoribarang/delete/{id}', 'KategoriBarangController@delete');
});

//Admin Options
Route::group(['middleware' => ['web']],function(){
	Route::post('admin/options', 'OptionsController@create');
	Route::post('admin/options/update/{id}', 'OptionsController@update');
	Route::get('admin/options', 'OptionsController@index');
	Route::get('admin/options/{id}/edit', 'OptionsController@edit');
});