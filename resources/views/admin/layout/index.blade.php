
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/d/plugins/colorpicker/colorpicker.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/d/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/d/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/d/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/d/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/d/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/themer.css" media="screen">
<link  rel="icon" href="{{ Config::get('app.icon') }}">
<title>@yield('title','Master')</title>
<link rel="stylesheet" type="text/css" href="/d/css/pages_pages.css">
<style type="text/css">
    #page_page{
        margin-left:20px;
    }
    #page_page ul,li{
        margin:0;
        padding:0;
        list-style: none;
    }
    #page_page li{
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #337ab7;
        text-decoration: none;
        background-color: #2E2E32;
        border: 1px solid #ddd;
        border-radius: 3px;
    }
    #page_page .active{
        color: #000;
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        text-decoration: none;
        background-color: #C2D12B;
        border: 1px solid #ddd;
    }
    #page_page .disabled{
        color: #666666;
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        text-decoration: none;
        background-color: #444444;
        border: 1px solid #ddd;
    }
    #page_page a{
        color:#fff;
    }
    .b-btn{
        line-height: 24px;
        height: 24px;
        display: block;
        float: left;
        padding: 3px 11px;
        margin: 10px 10px 0 0;
        border-radius: 8px;
        -moz-transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
        color: #FFF;
        background:orange;
        cursor:pointer;
    }
    @section('css')

    @show
</style>
</head>
  <!-- JavaScript Plugins -->
    <script src="/d/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/d/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/d/js/libs/jquery.placeholder.min.js"></script>
    <script src="/d/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/d/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/d/jui/jquery-ui.custom.min.js"></script>
    <script src="/d/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/d/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/d/plugins/colorpicker/colorpicker-min.js"></script>

    <!-- Core Script -->
    <script src="/d/bootstrap/js/bootstrap.min.js"></script>
    <script src="/d/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/d/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/d/js/demo/demo.table.js"></script>
<body>

	<!-- Header -->
	<div id="mws-header" class="clearfix">
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="/d/images/logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
            
          
            <!-- 管理员登录信息 -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="/d/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, John Doe
                    </div>
                    <ul>
                    	<li><a href="#">头像管理</a></li>
                        <li><a href="#">修改密码</a></li>
                        <li><a href="index.html">退出</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="typography.html">
                	<input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- 菜单 -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-user"></i> 用户管理ss</a>
                        <ul>
                            <li><a href="/admin/user?c_a=0">用户列表</a></li>
                            <li><a href="/admin/user/create?c_a=0">用户添加</a></li>
                            <li><a href="/admin/user/info?c_a=0">回收站</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-android"></i> 管理员管理</a>
                        <ul>
                            <li><a href="/admin/useradmin?c_a=1">管理员列表</a></li>
                            <li><a href="/admin/useradmin/create?c_a=1">管理员添加</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-align-left"></i> 分类管理</a>
                        <ul>
                            <li><a href="/admin/cates?c_a=2">分类列表</a></li>
                            <li><a href="/admin/cates/create?c_a=2">分类添加</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-tags"></i> 标签云管理</a>
                        <ul>
                            <li><a href="/admin/labels?c_a=3">标签云列表</a></li>
                            <li><a href="/admin/labels/create?c_a=3">标签云添加</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-file-powerpoint"></i> 文章管理</a>
                        <ul>
                            <li><a href="/admin/articles/?c_a=4">文章列表</a></li>
                            <li><a href="/admin/articles/create?c_a=4">Markdown文章添加</a></li>
                            <li><a href="/admin/articles/create2?c_a=4">InnerHTML文章添加</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 控制菜单样式 开始 -->
        <script type="text/javascript">
            $('#mws-navigation>ul>li>a+ul').addClass('closed');
            function getUrlParam(name) {
                var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
                var r = window.location.search.substr(1).match(reg);
                if (r != null) return unescape(r[2]); return null;
            }

            var x = getUrlParam('c_a');
            $('#mws-navigation>ul>li>a+ul').eq(x).removeClass('closed');
        </script>
        <!-- 控制菜单样式 结束 -->
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
                <!-- 显示自动验证的错误信息 -->
                @if (count($errors) > 0)
                    <div class="mws-form-message error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <!-- 读取模版的提示信息 -->
                @if(session('success'))
                <div class="mws-form-message success">
                    {{  session('success') }}
                </div>
                @endif        
                

                @if(session('error'))
                <div class="mws-form-message error">
                    {{  session('error') }}
                </div>
                @endif

                <!-- 内容开始 -->
            	@section('content')

                @show
            
                <!-- 内容结束 -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
            	Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

  

</body>
</html>
