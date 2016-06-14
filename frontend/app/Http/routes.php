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
// 个人中心
Route::get('usercenter','User_ManController@index'); 