<!DOCTYPE html>
<html xmlns:wb="http://open.weibo.com/wb">
 <head> 
  <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
  <script src="style/js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script> 
  <style type="text/css"></style> 
  <meta content="no-siteapp" http-equiv="Cache-Control" /> 
  <link media="handheld" rel="alternate" /> 
  <!-- end 云适配 --> 
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" /> 
  <title>我的简历-拉勾网-最专业的互联网招聘平台</title> 
  <meta content="23635710066417756375" property="qc:admins" /> 
  <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网" /> 
  <meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" /> 
  <meta content="QIQ6KC1oZ6" name="baidu-site-verification" /> 
  <!-- <div class="web_root"  style="display:none">h</div> --> 
  <link href="h/images/favicon.ico" rel="Shortcut Icon" /> 
  <link href="style/css/style.css" type="text/css" rel="stylesheet" /> 
  <link href="style/css/external.min.css" type="text/css" rel="stylesheet" /> 
  <link href="style/css/popup.css" type="text/css" rel="stylesheet" /> 
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
  <script src="style/js/ajaxCross.json" charset="UTF-8"></script>
 </head> 
 <body> 
  <div id="body">
    @include('top') 
   <div id="container"> 
    <div class="clearfix"> 
     <div class="profile_box" id="expectJob"> 
      <span class="c_edit dn"></span> 
      <div class="expectShow dn"> 
       <span></span> 
      </div> 
      <!--end .expectShow--> 
      <div class="expectEdit dn" style="display:block;"> 
       <form action="postresume02" method="post" ="" id="expectForm" > 
        <table> 
         <tbody> 
         <tr>
          	<td colspan="3"><h2>期望工作</h2></td>
          </tr>
          <tr> 
           <td> <input type="hidden" id="expectCity" value="" name="re_city" /> <input type="button" value="期望城市，如：北京" id="select_expectCity" class="profile_select_287 profile_select_normal" />
           <input type="hidden" name="_token" value="<?= csrf_token() ?>" /> 
            <div class="boxUpDown boxUpDown_596 dn" id="box_expectCity" style="display: none;"> 
             <dl> 
              <dt>
                热门城市 
              </dt> 
              <dd> 
               <span>北京</span> 
               <span>上海</span> 
               <span>广州</span> 
               <span>深圳</span> 
               <span>成都</span> 
               <span>杭州</span> 
              </dd> 
             </dl> 
             <dl> 
              <dt>
                ABCDEF 
              </dt> 
              <dd> 
               <span>北京</span> 
               <span>长春</span> 
               <span>成都</span> 
               <span>重庆</span> 
               <span>长沙</span> 
               <span>常州</span> 
               <span>东莞</span> 
               <span>大连</span> 
               <span>佛山</span> 
               <span>福州</span> 
              </dd> 
             </dl> 
             <dl> 
              <dt>
                GHIJ 
              </dt> 
              <dd> 
               <span>贵阳</span> 
               <span>广州</span> 
               <span>哈尔滨</span> 
               <span>合肥</span> 
               <span>海口</span> 
               <span>杭州</span> 
               <span>惠州</span> 
               <span>金华</span> 
               <span>济南</span> 
               <span>嘉兴</span> 
              </dd> 
             </dl> 
             <dl> 
              <dt>
                KLMN 
              </dt> 
              <dd> 
               <span>昆明</span> 
               <span>廊坊</span> 
               <span>宁波</span> 
               <span>南昌</span> 
               <span>南京</span> 
               <span>南宁</span> 
               <span>南通</span> 
              </dd> 
             </dl> 
             <dl> 
              <dt>
                OPQR 
              </dt> 
              <dd> 
               <span>青岛</span> 
               <span>泉州</span> 
              </dd> 
             </dl> 
             <dl> 
              <dt>
                STUV 
              </dt> 
              <dd> 
               <span>上海</span> 
               <span>石家庄</span> 
               <span>绍兴</span> 
               <span>沈阳</span> 
               <span>深圳</span> 
               <span>苏州</span> 
               <span>天津</span> 
               <span>太原</span> 
               <span>台州</span> 
              </dd> 
             </dl> 
             <dl> 
              <dt>
                WXYZ 
              </dt> 
              <dd> 
               <span>武汉</span> 
               <span>无锡</span> 
               <span>温州</span> 
               <span>西安</span> 
               <span>厦门</span> 
               <span>烟台</span> 
               <span>珠海</span> 
               <span>中山</span> 
               <span>郑州</span> 
              </dd> 
             </dl> 
            </div> </td> 
           <td> 
            <ul class="profile_radio clearfix reset"> 
            @foreach($wk_type as $k=>$v)
             <li @if($v->pro_name == '全职') class="current" @endif >{{$v->pro_name}}<em></em> <input type="radio" @if($v->pro_name == '全职') checked @endif name="re_job" value="{{$v->pro_name}}" /> </li> 
            @endforeach
            </td> 
          </tr> 
          <tr> 
           <td> <input type="text" placeholder="期望职位，如：产品经理" value="" name="re_position" id="expectPosition" /> </td> 
           <td> <input type="hidden" id="expectSalary" value="" name="re_salsry" /> <input type="button" value="期望月薪" id="select_expectSalary" class="profile_select_287 profile_select_normal" /> 
            <div class="boxUpDown boxUpDown_287 dn" id="box_expectSalary" style="display: none;"> 
             <ul> 
             @foreach($salsry as $kk=>$vv)
              <li id="{{$vv->pro_id}}">{{$vv->pro_name}}</li> 
             @endforeach
             </ul> 
            </div> </td> 
          </tr>
          <tr>
          	<td colspan="3"><h2>工作经历</h2></td>
          </tr>
          <tr> 
            <td> <input type="text" placeholder="公司名称" name="company['name']" class="companyName" /> </td> 
            <td> <input type="text" placeholder="职位名称，如：产品经理" name="company['positionName']" class="positionName" /> </td> 
           </tr> 
           <tr> 
            <td> 
             <div class="fl"> 
              <input type="hidden" class="companyYearStart" value="" name="company['YearStart']" /> 
              <input type="button" value="开始年份" class="profile_select_139 profile_select_normal select_companyYearStart" /> 
              <div class="box_companyYearStart boxUpDown boxUpDown_139 dn" style="display: none;"> 
               <ul> 
                <li>2014</li> 
                <li>2013</li> 
                <li>2012</li> 
                <li>2011</li> 
                <li>2010</li> 
                <li>2009</li> 
                <li>2008</li> 
                <li>2007</li> 
                <li>2006</li> 
                <li>2005</li> 
                <li>2004</li> 
                <li>2003</li> 
                <li>2002</li> 
                <li>2001</li> 
                <li>2000</li> 
                <li>1999</li> 
                <li>1998</li> 
                <li>1997</li> 
                <li>1996</li> 
                <li>1995</li> 
                <li>1994</li> 
                <li>1993</li> 
                <li>1992</li> 
                <li>1991</li> 
                <li>1990</li> 
                <li>1989</li> 
               </ul> 
              </div> 
             </div> 
             <div class="fl"> 
              <input type="hidden" class="companyMonthStart" value="" name="company['MonthStart']" /> 
              <input type="button" value="开始月份" class="profile_select_139 profile_select_normal select_companyMonthStart" /> 
              <div style="display: none;" class="box_companyMonthStart boxUpDown boxUpDown_139 dn"> 
               <ul> 
                <li>01</li>
                <li>02</li>
                <li>03</li>
                <li>04</li>
                <li>05</li>
                <li>06</li>
                <li>07</li>
                <li>08</li>
                <li>09</li>
                <li>10</li>
                <li>11</li>
                <li>12</li> 
               </ul> 
              </div> 
             </div> 
             <div class="clear"></div> </td> 
            <td> 
             <div class="fl"> 
              <input type="hidden" class="companyYearEnd" value="" name="company['YearEnd']" /> 
              <input type="button" value="结束年份" class="profile_select_139 profile_select_normal select_companyYearEnd" /> 
              <div class="box_companyYearEnd  boxUpDown boxUpDown_139 dn" style="display: none;"> 
               <ul> 
                <li>至今</li> 
                <li>2014</li> 
                <li>2013</li> 
                <li>2012</li> 
                <li>2011</li> 
                <li>2010</li> 
                <li>2009</li> 
                <li>2008</li> 
                <li>2007</li> 
                <li>2006</li> 
                <li>2005</li> 
                <li>2004</li> 
                <li>2003</li> 
                <li>2002</li> 
                <li>2001</li> 
                <li>2000</li> 
                <li>1999</li> 
                <li>1998</li> 
                <li>1997</li> 
                <li>1996</li> 
                <li>1995</li> 
                <li>1994</li> 
                <li>1993</li> 
                <li>1992</li> 
                <li>1991</li> 
                <li>1990</li> 
                <li>1989</li> 
                <li>1988</li> 
                <li>1987</li> 
                <li>1986</li> 
                <li>1985</li> 
                <li>1984</li> 
                <li>1983</li> 
                <li>1982</li> 
                <li>1981</li> 
                <li>1980</li> 
                <li>1979</li> 
                <li>1978</li> 
                <li>1977</li> 
                <li>1976</li> 
                <li>1975</li> 
                <li>1974</li> 
                <li>1973</li> 
                <li>1972</li> 
                <li>1971</li> 
                <li>1970</li> 
               </ul> 
              </div> 
             </div> 
             <div class="fl"> 
              <input type="hidden" class="companyMonthEnd" value="" name="company['MonthEnd']" /> 
              <input type="button" value="结束月份" class="profile_select_139 profile_select_normal select_companyMonthEnd" /> 
              <div style="display: none;" class="box_companyMonthEnd boxUpDown boxUpDown_139 dn"> 
               <ul> 
                <li>01</li>
                <li>02</li>
                <li>03</li>
                <li>04</li>
                <li>05</li>
                <li>06</li>
                <li>07</li>
                <li>08</li>
                <li>09</li>
                <li>10</li>
                <li>11</li>
                <li>12</li> 
               </ul> 
              </div> 
             </div> 
             <div class="clear"></div> </td> 
           </tr> 
           <tr>
            	<td colspan="2"><h2>项目经验</h2></td>
            </tr> 
            <tr> 
            <td> <input type="text" placeholder="项目名称" name="project['name']" class="projectName" /> </td> 
            <td> <input type="text" placeholder="担任职务，如：产品负责人" name="project['thePost']" class="thePost" /> </td> 
           </tr> 
           <tr> 
            <td> 
             <div class="fl"> 
              <input type="hidden" class="projectYearStart" value="" name="project['YearStart']" /> 
              <input type="button" value="开始年份" class="profile_select_139 profile_select_normal select_projectYearStart" /> 
              <div class="box_projectYearStart  boxUpDown boxUpDown_139 dn" style="display: none;"> 
               <ul> 
                <li>2014</li> 
                <li>2013</li> 
                <li>2012</li> 
                <li>2011</li> 
                <li>2010</li> 
                <li>2009</li> 
                <li>2008</li> 
                <li>2007</li> 
                <li>2006</li> 
                <li>2005</li> 
                <li>2004</li> 
                <li>2003</li> 
                <li>2002</li> 
                <li>2001</li> 
                <li>2000</li> 
                <li>1999</li> 
                <li>1998</li> 
                <li>1997</li> 
                <li>1996</li> 
                <li>1995</li> 
                <li>1994</li> 
                <li>1993</li> 
                <li>1992</li> 
                <li>1991</li> 
                <li>1990</li> 
                <li>1989</li> 
                <li>1988</li> 
                <li>1987</li> 
                <li>1986</li> 
                <li>1985</li> 
                <li>1984</li> 
                <li>1983</li> 
                <li>1982</li> 
                <li>1981</li> 
                <li>1980</li> 
                <li>1979</li> 
                <li>1978</li> 
                <li>1977</li> 
                <li>1976</li> 
                <li>1975</li> 
                <li>1974</li> 
                <li>1973</li> 
                <li>1972</li> 
                <li>1971</li> 
                <li>1970</li> 
               </ul> 
              </div> 
             </div> 
             <div class="fl"> 
              <input type="hidden" class="projectMonthStart" value="" name="project['MonthStart']" /> 
              <input type="button" value="开始月份" class="profile_select_139 profile_select_normal select_projectMonthStart" /> 
              <div style="display: none;" class="box_projectMonthStart boxUpDown boxUpDown_139 dn"> 
               <ul> 
                <li>01</li>
                <li>02</li>
                <li>03</li>
                <li>04</li>
                <li>05</li>
                <li>06</li>
                <li>07</li>
                <li>08</li>
                <li>09</li>
                <li>10</li>
                <li>11</li>
                <li>12</li> 
               </ul> 
              </div> 
             </div> 
             <div class="clear"></div> </td> 
            <td> 
             <div class="fl"> 
              <input type="hidden" class="projectYearEnd" value="" name="project['YearEnd']" /> 
              <input type="button" value="结束年份" class="profile_select_139 profile_select_normal select_projectYearEnd" /> 
              <div class="box_projectYearEnd  boxUpDown boxUpDown_139 dn" style="display: none;"> 
               <ul> 
                <li>至今</li> 
                <li>2014</li> 
                <li>2013</li> 
                <li>2012</li> 
                <li>2011</li> 
                <li>2010</li> 
                <li>2009</li> 
                <li>2008</li> 
                <li>2007</li> 
                <li>2006</li> 
                <li>2005</li> 
                <li>2004</li> 
                <li>2003</li> 
                <li>2002</li> 
                <li>2001</li> 
                <li>2000</li> 
                <li>1999</li> 
                <li>1998</li> 
                <li>1997</li> 
                <li>1996</li> 
                <li>1995</li> 
                <li>1994</li> 
                <li>1993</li> 
                <li>1992</li> 
                <li>1991</li> 
                <li>1990</li> 
                <li>1989</li> 
                <li>1988</li> 
                <li>1987</li> 
                <li>1986</li> 
                <li>1985</li> 
                <li>1984</li> 
                <li>1983</li> 
                <li>1982</li> 
                <li>1981</li> 
                <li>1980</li> 
                <li>1979</li> 
                <li>1978</li> 
                <li>1977</li> 
                <li>1976</li> 
                <li>1975</li> 
                <li>1974</li> 
                <li>1973</li> 
                <li>1972</li> 
                <li>1971</li> 
                <li>1970</li> 
               </ul> 
              </div> 
             </div> 
             <div class="fl"> 
              <input type="hidden" class="projectMonthEnd" value="" name="project['MonthEnd']" /> 
              <input type="button" value="结束月份" class="profile_select_139 profile_select_normal select_projectMonthEnd" /> 
              <div style="display: none;" class="box_projectMonthEnd boxUpDown boxUpDown_139 dn"> 
               <ul> 
                <li>01</li>
                <li>02</li>
                <li>03</li>
                <li>04</li>
                <li>05</li>
                <li>06</li>
                <li>07</li>
                <li>08</li>
                <li>09</li>
                <li>10</li>
                <li>11</li>
                <li>12</li> 
               </ul> 
              </div> 
             </div> 
             <div class="clear"></div> </td> 
           </tr> 
           <tr> 
            <td colspan="3"> <textarea class="projectDescription s_textarea" name="project['Description']" placeholder="项目描述"></textarea> 
             <div class="word_count">
              你还可以输入 
              <span>500</span> 字
             </div> </td> 
           </tr> 
          <tr>
          	<td><h2>教育背景<span>（投递简历时必填）</span></h2> </td>
          </tr>
          <tr> 
            <td> <input type="text" placeholder="学校名称" name="school['Name']" class="schoolName" /> </td> 
            <td> <input type="hidden" class="degree" value="" name="school['degree']" /> <input type="button" value="学历" class="profile_select_287 profile_select_normal select_degree" /> 
             <div class="box_degree boxUpDown boxUpDown_287 dn" style="display: none;"> 
              <ul> 
               <li>大专</li> 
               <li>本科</li> 
               <li>硕士</li> 
               <li>博士</li> 
               <li>其他</li> 
              </ul> 
             </div> </td> 
           </tr> 
           <tr> 
            <td> <input type="text" placeholder="专业名称" name="school['professionalName']" class="professionalName" /> </td> 
            <td> 
             <div class="fl"> 
              <input type="hidden" class="schoolYearStart" value="" name="school['YearStart']" /> 
              <input type="button" value="开始年份" class="profile_select_139 profile_select_normal select_schoolYearStart" /> 
              <div class="box_schoolYearStart boxUpDown boxUpDown_139 dn" style="display: none;"> 
               <ul> 
                <li>2014</li> 
                <li>2013</li> 
                <li>2012</li> 
                <li>2011</li> 
                <li>2010</li> 
                <li>2009</li> 
                <li>2008</li> 
                <li>2007</li> 
                <li>2006</li> 
                <li>2005</li> 
                <li>2004</li> 
                <li>2003</li> 
                <li>2002</li> 
                <li>2001</li> 
                <li>2000</li> 
                <li>1999</li> 
                <li>1998</li> 
                <li>1997</li> 
                <li>1996</li> 
                <li>1995</li> 
                <li>1994</li> 
                <li>1993</li> 
                <li>1992</li> 
                <li>1991</li> 
                <li>1990</li> 
                <li>1989</li> 
                <li>1988</li> 
                <li>1987</li> 
                <li>1986</li> 
                <li>1985</li> 
                <li>1984</li> 
                <li>1983</li> 
                <li>1982</li> 
                <li>1981</li> 
                <li>1980</li> 
                <li>1979</li> 
                <li>1978</li> 
                <li>1977</li> 
                <li>1976</li> 
                <li>1975</li> 
                <li>1974</li> 
                <li>1973</li> 
                <li>1972</li> 
                <li>1971</li> 
                <li>1970</li> 
               </ul> 
              </div> 
             </div> 
             <div class="fl"> 
              <input type="hidden" class="schoolYearEnd" value="" name="school['YearEnd']" /> 
              <input type="button" value="结束年份" class="profile_select_139 profile_select_normal select_schoolYearEnd" /> 
              <div style="display: none;" class="box_schoolYearEnd  boxUpDown boxUpDown_139 dn"> 
               <ul> 
                <li>2021</li> 
                <li>2020</li> 
                <li>2019</li> 
                <li>2018</li> 
                <li>2017</li> 
                <li>2016</li> 
                <li>2015</li> 
                <li>2014</li> 
                <li>2013</li> 
                <li>2012</li> 
                <li>2011</li> 
                <li>2010</li> 
                <li>2009</li> 
                <li>2008</li> 
                <li>2007</li> 
                <li>2006</li> 
                <li>2005</li> 
                <li>2004</li> 
                <li>2003</li> 
                <li>2002</li> 
                <li>2001</li> 
                <li>2000</li> 
                <li>1999</li> 
                <li>1998</li> 
                <li>1997</li> 
                <li>1996</li> 
                <li>1995</li> 
                <li>1994</li> 
                <li>1993</li> 
                <li>1992</li> 
                <li>1991</li> 
                <li>1990</li> 
                <li>1989</li> 
                <li>1988</li> 
                <li>1987</li> 
                <li>1986</li> 
                <li>1985</li> 
                <li>1984</li> 
                <li>1983</li> 
                <li>1982</li> 
                <li>1981</li> 
                <li>1980</li> 
                <li>1979</li> 
                <li>1978</li> 
                <li>1977</li> 
                <li>1976</li> 
                <li>1975</li> 
                <li>1974</li> 
                <li>1973</li> 
                <li>1972</li> 
                <li>1971</li> 
                <li>1970</li> 
               </ul> 
              </div> 
             </div> 
             <div class="clear"></div> </td> 
           </tr> 
          <tr> 
           <td colspan="2"> <input type="submit" value="保 存" class="btn_profile_save" /> <a class="btn_profile_cancel" href="javascript:;">取 消</a> </td> 
          </tr> 
         </tbody> 
        </table> 
       </form> 
       <!--end #expectForm--> 
      </div> 
      <!--end .expectEdit--> 
      
      <!--end .expectAdd--> 
      <input type="hidden" id="expectJobVal" value="" /> 
      <input type="hidden" id="expectCityVal" value="" /> 
      <input type="hidden" id="typeVal" value="" /> 
      <input type="hidden" id="expectPositionVal" value="" /> 
      <input type="hidden" id="expectSalaryVal" value="" /> 
     </div> 
     <!--end #expectJob--> 
    </div>
    <!--end .basicEdit--> 
    <script src="style/js/Chart.min.js" type="text/javascript"></script> 
    <script src="style/js/profile.min.js" type="text/javascript"></script> 
    <!-- <div id="profileOverlay"></div> --> 
    <div class="" id="qr_cloud_resume" style="display: none;"> 
     <div class="cloud"> 
      <img width="134" height="134" src="" /> 
      <a class="close" href="javascript:;"></a> 
     </div> 
    </div> 
    <div class="clear"></div> 
    <input type="hidden" value="97fd449bcb294153a671f8fe6f4ba655" id="resubmitToken" /> 
    <a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a> 
   </div>
   <!-- end #container --> 
  </div>
  <!-- end #body --> 
  <div id="footer"> 
   <div class="wrapper"> 
    <a rel="nofollow" target="_blank" href="h/about.html">联系我们</a> 
    <a target="_blank" href="h/af/zhaopin.html">互联网公司导航</a> 
    <a rel="nofollow" target="_blank" href="http://e.weibo.com/lagou720">拉勾微博</a> 
    <a rel="nofollow" href="javascript:void(0)" class="footer_qr">拉勾微信<i></i></a> 
    <div class="copyright">
     &copy;2013-2014 Lagou 
     <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">京ICP备14023790号-2</a>
    </div> 
   </div> 
  </div> 
  <script src="style/js/core.min.js" type="text/javascript"></script> 
  <script src="style/js/popup.min.js" type="text/javascript"></script> 
  <!--  --> 
  <div id="cboxOverlay" style="display: none;"></div>
  <div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
   <div id="cboxWrapper">
    <div>
     <div id="cboxTopLeft" style="float: left;"></div>
     <div id="cboxTopCenter" style="float: left;"></div>
     <div id="cboxTopRight" style="float: left;"></div>
    </div>
    <div style="clear: left;">
     <div id="cboxMiddleLeft" style="float: left;"></div>
     <div id="cboxContent" style="float: left;">
      <div id="cboxTitle" style="float: left;"></div>
      <div id="cboxCurrent" style="float: left;"></div>
      <button type="button" id="cboxPrevious"></button>
      <button type="button" id="cboxNext"></button>
      <button id="cboxSlideshow"></button>
      <div id="cboxLoadingOverlay" style="float: left;"></div>
      <div id="cboxLoadingGraphic" style="float: left;"></div>
     </div>
     <div id="cboxMiddleRight" style="float: left;"></div>
    </div>
    <div style="clear: left;">
     <div id="cboxBottomLeft" style="float: left;"></div>
     <div id="cboxBottomCenter" style="float: left;"></div>
     <div id="cboxBottomRight" style="float: left;"></div>
    </div>
   </div>
   <div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div>
  </div>
 </body>
</html>