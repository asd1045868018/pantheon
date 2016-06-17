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
    public function getresume01()
    {
    	//查询属性
    	$education=DB::table('pan_property')->where('pro_type','education')->get();//学历
    	$experience=DB::table('pan_property')->where('pro_type','experience')->get();//工作年限
    	$work_status=DB::table('pan_property')->where('pro_type','work_status')->get();//工作状态
    	// print_r($experience);die;
        return view('resume01',['education'=>$education,'experience'=>$experience,'work_status'=>$work_status]);
    }
    public function getresume02()
    {
        //查询属性
        $wk_type=DB::table('pan_property')->where('pro_type','wk_type')->get();//期望薪资
        $salsry=DB::table('pan_property')->where('pro_type','salsry')->get();//工作性质
        // print_r($experience);die;
        return view('resume02',['wk_type'=>$wk_type,'salsry'=>$salsry]);
    }
        public function getresume03()
    {
        //查询属性
        $education=DB::table('pan_property')->where('pro_type','education')->get();//学历
        $experience=DB::table('pan_property')->where('pro_type','experience')->get();//工作年限
        $work_status=DB::table('pan_property')->where('pro_type','work_status')->get();//工作状态
        // print_r($experience);die;
        return view('resume03',['education'=>$education,'experience'=>$experience,'work_status'=>$work_status]);
    }
        public function getresume04()
    {
        //查询属性
        $education=DB::table('pan_property')->where('pro_type','education')->get();//学历
        $experience=DB::table('pan_property')->where('pro_type','experience')->get();//工作年限
        $work_status=DB::table('pan_property')->where('pro_type','work_status')->get();//工作状态
        // print_r($experience);die;
        return view('resume04',['education'=>$education,'experience'=>$experience,'work_status'=>$work_status]);
    }

    // 简历添加
    public function postresume01()
    {
    	$arr=Request::input();
        $arr['us_id']=Session::get('user')->us_id;
    	unset($arr['_token']);
        $id=DB::table('pan_user_resume')->insertGetId($arr);
        Session::put('re_id',$id);
        return redirect('getresume02');
    }
    public function postresume02()
    {
        $arr=Request::input();
        $re_id=Session::get('re_id');
        $re_id=1;
        print_r($arr);die;
        $sql="UPDATE `pantheon`.`pan_user_resume` SET `re_city`='".$arr['re_city']."', `re_job`='".$arr['re_job']."', `re_position`='".$arr['re_position']."', `re_salsry`='".$arr['re_salsry']."' WHERE (`re_id`=".$re_id.")";
        DB::update($sql);
        return redirect('getresume03');
    }
    public function postresume03()
    {
        $arr=Request::input();
        $arr['us_id']=Session::get('user')->us_id;
        unset($arr['_token']);
        $id=DB::table('pan_user_resume')->updata('');
        return redirect('getresume04');
    }
    public function postresume04()
    {
        $arr=Request::input();
        $arr['us_id']=Session::get('user')->us_id;
        unset($arr['_token']);
        $id=DB::table('pan_user_resume')->insertGetId($arr);
        return redirect('getresume02');
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