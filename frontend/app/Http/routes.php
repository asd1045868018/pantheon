<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//前台首页
Route::get('index','IndexController@index'); 
//登录页面
Route::get('login','IndexController@login'); 
//账号管理
Route::get('account','AccountController@index'); 
// 修改密码页面
Route::get('updatepwd','AccountController@updatepwd'); 
//修改密码
Route::post('uppwd_pro','AccountController@uppwd_pro'); 
// 账号信息即点即改
Route::post('upbind_pro','AccountController@upbind_pro'); 
//公司
Route::get('company','CompanyController@index');
//我的简历
Route::get('jianli','JianliController@index');
//发布职位
Route::get('Job','JobController@index');
//前台注册
Route::get('register','IndexController@register');
// 邮箱
Route::get('/send','AccountController@send');
// 个人简历
Route::get('getresume01','UserController@getresume01');
Route::get('getresume02','UserController@getresume02');
Route::get('getresume03','UserController@getresume03');
Route::get('getresume04','UserController@getresume04');
Route::post('postresume01','UserController@postresume01');
Route::post('postresume02','UserController@postresume02');
Route::post('postresume03','UserController@postresume03');
Route::post('postresume04','UserController@postresume04');
// 收藏的职位
Route::get('getcollections','UserController@getcollections');
// 已投递简历
Route::get('getdelivery','UserController@getdelivery');
