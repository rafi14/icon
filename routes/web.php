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

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard.index');
    Route::get('/create', 'Admin\DashboardController@create')->name('dashboard.create');
    Route::post('/store', 'Admin\DashboardController@store')->name('dashboard.store');
    
    
    Route::get('/production-table','Admin\ProductionController@index')->name('admin.product.index');
    Route::get('/production-create', 'Admin\ProductionController@create')->name('admin.product.create');
    Route::post('/production-store', 'Admin\ProductionController@store')->name('admin.product.store');
    Route::get('/production-detail/{id}','Admin\ProductionController@detail')->name('admin.product.detail');
    Route::get('/production-edit/{id}','Admin\ProductionController@edit')->name('admin.product.edit');
    Route::put('/production-update/{id}','Admin\ProductionController@update')->name('admin.product.update');
    Route::get('/production-delete/{id}','Admin\ProductionController@delete')->name('admin.product.delete');

    
    Route::get('/class-table','Admin\ClassController@index')->name('admin.class.index');
    Route::get('/class-create','Admin\ClassController@create')->name('admin.class.create');
    Route::post('/class-store','Admin\ClassController@store')->name('admin.class.store');
    Route::get('/class-detail/{id}','Admin\ClassController@detail')->name('admin.class.detail');
    Route::get('/class-edit/{id}','Admin\ClassController@edit')->name('admin.class.edit');
    Route::put('/class-update/{id}','Admin\ClassController@update')->name('admin.class.update');
    
    
    Route::get('/role-table','Admin\RoleController@index')->name('admin.role.index');
    Route::get('/role-create', 'Admin\RoleController@create')->name('admin.role.create');
    Route::post('/role-store', 'Admin\RoleController@store')->name('admin.role.store');
    Route::get('/admin-table','Admin\AdminController@index')->name('admin.index');
    Route::get('/admin-create', 'Admin\AdminController@create')->name('admin.create');
    Route::post('/admin-store', 'Admin\AdminController@store')->name('admin.store');
    
    
});

