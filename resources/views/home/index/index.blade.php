@extends('home.layout.index')

@section('content')
<!-- 轮播 开始 -->
		<div id="lunbo">
			<div class="shutter" style="margin-top: 10px;">
				<div class="shutter-img">
				  @foreach($albums as $k=>$v)
				  <a href="{{ $v->redirect_url }}" data-shutter-title="{{ $v->profile_title }}"><img src="{{ $v->profile_url }}" alt="{{ $v->profile_alt }}"></a>
				  @endforeach
				</div>
				<ul class="shutter-btn">
				  <li class="prev"></li>
				  <li class="next"></li>
				</ul>
				<div class="shutter-desc">
				  <p>Future excellent you, should be grateful for the efforts now</p>
				</div>
			</div>
			<!-- <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script> -->
			<script src="/h/lunbo/js/velocity.js"></script>
			<script src="/h/lunbo/js/shutter.js"></script>
			<script>
			$(function () {
			  $('.shutter').shutter({
				shutterW: 1100, // 容器宽度
				shutterH: 358, // 容器高度
				isAutoPlay: true, // 是否自动播放
				playInterval: 4000, // 自动播放时间
				curDisplay: 3, // 当前显示页
				fullPage: false // 是否全屏展示
			  });
			});
			</script>
		</div>
		
		<!-- 分割线 -->
		<hr style="width:70%;margin:auto;"> 
		<!-- 轮播 结束 -->
		<!-- Main -->
		<div id="main" style="padding-top: 0px;">
			<div class="container">
				<div class="row"> 
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Welcome to Iridium!</h2>
								<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
							</header>
							<a href="#" class="image full"><img src="/h/images/pic07.jpg" alt="" /></a>
							<p>This is <strong>Iridium</strong>, a responsive HTML5 site template freebie by TEMPLATED. Released for free under the Creative Commons Attribution license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at our site or follow us on Twitter.</p>
							<p>Sed etiam vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl. Fusce mattis viverra elit. Fusce quis tortor. Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget lorem ipsum dolor.</p>
						</section>
					</div>
					
					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<!-- 搜索 开始 -->
						<div id="search_div">	
							<h2>搜索</h2>
							<div class="zySearch" id="zySearch"></div>
							<script type="text/javascript" src="/h/sousuo/js/zySearch.js"></script>
							<script type="text/javascript">
							$("#zySearch").zySearch({
								"width":"355",
								"height":"33",
								"parentClass":"pageTitle",
								"callback":function(keyword){
									console.info("搜索的关键字");
									console.info(keyword);
								}
							});
							</script>
						</div>
						<!-- 搜索 结束 -->
						

						<section>
							<header>
								<h2>Pellentesque vulputate</h2>
							</header>
							<ul class="style">
								<li>
									<p class="posted">August 11, 2002  |  (10 )  Comments</p>
									<img src="/h/images/pic04.jpg" alt="" />
									<p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
								</li>
								<li>
									<p class="posted">August 11, 2002  |  (10 )  Comments</p>
									<img src="/h/images/pic05.jpg" alt="" />
									<p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
								</li>
								<li>
									<p class="posted">August 11, 2002  |  (10 )  Comments</p>
									<img src="/h/images/pic06.jpg" alt="" />
									<p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
								</li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>
		<div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>

		<!-- Footer -->
		<div id="featured">
			<div class="container">
				<div class="row">
					<div class="4u">
						<h2>Aenean elementum facilisis</h2>
						<a href="#" class="image full"><img src="/h/images/pic01.jpg" alt="" /></a>
						<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>
						<p><a href="#" class="button">More Details</a></p>
					</div>
					<div class="4u">
						<h2>Fusce ultrices fringilla</h2>
						<a href="#" class="image full"><img src="/h/images/pic02.jpg" alt="" /></a>
						<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>
						<p><a href="#" class="button">More Details</a></p>
					</div>
					<div class="4u">
						<h2>Etiam rhoncus volutpat erat</h2>
						<a href="#" class="image full"><img src="/h/images/pic03.jpg" alt="" /></a>
						<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>
						<p><a href="#" class="button">More Details</a></p>
					</div>
				</div>
			</div>
		</div>

@endsection