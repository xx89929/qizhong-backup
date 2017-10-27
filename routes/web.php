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
Route::get('test','TestController@index')->name('test');

Route::group(['middleware'=> ['web'],'namespace' => 'Home'],function(){
    Route::get('/','HomeController@index')->name('/');
    Route::get('BusinessIndex/{id}','HomeController@business_index')->name('business_index');
    Route::post('save_lookup','HomeController@save_lookup')->name('save_lookup');
    Route::get('aboutus/index','HomeController@aboutus_index')->name('aboutus_index');
    Route::post('chooseupadd','HomeController@save_choose_up')->name('chooseup_add');
});


Route::group(['namespace' => 'Auth'],function(){
    Route::get('login','LoginController@showLoginForm')->name('login');
    Route::post('login','LoginController@login')->name('login');
    Route::get('register','RegisterController@showRegistrationForm')->name('register');
    Route::post('register','RegisterController@register')->name('register');
});




/**
 * 后台路由
 */
Route::group(['middleware' => ['auth'],'prefix' => 'admin','namespace' => 'Admin'], function () {



    Route::get('index','IndexController@index')->name('admin');


    /**Bussiness**/
    Route::get('business/index','BusinessController@index')->name('bus_index');
    Route::get('business/get_business','BusinessController@get_business')->name('get_business');
    Route::match(['post','get'],'business/create','BusinessController@create')->name('bus_create');
    Route::match(['post','get'],'business/update/{id?}','BusinessController@update')->name('bus_update');
    Route::get('business/del/{id?}','BusinessController@del')->name('bus_del');

    /****looup****/
    Route::get('lookup/index','LookupController@index')->name('lookup');
    Route::get('lookup/get_lookup','LookupController@get_lookup')->name('get_lookup');
    Route::match(['post','get'],'lookup/create','LookupController@create')->name('lp_create');
    Route::match(['post','get'],'lookup/update/{id?}','LookupController@update')->name('lp_update');
    Route::get('lookup/del/{id?}','LookupController@del')->name('lp_del');


    /****choose****/
    Route::get('chooseup/index','ChooseUpController@index')->name('chooseup');
    Route::get('chooseup/getchooseup','ChooseUpController@get_chooseup')->name('get_chooseup');
    Route::match(['post','get'],'chooseup/choosecreate','ChooseUpController@create')->name('choose_create');
    Route::match(['post','get'],'chooseup/update/{id?}','ChooseUpController@update')->name('choose_update');
    Route::get('choose/del/{id?}','ChooseUpController@del')->name('choose_del');


    /****administritor****/
    Route::get('welcome','IndexController@welcome')->name('welcome');
    Route::get('member/list','MemberController@index')->name('member_list');
    Route::get('business','BusinessController@index')->name('business');
    Route::get('logout','IndexController@logout')->name('logout');
});

