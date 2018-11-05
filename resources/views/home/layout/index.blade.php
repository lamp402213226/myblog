<!DOCTYPE HTML>
<html>
	<head>
		<title>Iridium</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="/h/js/html5shiv.js"></script><![endif]-->
		<!-- <script src="https://cdn.bootcss.com/jquery/1.2.3/jquery.min.js"></script> -->
		<script src="/h/js/skel.min.js"></script>
		<!-- 删除除导航后注释的js -->
		<!-- <script src="/h/js/skel-panels.min.js"></script> -->
		<script src="/h/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="/h/css/skel-noscript.css" />
			<link rel="stylesheet" href="/h/css/style.css" />
			<link rel="stylesheet" href="/h/css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!-- 导航栏 开始 -->
		<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/bootstrap-3.3.4.css">
		<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
		<link rel="stylesheet" type="text/css" href="/h/nav/css/bootsnav.css">
		<!-- 导航栏 结束 -->
		<style type="text/css">
			/*菜单导航 开始*/
			.jq22-header h1{ text-align:center; font-size:28px; color:#939393}
			.navbar-brand{
			    padding: 29px 15px;
			    height: auto;
			}
			nav.navbar.bootsnav{
			    border: none;
			}
			.navbar-nav{
			    float: left;
			}
			nav.navbar.bootsnav ul.nav > li > a{
			    color: #474747;
			    text-transform: uppercase;
			    padding: 30px;
			}
			nav.navbar.bootsnav ul.nav > li:hover{
			    background: #f4f4f4;
			}
			.nav > li:after{
			    content: "";
			    width: 0;
			    height: 5px;
			    background: #34c9dd;
			    position: absolute;
			    bottom: 0;
			    left: 0;
			    transition: all 0.5s ease 0s;
			}
			.nav > li:hover:after{
			    width: 100%;
			}
			nav.navbar.bootsnav ul.nav > li.dropdown > a.dropdown-toggle:after{
			    content: "+";
			    font-family: 'FontAwesome';
			    font-size: 16px;
			    font-weight: 500;
			    position: absolute;
			    top: 35%;
			    right: 10%;
			    transition: all 0.4s ease 0s;
			}
			nav.navbar.bootsnav ul.nav > li.dropdown.on > a.dropdown-toggle:after{
			    content: "\f105";
			    transform: rotate(90deg);
			}
			.dropdown-menu.multi-dropdown{
			    position: absolute;
			    left: -100% !important;
			}
			nav.navbar.bootsnav li.dropdown ul.dropdown-menu{
			    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			    border: none;
			}
			@media only screen and (max-width:990px){
			    nav.navbar.bootsnav ul.nav > li.dropdown > a.dropdown-toggle:after,
			    nav.navbar.bootsnav ul.nav > li.dropdown.on > a.dropdown-toggle:after{ content: " "; }
			    .dropdown-menu.multi-dropdown{ left: 0 !important; }
			    nav.navbar.bootsnav ul.nav > li:hover{ background: transparent; }
			    nav.navbar.bootsnav ul.nav > li > a{ margin: 0; }
			}
			/* 菜单导航 结束 */
			
			/* 轮播 开始 */
			/* 轮播 结束 */
			
		</style>
		<link rel="stylesheet" type="text/css" href="/h/nav/css/my_header.css">
		<!-- 轮播 开始 -->
		<link rel="stylesheet" href="/h/lunbo/css/shutter.css">
		<!-- 轮播 结束 -->

		<!-- 搜索 开始 -->
		<link rel="stylesheet" href="/h/sousuo/css/style.css" type="text/css" />
		<!-- 搜索 结束 -->
	</head>
	<body class="homepage" style="background: #fff;">
		<!-- head 导航栏 开始 -->
        <div id="headers">
	        <div class="container" style="height:80px;">
	            <div class="row">
	                <div class="col-md-12">
	                    <nav class="navbar navbar-default navbar-mobile bootsnav">
	                        <div class="navbar-header">
	                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
	                                <i class="fa fa-bars"></i>
	                            </button>
	                        </div>
	                        <div class="collapse navbar-collapse" id="navbar-menu">
	                            <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
	                                <li style=""><a href="{{ url('/') }}" style="color:#CB3737;font-size: 1.6em;">Home</a></li>
	                                @foreach($common_cates_home_data as $k=>$v)
	                                <li class="dropdown">
	                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">{{ $v->cname }}</a>
	                                    <ul class="dropdown-menu">
	                                        @foreach($v['sub'] as $kk=>$vv)
	                                        <li class="dropdown">
	                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" >{{ $vv->cname }}</a>
	                                            <ul class="dropdown-menu">
	                                                @foreach($vv['sub'] as $kkk=>$vvv)
	                                                <li><a href="#">{{ $vvv->cname }}</a></li>
	                                            	@endforeach
	                                            </ul>
	                                        </li>
	                                        @endforeach
	                                    </ul>
	                                </li>
	                                @endforeach
	                            
	                            </ul>
	                        </div>
	                    </nav>
	                </div>
	            </div>
	        </div>
        </div>
		<script src="/h/js/jquery-3.3.1.min.js"></script>
		<script src="http://www.jq22.com/jquery/bootstrap-3.3.4.js"></script>
		<script type="text/javascript" src="/h/nav/js/bootsnav.js"></script>	
		<!-- 分割线 -->
		<hr style="width:70%;margin: auto;"> 
		<!-- head 导航栏 结束 -->
		<!-- 内容开始 -->
		@section('content')

		@show
		<!-- 内容结束 -->
	

		<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="4u">
						<section>
							<h2>Latest Posts</h2>
							<ul class="default">
								<li><a href="#">Pellentesque lectus gravida blandit</a></li>
								<li><a href="#">Lorem ipsum consectetuer adipiscing</a></li>
								<li><a href="#">Phasellus nibh pellentesque congue</a></li>
								<li><a href="#">Cras vitae metus aliquam pharetra</a></li>
								<li><a href="#">Maecenas vitae orci feugiat eleifend</a></li>
							</ul>
						</section>
					</div>
					<div class="4u">
						<section>
							<h2>Ultrices fringilla</h2>
							<ul class="default">
								<li><a href="#">Pellentesque lectus gravida blandit</a></li>
								<li><a href="#">Lorem ipsum consectetuer adipiscing</a></li>
								<li><a href="#">Phasellus nibh pellentesque congue</a></li>
								<li><a href="#">Cras vitae metus aliquam pharetra</a></li>
								<li><a href="#">Maecenas vitae orci feugiat eleifend</a></li>
							</ul>
						</section>
					</div>
					<div class="4u">
						<section>
							<h2>Aenean elementum</h2>
							<ul class="default">
								<li><a href="#">Pellentesque lectus gravida blandit</a></li>
								<li><a href="#">Lorem ipsum consectetuer adipiscing</a></li>
								<li><a href="#">Phasellus nibh pellentesque congue</a></li>
								<li><a href="#">Cras vitae metus aliquam pharetra</a></li>
								<li><a href="#">Maecenas vitae orci feugiat eleifend</a></li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>

		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Copyright &copy; 2014.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
			</div>
		</div>
		

</body>
</html>