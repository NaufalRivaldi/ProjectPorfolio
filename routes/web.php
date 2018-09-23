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

Route::post('admin/kategoribarang', 'KategoriBarangController@create');
Route::get('admin/kategoribarang', 'KategoriBarangController@index');
Route::get('admin/kategoribarang/{id}/edit', 'KategoriBarangController@edit');