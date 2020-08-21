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
    Artisan::call('migrate');
//    Artisan::call('db:seed');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'IndexController@index')->name('home_admin');
    Route::get('login', 'IndexController@formLogin')->name('form_login');
    Route::post('login', 'IndexController@login')->name('admin_login');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/top', 'IndexController@top')->name('admin_top');

    Route::get('/tao-lich-su', 'IntroducesController@indexHistory')->name('index_history');
    Route::post('/save-lich-su', 'IntroducesController@saveHistory')->name('save_history');

    Route::get('/tao-su-menh', 'IntroducesController@indexMission')->name('index_mission');
    Route::post('/save-su-menh', 'IntroducesController@saveMission')->name('save_mission');

    Route::get('/tao-tam-nhin', 'IntroducesController@indexVision')->name('index_vision');
    Route::post('/save-tam-nhin', 'IntroducesController@saveVision')->name('save_vision');

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

    Route::get('/tao-tin-tuc', 'NewsController@formCreateNews')->name('form_create_news');
    Route::post('/tao-tin-tuc', 'NewsController@createNews')->name('create_news');
    Route::get('/danh-sach-tin-tuc', 'NewsController@listNews')->name('list_news');
    Route::get('/sua-tin-tuc/{id}', 'NewsController@showEditNews')->name('show_edit_news');
    Route::post('/sua-tin-tuc', 'NewsController@editNews')->name('edit_news');
    Route::get('/xoa-tin-tuc/{id}', 'NewsController@deleteNews')->name('delete_news');
    Route::get('/logout', 'IndexController@logout')->name('admin_logout');

    // Videos
    Route::get('/tao-videos', 'VideosController@registerVideos')->name('register_videos');
    Route::post('/luu-videos', 'VideosController@saveVideos')->name('save_register_videos');
    Route::get('sua-videos/{id}', 'VideosController@formEditVideo')->name('form_edit_videos');
    Route::post('/sua-videos', 'VideosController@editVideo')->name('save_edit_videos');
    Route::get('/danh-sach-videos', 'VideosController@listVideos')->name('list_videos');
    Route::get('/xoa-videos/{id}', 'VideosController@deleteVideos')->name('delete_videos');

    //Images
    Route::get('/tao-danh-muc-hinh-anh', 'ImagesController@createCategoryImage')->name('create_category_image');
    Route::post('/save-danh-muc-hinh-anh', 'ImagesController@saveCategoryImage')->name('save_category_image');
    Route::get('/xoa-danh-muc-hinh-anh/{id}', 'ImagesController@deleteCategoryImage')->name('delete_category_image');
    Route::get('/sua-danh-muc-hinh-anh/{id}', 'ImagesController@showEditCategoryImage')->name('show_edit_category_image');
    Route::post('/sua-danh-muc-hinh-anh', 'ImagesController@editCategoryImage')->name('edit_category_image');

    Route::get('/tao-hinh-anh', 'ImagesController@registerImage')->name('register_image');
    Route::post('/luu-hinh-anh', 'ImagesController@saveImage')->name('save_register_image');
    Route::get('/danh-sach-hinh-anh', 'ImagesController@listImage')->name('list_images');
    Route::get('/sua-hinh-anh/{id}', 'ImagesController@showEditImage')->name('show_edit_image');
    Route::post('/sua-hinh-anh', 'ImagesController@editImage')->name('edit_image');
    Route::get('/xoa-hinh-anh/{id}', 'ImagesController@deleteImage')->name('delete_image');

    //Sliders
    Route::get('/tao-slider', 'SlidersController@registerSlider')->name('register_slider');
    Route::post('/luu-slider', 'SlidersController@saveSlider')->name('save_register_slider');
    Route::get('/danh-sach-slider', 'SlidersController@listSlider')->name('list_slider');
    Route::get('/sua-slider/{id}', 'SlidersController@showEditSlider')->name('show_edit_slider');
    Route::post('/sua-slider', 'SlidersController@editSlider')->name('edit_slider');
    Route::get('/xoa-slider/{id}', 'SlidersController@deleteSlider')->name('delete_slider');

    Route::get('/danh-sach-lien-he', 'ContactsController@listContacts')->name('list_contacts');
    Route::get('/update-status-contacts/{id}', 'ContactsController@updateStatusContacts')->name('update_status_contacts');

    // Linh Vuc Hoat Dong
    Route::get('/tao-thuoc-thu-y', 'LinhVucHoatDongController@indexThuocThuY')->name('index_thuoc_thu_y');
    Route::post('/save-thuoc-thu-y', 'LinhVucHoatDongController@saveThuocThuY')->name('save_thuoc_thu_y');

    Route::get('/tao-duc-giong', 'LinhVucHoatDongController@indexDucGiong')->name('index_duc_giong');
    Route::post('/save-duc-giong', 'LinhVucHoatDongController@saveDucGiong')->name('save_duc_giong');

    Route::get('/tao-vac-xin-oie', 'LinhVucHoatDongController@indexVacXinOie')->name('index_vac_xin_oie');
    Route::post('/save-vac-xin-oie', 'LinhVucHoatDongController@saveVacXinOie')->name('save_vac_xin_oie');

    Route::get('/tao-vac-xin-fmd', 'LinhVucHoatDongController@indexVacXinFmd')->name('index_vac_xin_fmd');
    Route::post('/save-vac-xin-fmd', 'LinhVucHoatDongController@saveVacXinFmd')->name('save_vac_xin_fmd');
});

