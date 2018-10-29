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
    Route::get('/tao-gioi-thieu', 'IntroducesController@index')->name('introduces');
    Route::post('/save-gioi-thieu', 'IntroducesController@saveIntroduces')->name('save_introduces');
    Route::get('/tao-danh-muc', 'CategoryProductsController@index')->name('category_prd_index');
    Route::post('/luu-danh-muc', 'CategoryProductsController@save')->name('category_prd_save');
    Route::get('/sua-danh-muc/{id}', 'CategoryProductsController@edit')->name('category_prd_edit');
    Route::post('/luu-sua-danh-muc', 'CategoryProductsController@editSave')->name('category_prd_edit_save');
    Route::get('/xoa-danh-muc/{id}', 'CategoryProductsController@delete')->name('category_prd_delete');
    Route::get('/tao-san-pham', 'ProductsController@index')->name('prd_index');
    Route::post('/luu-san-pham', 'ProductsController@save')->name('prd_save');
    Route::get('/danh-sach-san-pham', 'ProductsController@listPrd')->name('prd_listPrd');
    Route::get('/sua-san-pham/{id}', 'ProductsController@edit')->name('prd_edit');
    Route::post('/luu-sua-san-pham', 'ProductsController@editSave')->name('prd_edit_save');
    Route::get('/xoa-san-pham/{id}', 'ProductsController@delete')->name('prd_delete');

    // Tin-Tuc
    Route::get('/tao-danh-muc-tin', 'CategoryNewsController@index')->name('category_news_index');
    Route::post('/luu-danh-muc-tin', 'CategoryNewsController@save')->name('category_news_save');
    Route::get('/sua-danh-muc-tin/{id}', 'CategoryNewsController@edit')->name('category_news_edit');
    Route::post('/luu-sua-danh-muc-tin', 'CategoryNewsController@editSave')->name('category_news_edit_save');
    Route::get('/xoa-danh-muc-tin/{id}', 'CategoryNewsController@delete')->name('category_news_delete');

    Route::get('/tao-tin-tuc', 'NewsController@formCreateNews')->name('form_create_news');
    Route::post('/tao-tin-tuc', 'NewsController@createNews')->name('create_news');
    Route::get('/danh-sach-tin-tuc', 'NewsController@listNews')->name('list_news');
    Route::get('/sua-tin-tuc/{id}', 'NewsController@showEditNews')->name('show_edit_news');
    Route::post('/sua-tin-tuc', 'NewsController@editNews')->name('edit_news');
    Route::get('/xoa-tin-tuc/{id}', 'NewsController@deleteNews')->name('delete_news');
    Route::get('/logout', 'IndexController@logout')->name('admin_logout');
});

Route::group(['namespace' => 'User', 'middleware' => 'locale'], function () {
    Route::get('/', 'TopController@index')->name('user_top');
    Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('user.change-language');
    Route::get('tin-tuc/{title}/{id}', 'NewsController@detail')->name('news_detail');
    Route::get('danh-sach-tin-tuc/{title}/{id}', 'NewsController@listCategory')->name('news_list_ctg');
    Route::get('san-pham/{title}/{id}', 'ProductsController@detail')->name('products_detail');
    Route::get('danh-muc-san-pham/{title}/{id}', 'ProductsController@listCategory')->name('products_list_ctg');

    Route::get('gioi-thieu', 'IntroducesController@index')->name('introduce');
    Route::get('san-pham', 'ProductsController@listProduct')->name('products_list');
    Route::get('lien-he', 'ContactsController@index')->name('contacts');
    Route::get('tin-tuc', 'NewsController@listNews')->name('news_list');
    Route::get('tim-kiem', 'SearchController@index')->name('search');
});

