<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use DB;
use Session;
use Request;
use App\Http\Controllers\Controller;
use Mail;
class AccountController extends Controller
{
	/**
	 * 账号管理
	 * @return [type] [description]
	 */
	public function index()
	{
		$arr=Session::get('user');
		$object =  json_decode( json_encode($arr),true);
		$user = DB::table('pan_user')->where('us_id', $object['us_id'])->first();
		return view('accountBind',['user'=>$user]);
	}

	/**
	 * 修改账号密码
	 * @return [type] [description]
	 */
	public function updatepwd()
	{
		$arr=Session::get('user');
		 $object =  json_decode( json_encode($arr),true);
		return view('updatePwd',['user'=> DB::table('pan_user')->where('us_id',$object['us_id'])->first()]);
	}
		/**
	 * 修改账号密码
	 * @return [type] [description]
	 */
	public function uppwd_pro()
	{
		$oldpwd=Request::input('oldpassword');
		$newpwd=Request::input('newpassword');
		$comfirmpwd=Request::input('comfirmpassword');
		$pwd=DB::table('pan_user')->where('us_id','1')->value('us_pwd');
		if($pwd==$oldpwd){
			if($newpwd==$comfirmpwd){
				$re = DB::update("update pan_user set us_pwd = '$newpwd' where us_id = 1");
			}else{

			}
		}
	}
	/**
	 * 修改账号密码
	 * @return [type] [description]
	 */
	public function upbind_pro()
	{
		$value=Request::input('value');
		$ziduan=Request::input('ziduan');
		if($ziduan=='us_email'){
			//邮箱修改后把邮箱状态改为未验证
			$re = DB::update("update pan_user set $ziduan = '$value',us_state=0 where us_id = 1");
			$this->send();
		}else{
			$re = DB::update("update pan_user set $ziduan = '$value' where us_id = 1");
		}
		
		if($re){
			echo $re;
		}else{
			echo 0;
		}
	}
	public function send()
	{

		$data = [
		'email'=>'asd1045868018@qq.com', 
		'name'=>'demo', 
		'uid'=>1, 
		'activationcode'=>'213131'
		];
		Mail::send('activemail', $data, function($message) use($data)
		{
		    $message->to($data['email'], $data['name'])->subject('欢迎注册我们的网站，请激活您的账号！');
		});
	}
	public function getsess()
	{
		
	}

}