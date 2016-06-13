<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class IndexController extends Controller
{
	/**
     * 展示前台首页
     *
     * @param 
     * @return 视图层
     */
	public function index()
	{
		return view('index');
	}

	public function login()
	{
		return view('login');
	}
}