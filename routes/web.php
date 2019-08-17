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

Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard.index');
Route::get('/dashboard/create', 'Admin\DashboardController@create')->name('dashboard.create');
Route::post('/dashboard/store', 'Admin\DashboardController@store')->name('dashboard.store');
Route::resource('/produk','Admin\ProdukController');
Route::get('dashboard/production-table','Admin\ProductionController@index')->name('admin.product.index');
Route::get('dashboard/class-table','Admin\ClassController@index')->name('admin.class.index');
