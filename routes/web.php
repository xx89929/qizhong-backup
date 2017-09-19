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
/*
Route::get('/', function () {
    return 'hello word';

});
*/

Route::group(['namespace' => 'Home'],function(){
    Route::get('/','HomeController@index')->name('/');
    Route::get('BusinessIndex/{id}','HomeController@business_index')->name('business_index');
    Route::post('save_lookup','HomeController@save_lookup')->name('save_lookup');
    Route::get('aboutus/index','HomeController@aboutus_index')->name('aboutus_index');
    Route::post('chooseupadd','HomeController@save_choose_up')->name('chooseup_add');
});


/**
 * 后台路由
 */
Route::group(['prefix' => 'admin','namespace' => 'Admin'], function () {
    Route::get('/','IndexController@index');
    Route::get('business/index','BusinessController@index')->name('bus_index');
    Route::match(['post','get'],'business/create','BusinessController@create')->name('bus_create');
    Route::match(['post','get'],'business/update/{id}','BusinessController@update')->name('bus_update');
    Route::get('business/del/{id}','BusinessController@del')->name('bus_del');
    Route::get('lookup/index','LookupController@index')->name('lookup');
    Route::get('choose_up/index','ChooseUpController@index')->name('choose_up');
});