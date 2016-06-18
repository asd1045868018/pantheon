<div id="header">
    <div class="wrapper">
        <a href="index.html" class="logo">
            <img src="style/images/logo.png" width="229" height="43" alt="拉勾招聘-专注互联网招聘" />
        </a>
        <ul class="reset" id="navheader">
            <li class="current"><a href="{{URL('index')}}">首页</a></li>
            <li ><a href="{{URL('company')}}" >公司</a></li>
            <li ><a href="{{URL('jianli')}}" rel="nofollow">我的简历</a></li>
            <li ><a href="{{URL('Job')}}" rel="nofollow">发布职位</a></li>
        </ul>
        @if(!Session::has('user'))
        <ul class="loginTop" >
            <li><a href="{{URL('login')}}" rel="nofollow">登录</a></li>
            <li>|</li>
            <li><a href="{{URL('regist')}}" rel="nofollow">注册</a></li>
        </ul>
        @else
        <dl class="collapsible_menu">
            <dt>
                <span>{{Session::get('user')->us_name}}&nbsp;</span> 
                <span class="red dn" id="noticeDot-1"></span>
                <i></i>
            </dt>
            @if(Session::get('user')->us_type)
            <dd><a href="positions.html">我发布的职位</a></dd>
            <dd><a href="positions.html">我收到的简历</a></dd>
            <dd class="btm"><a href="myhome.html">我的公司主页</a></dd>
            @else
            <dd><a rel="nofollow" href="{{URL('jianli')}}">我的简历</a></dd>
            <dd><a rel="nofollow" href="{{URL('getdelivery')}}">已投递简历</a></dd>
            <dd class="btm"><a href="{{URL('getcollections')}}">我收藏的职位</a></dd>
            @endif
            <dd><a href="{{URL('account')}}">帐号设置</a></dd>
            <dd class="logout"><a rel="nofollow" href="{{URL('quit')}}">退出</a></dd>
        </dl>
        @endif
    </div>
</div><!-- end #header -->