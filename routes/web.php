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
Route::get('dashboard/production-create', 'Admin\ProductionController@create')->name('admin.product.create');
Route::post('dashboard/production-store', 'Admin\ProductionController@store')->name('admin.product.store');
Route::get('dashboard/role-table','Admin\RoleController@index')->name('admin.role.index');
Route::get('dashboard/role-create', 'Admin\RoleController@create')->name('admin.role.create');
Route::post('dashboard/role-store', 'Admin\RoleController@store')->name('admin.role.store');
Route::get('dashboard/admin-table','Admin\AdminController@index')->name('admin.index');
Route::get('dashboard/admin-create', 'Admin\AdminController@create')->name('admin.create');
Route::post('dashboard/admin-store', 'Admin\AdminController@store')->name('admin.store');
Route::get('dashboard/class-table','Admin\ClassController@index')->name('admin.class.index');