Route::group(['namespace' => 'User', 'middleware' => 'locale'], function () {
    Route::get('/', 'TopController@index')->name('user_top');
    Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('user.change-language');
    Route::get('tin-tuc/{title}/{id}', 'NewsController@detail')->name('news_detail');
    Route::get('danh-sach-tin-tuc/{title}/{id}', 'NewsController@listCategory')->name('news_list_ctg');
    Route::get('san-pham/{title}/{id}', 'ProductsController@detail')->name('products_detail');
    Route::get('danh-muc-san-pham/{title}/{id}', 'ProductsController@listCategory')->name('products_list_ctg');

    Route::get('gioi-thieu', 'IntroducesController@indexLichSu')->name('lich_su_user');
    Route::get('gioi-thieu/su-menh', 'IntroducesController@indexSumenh')->name('su_menh_user');
    Route::get('gioi-thieu/tam-nhin', 'IntroducesController@indexTamNhin')->name('tam_nhin_user');

    Route::get('san-pham', 'ProductsController@listProduct')->name('products_list');
    Route::get('san-pham/d/{title}/{id}', 'ProductsController@listCategoryDanhMuc2')->name('list_category_danh_muc_2'); // danh muc cap 2

    Route::get('lien-he', 'ContactsController@index')->name('contacts');
    Route::post('send-lien-he', 'ContactsController@sendContacts')->name('send_contacts');
    Route::get('tin-tuc', 'NewsController@listNews')->name('news_list');
    Route::get('tim-kiem', 'SearchController@index')->name('search');
    Route::get('/hinh-anh', 'ImageController@listImage')->name('list_image');
    Route::get('/hinh-anh/{title}/{id}', 'ImageController@detailImage')->name('detail_image');
    Route::get('/videos', 'VideosController@listVideos')->name('videos');

    Route::get('/linh-vuc-hoat-dong', 'ScopeOfActivitiesController@listActivities')->name('list_activities');
    Route::get('/thuoc-thu-y', 'ScopeOfActivitiesController@detailThuocThuY')->name('detail_thuoc_thu_y');
    Route::get('/duc-giong', 'ScopeOfActivitiesController@detailDucGiong')->name('detail_duc_giong');
    Route::get('/vac-xin-oie', 'ScopeOfActivitiesController@detailVacXinOie')->name('detail_vac_xin_oie');
    Route::get('/vac-xin-fmd', 'ScopeOfActivitiesController@detailVacXinFmd')->name('detail_vac_xin_fmd');
});

