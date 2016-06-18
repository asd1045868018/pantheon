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
Route::get('login','LoginController@login'); 
//展示注册页面
Route::get('regist','LoginController@regist'); 
//添加注册信息
Route::get('adminadd','LoginController@adminadd'); 
//登录
Route::get('sign','LoginController@sign');
//退出
Route::get('quit','LoginController@quit');
//找回密码-页面
Route::get('reset','LoginController@reset');
//找回密码-发送邮件
Route::get('/sender','LoginController@send');
//找回密码-邮箱验证
Route::get('acter','LoginController@acter');
//找回密码-重置密码页面
Route::any('two','LoginController@two');
//找回密码-重置密码
Route::any('success','LoginController@success');
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
Route::get('getresume','UserController@getresume');
Route::post('postresume','UserController@postresume');
// 收藏的职位
Route::get('getcollections','UserController@getcollections');
// 已投递简历
Route::get('getdelivery','UserController@getdelivery');
//个人信息-验证原密码
Route::get('upwd','LoginController@date');
//个人信息-修改
 Route::post('uppwd_pro','LoginController@uppwd');

