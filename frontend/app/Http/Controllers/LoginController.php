<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Input;
use DB;
use Request;
use Session;
use Mail;
class LoginController extends Controller
{
   public function index()
  {
    return view('index');
  }
	public function login(){
		return view('login');
	}
   //展示注册页面
    public function regist(){
    	return view('regist');
    }
    //展示找回密码页
    public function reset(){
    	return view('reset');
    }
    //注册登录
    public function adminadd(){
	 	// $arr= Request::input($email);
	 	$type = Input::get('type');
        $name = Input::get('email');
        $password = md5(Input::get('password'));
        // $user = DB::table('pan_user')->first();
        $arr=DB::select("select count(*)as num from pan_user where us_email='$name'");
        $object =  json_decode( json_encode($arr),true);
        // print_r($object);die;
	    if($object[0]['num']<1){
	     $id=DB::table('pan_user')->insertGetId(['us_email'=>$name,'us_name'=>$name,'us_pwd'=>$password,'us_state'=>'0','us_type'=>$type]);
	    //$aa=Session::get('email');
		    if($id){
          $as = DB::select("select us_id,us_name,us_type from pan_user where us_id ='$id'");
		    	Session::put('user', $as[0]);
		    	
	          // Session::get($name);
	          echo "<script>alert('注册成功');location.href='index'</script>";
	           // return view('index');
		    }else{
		    	echo "<script>alert('注册失败');location.href='regist'</script>";
		    }
		}else{
	       echo "<script>alert('用户名已被注册');location.href='regist'</script>";
		}
	}
    //登录
    public function sign(){
    	$email = Input::get('email');
        $password =md5(Input::get('password'));
        $arr = DB::select("select us_id,us_name,us_type from pan_user where us_email ='$email' and us_pwd='$password' ");
        // $arr = DB::table('pan_user')->select()->where("us_email =$email and us_pwd=$password")->get();
        
        if($arr){
        	Session::put('user', $arr[0]);
            echo "<script>alert('登录成功');location.href='index'</script>";
        }else{
        	echo "<script>alert('登录失败');location.href='login'</script>";
        }
    }
    //退出
    public function quit(){
       if (Session::has('user')) {
            $is_forgotten = Session::forget('user');
            if ($is_forgotten === null)
           echo "<script>alert('退出成功');location.href='index'</script>";
        }else{
        	echo "<script>alert('退出失败');location.href='index'</script>";
        }
        
    }
    //找回密码
    public function send(){
    	$email = Input::get('email');
    	$arr=DB::select("select (us_id) from pan_user where us_email='$email'");
        $object =  json_decode( json_encode($arr),true);
        // print_r($object);die;
    	Session::put('id',$object[0]['us_id']);
    	$data = [
		'email'=>$email, 
		'name'=>'demo', 
		'uid'=>$object[0]['us_id'],
		'code'=>md5($email.$object[0]['us_id'])
		];
		Mail::send('activemail', $data, function($message) use($data)
		{
		    $message->to($data['email'], $data['name'])->subject('欢迎注册我们的网站，请激活您的账号！');
		});
    echo "<script>location.href='login'</script>";
    }
    public function acter(){
       $id=Input::get('uid');
       $activationcode=Input::get('activationcode');
       $arr=DB::select("select * from pan_user where us_id='$id'");
       $object =  json_decode( json_encode($arr),true);
       $uu=md5($object[0]['us_email'].$object[0]['us_id']);
       if($activationcode==$uu){
        Session::put('uid',$id);
          if($object[0]['us_state']>=1){
          	echo "<script>alert('邮箱验证成功');location.href='two'</script>";
          }elseif($object[0]['us_state']==0){
            $arr=DB::table('pan_user')
             ->where('us_id', $id)
             ->update(array('us_state' => 1));
          	echo "<script>alert('邮箱激活成功');location.href='two'</script>";
          }else{
            echo "<script>alert('邮箱激活失败');location.href='login'</script>";
          }  
       }else{
          echo "<script>alert('非法进入');location.href='login'</script>";
       }
    }
    
    public function two(){
      return view('two');
    }

    /**
     * 设置新密码
     */
    public function success()
    {
       $id=Input::get('uid');
       $wd=Input::get('email');
       $pwd=md5($wd);
       $arr=DB::table('pan_user')
             ->where('us_id', $id)
             ->update(array('us_pwd' => $pwd));
       if($arr){
          echo "<script>alert('修改成功');location.href='login'</script>";
       }else{
          echo "<script>alert('修改失败');location.href='two'</script>";
       }
    }
    /**
     * 个人信息-验证密码
     */
    public function date(){
      $pwd=Input::get('pwd');
      $password=md5($pwd);
      echo $password;
    }
    /**
     * 个人信息-修改
     */
    public function uppwd(){
      $wd=request::input('newpassword');
      $id=request::input('id');
      $pwd=md5($wd);
       $arr=DB::table('pan_user')
             ->where('us_id', $id)
             ->update(array('us_pwd' => $pwd));
       if($arr){
          $is_forgotten = Session::forget('user');
          echo "<script>alert('修改成功,请重新登录');location.href='login'</script>";
       }else{
          echo "<script>alert('修改失败');location.href='updatepwd'</script>";
       }
    }
}