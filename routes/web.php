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

//Admin Kategori Barang
Route::group(['middleware' => ['web']],function(){
	Route::post('admin/kategoribarang', 'KategoriBarangController@create');
	Route::post('admin/kategoribarang/update/{id}', 'KategoriBarangController@update');
	Route::get('admin/kategoribarang', 'KategoriBarangController@index');
	Route::get('admin/kategoribarang/{id}/edit', 'KategoriBarangController@edit');
	Route::get('admin/kategoribarang/delete/{id}', 'KategoriBarangController@delete');
});

//Admin Kategori Bahan
Route::group(['middleware' => ['web']],function(){
	Route::post('admin/kategoribahan', 'KategoriBahanController@create');
	Route::post('admin/kategoribahan/update/{id}', 'KategoriBahanController@update');
	Route::get('admin/kategoribahan', 'KategoriBahanController@index');
	Route::get('admin/kategoribahan/{id}/edit', 'KategoriBahanController@edit');
	Route::get('admin/kategoribahan/delete/{id}', 'KategoriBahanController@delete');
});

//Admin Options
Route::group(['middleware' => ['web']],function(){
	Route::post('admin/options', 'OptionsController@create');
	Route::post('admin/options/update/{id}', 'OptionsController@update');
	Route::get('admin/options', 'OptionsController@index');
	Route::get('admin/options/{id}/edit', 'OptionsController@edit');
});