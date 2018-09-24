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

Route::get('/test', function(){
//    Artisan::call('migrate');
    Artisan::call('db:seed');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'IndexController@index')->name('home_admin');
    Route::get('login', 'IndexController@formLogin')->name('form_login');
    Route::post('login', 'IndexController@login')->name('admin_login');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/top', 'IndexController@top')->name('admin_top');
    Route::get('/tao-danh-muc', 'CategoryProductsController@index')->name('category_prd_index');
    Route::post('/luu-danh-muc', 'CategoryProductsController@save')->name('category_prd_save');
    Route::get('/sua-danh-muc/{id}', 'CategoryProductsController@edit')->name('category_prd_edit');
    Route::post('/luu-sua-danh-muc', 'CategoryProductsController@editSave')->name('category_prd_edit_save');
    Route::get('/xoa-danh-muc/{id}', 'CategoryProductsController@delete')->name('category_prd_delete');
    Route::get('/tao-san-pham', 'ProductsController@index')->name('prd_index');
    Route::post('/luu-san-pham', 'ProductsController@save')->name('prd_save');
    Route::get('/danh-sach-san-pham', 'ProductsController@listPrd')->name('prd_listPrd');
    Route::get('/xoa-san-pham/{id}', 'ProductsController@delete')->name('prd_delete');

    Route::get('/logout', 'IndexController@logout')->name('admin_logout');
});
