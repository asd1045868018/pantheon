<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Redirect;
use Route;
use Request;
use URL;
use DB;
use Session;
use Response;
use Cookie;
class UserController extends Controller
{
	// 简历添加页面
    public function getresume()
    {
    	//查询属性
    	$education=DB::table('pan_property')->where('pro_type','education')->get();//学历
    	$experience=DB::table('pan_property')->where('pro_type','experience')->get();//工作年限
    	$work_status=DB::table('pan_property')->where('pro_type','work_status')->get();//工作状态
    	// print_r($experience);die;
        return view('resume',['education'=>$education,'experience'=>$experience,'work_status'=>$work_status]);
    }
    // 简历添加
    public function postresume()
    {
    	$arr=Request::input();
    	print_r($arr);
    	
    	
    }
    // 收藏的职位
    public function getcollections()
    {
    	return view('collections');
    }
    // 投递的简历
    public function getdelivery()
    {
    	return view('delivery');
    }

}
?>