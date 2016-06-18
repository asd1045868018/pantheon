<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
</script><script type="text/javascript" async="" src="style/js/conversion.js"></script><script src="style/js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script><style type="text/css"></style>
<meta content="no-siteapp" http-equiv="Cache-Control">
<link  media="handheld" rel="alternate">
<!-- end 云适配 -->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>修改密码-拉勾网-最专业的互联网招聘平台</title>
<meta content="23635710066417756375" property="qc:admins">
<meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
<meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
<meta content="QIQ6KC1oZ6" name="baidu-site-verification">

<!-- <div class="web_root"  style="display:none">h</div> -->
<script type="text/javascript">
var ctx = "h";
console.log(1);
</script>
<link href="h/images/favicon.ico" rel="Shortcut Icon">
<link href="style/css/style.css" type="text/css" rel="stylesheet">
<link href="style/css/external.min.css" type="text/css" rel="stylesheet">
<link href="style/css/popup.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="style/js/jquery.1.10.1.min.js"></script>
<script src="style/js/jquery.lib.min.js" type="text/javascript"></script>
<script type="text/javascript" src="style/js/ajaxfileupload.js"></script>
<script src="style/js/additional-methods.js" type="text/javascript"></script>
<!--[if lte IE 8]>
    <script type="text/javascript" src="style/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script src="style/js/conv.js" type="text/javascript"></script>
<script src="style/js/ajaxCross.json" charset="UTF-8"></script></head>
<body>
<div id="body">
	@include('top')
    <div id="container">
        	<div class="user_bindSidebar">
    <dl id="user_sideBarmenu" class="user_sideBarmenu">
     	        <dt><h3>帐号设置</h3></dt>
                <dd><a href="{{'account'}}">帐号信息</a></dd>
        <dd><a class="hover" href="{{'updatepwd'}}">修改密码</a></dd>
            </dl>
</div>
<input type="hidden" id="hasSidebar" value="1">	<div class="content user_modifyContent">
        <dl class="c_section">
            <dt>
            	<h2><em></em>修改密码</h2>
            </dt>
            <dd>
            	  <form  method="post" action="{{'uppwd_pro'}}" onsubmit="return fun()">
                  <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token() ?>"/>
            		<table class="savePassword">
            			<tbody><tr>
            				<td>登录邮箱</td>
            				<td class="c7"><?= $user->us_email?></td>
            			</tr>
            			<tr>
            				<td class="label">当前密码<span style="color:red">*</span></td>
            				<td>
                                <input type="hidden" id='aa' value="<?= $user->us_pwd?>">
            					<input type="password" onblur="check_a()"  maxlength="16" id="oldpassword" name="oldpassword" style="background-image: url(style/images/img/0CQnd2Jos49xUAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
            					<span id="updatePwd_beError" style="display:none;" class="error">
            				</span></td>            				
            			</tr>
            			<tr>

            				<td class="label">新密码<span style="color:red">*</span></td>
            				<td><input type="password" onblur="check_b()" maxlength="16" id="newpassword" name="newpassword" style="background-image: url(style/images/img/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;"><span id="s1" style="display:none;" class="error"></span></td>
            			</tr>
            			<tr>
            				<td class="label">确认密码<span style="color:red">*</span></td>
            				<td><input type="password" onblur="check_c()" maxlength="16" id="comfirmpassword" name="comfirmpassword" style="background-image: url(style/images/img/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;"><span id="s2" style="display:none;" class="error"></span></td>
            			</tr>
            			<tr>
            				<td>&nbsp; <input type="hidden" id='id'  name='id' value="<?= $user->us_id?>"></td>
            				<td><input type="submit" value="保 存"></td>
            			</tr>
            		</tbody></table>
				</form>
				            </dd>
        </dl>
    </div>
<script src="style/js/setting.js"></script>
			<div class="clear"></div>
			<input type="hidden" value="" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<div id="footer">
		<div class="wrapper">
			<a rel="nofollow" target="_blank" href="h/about.html">联系我们</a>
		    <a target="_blank" href="h/af/zhaopin.html">互联网公司导航</a>
		    <a rel="nofollow" target="_blank" href="http://e.weibo.com/lagou720">拉勾微博</a>
		    <a rel="nofollow" href="javascript:void(0)" class="footer_qr">拉勾微信<i></i></a>
			<div class="copyright">&copy;2013-2014 Lagou <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">京ICP备14023790号-2</a></div>
		</div>
	</div>

<script src="style/js/core.min.js" type="text/javascript"></script>
<script src="style/js/popup.min.js" type="text/javascript"></script>

<!--  -->


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>


<script>
var flage=false;
      /**
       * 验证原密码是否正确
       * @return {[type]} [description]
       */
      function check_a(){
         oldpassword=$("#oldpassword").val();
         if(oldpassword==''){
          $('#updatePwd_beError').html('不能为空').show();
          document.getElementById('updatePwd_beError').style.color='red';
          flage=false;
          return flage;
          exit;
         }
         aa=$('#aa').val();
         $.ajax({
          type:"get",
          url:"upwd?pwd="+oldpassword,
          success(e){
            if(e==aa){
             flage=true;
             return flage;
            }else{
             $('#updatePwd_beError').html('原密码错误').show();
             document.getElementById('updatePwd_beError').style.color='red';
             flage=false;
             return flage;
            }
          }
         })
         return flage;
      }
     /**
      * /验证新密码
      */
     function check_b(){
       newpassword=$("#newpassword").val();
       if(newpassword==''){
         $('#s1').html('不能为空').show();
         document.getElementById('s1').style.color='red';
         
         return false;
         exit;
       }else{
         
         return true;
       }
     }
     /**
      * 确认密码
      */
     function check_c(){
      comfirmpassword=$("#comfirmpassword").val();
      newpassword=$("#newpassword").val();
       if(comfirmpassword==''){
         $('#s2').html('不能为空').show();
         document.getElementById('s2').style.color='red';
         return false;
         exit;
       }
       if(comfirmpassword==newpassword){
        return true; 
           
       }else{
         $('#s2').html('确认密码不一致').show();
         document.getElementById('s2').style.color='red';
         return false;
       }
     }

     function fun(){
        if(check_a()&&check_b()&&check_c()){
           return true;
        }else{
            return false;
        }
     }
</script>