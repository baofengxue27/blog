<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>风雪</title>
<link rel="shortcut icon" href="/Home/images/favicon.ico">
<!-- 标题前小图片 -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/Home/bs/css/bootstrap.min.css">
<script src="/Home/bs/js/jquery.min.js"></script>
<script src="/Home/bs/js/bootstrap.min.js"></script>

</head>
<style>
	
	.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover{
		
   
    background-color: #333;
    border-color: #333;
	}
	.pagination>li>a{
		
		color:#333;
	}
	
	
	
	.col-md-8{
		padding: 0;
	}
	a{
		text-decoration: none;
	}
	
	body{
		background: #f9f9f9;
		
		padding-top: 100px;
		
	
	}	
	
	
.row{
	  margin-right: 0px;
	margin-left: 0px;
		
	}
	
	
	.navbar-default{		/*	导航条背景*/
		background: #FFFFFF;
		box-shadow:  0 0 7px 1px rgba(0,0,0,.2)
		
	}
	
	.navbar-header{	/*	导航条高度	*/
		height: 80px!important;
	}
	
	
	#mynavbar{
		margin-top: 15px;
	}
	
	.img{
		height: 80px!important;	
		position: relative;
	}
	.img img{
		position: absolute;	/*	logo高度	*/
		top: 20%;
	}
	.navbar-toggle{
		margin: 0;
		
	}
	
	.nav li a{	/*	导航条栏目字体颜色	*/
		font-weight: 500;
		font-family: -apple-system,BlinkMacSystemFont,opensans,Optima,"Microsoft Yahei",sans-serif!important;
		font-size: 16px;
		color: #6f6f6f!important;
		
	}
	
	.navli{
		border-bottom: solid 1px #e0e0e0	;
	}
	
	.navli:first-child{
		border-top: solid 1px #e0e0e0	;
	}
	
	#mynavbar ul{
		padding: 0 10px 0 10px ;
		margin-bottom: 0;
		margin-top: 0;
	}
	
	
	.nav li a:hover{
		color: #55A3D5!important;
	}
	
	
.navbar-default .navbar-toggle {		/*	手机版 按钮边框	*/
    border-color: #fff;
}
	.navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {	/*	手机端 按钮点击去除背景颜色	*/
		
		background-color:#FFFFFF	;
		
	}
	
	
	.navbar-toggle{
		
		margin-top: 20px;
		
	}
	
	
	.navbar-default .navbar-collapse, .navbar-default .navbar-form {
  		  border-color: #FFFFFF; 
	}
	
	.article{
		background: #FFFFFF;
		box-shadow: 0 1px 2px rgba(0,0,0,.1);
		margin: 0 0 25px;
	}

	.article-title a{
		color: #1c1c1c;
		font-size: 25px;
		font-family:Gotham, Helvetica Neue, Helvetica, Arial," sans-serif";
		text-decoration: none;
		transition: color 0.3;
		cursor: pointer;
		
		margin-left: 15px;
		
		
	}
	
	.article-time{
		margin-top: 20px;
	}
	.article-time a{
		font-family:Gotham, Helvetica Neue, Helvetica, Arial," sans-serif";
		color: #777676;
		transition: color 0.3;
		cursor: pointer;
		margin-left: 10px;
		text-decoration: none;
	}
	
	.article-time a:hover{
		color:rgb(91, 192, 235);
	}
	
	.article-title a:hover{
		color:rgb(91, 192, 235);

	}
	.article-abstract{	/*	描述	*/
	
		margin-top: 20px;
		
		color: #333;
		
		font-size: 16px;
		
		line-height: 25px;
		
		margin-left: 10px;
		
		
	}
	
	.glyphicon {
		
		margin-right: 6px;	
		
	}
	
	
	.opus{	/*	作品列表	*/
		
		background: #FFFFFF;
		box-shadow: 0 1px 2px rgba(0,0,0,.1);
		height: 300px;
		width: 100%;
		padding: 40px;
		font-family: 微软雅黑;
		letter-spacing: 1px;
		line-height: 24px;
		font-weight: 300;
	}
	
	
	.opus a{	
		color: #666;
		text-decoration: none;
		transition: color 0.3s;
		cursor: pointer;
	}
	
	.opus a:hover{
		color:rgb(91, 192, 235);
	}
	.opus h4{
		color: #262a30;
	}
	.opus .page-header,.recently-article .page-header,.total .page-header{
		margin-top: 0;
	}
	
	
	
	.recently-article{/*近期文章*/
		
		background: #FFFFFF;
		box-shadow: 0 1px 2px rgba(0,0,0,.1);
		/*height: 400px;*/
		width: 100%;
		padding: 40px;
		
		margin-top: 30px;
	}
	
	
	.total{	/*	博客浏览量统计*/
			
		background: #FFFFFF;
		box-shadow: 0 1px 2px rgba(0,0,0,.1);
		height: 150px;
		width: 100%;
		padding: 40px;
		margin-top: 30px;
	}
	
	
	.recently-article a{
		color: #666;
		text-decoration: none;
		font-size: 1pc;
		transition: color 0.3s;
		
	}
	
	.recently-article a:hover{
		color:rgb(91, 192, 235);
	}
	
	.recently-article ul{
		padding: 0;
	}
	
	.recently-article li{
		
		margin-top: 5px;	
	}
	
	
	.total a{
		font-size: 1pc;
		color: #333;
		text-decoration: none;
		font-weight: 400;
		
	}
	.total ul{
		
		padding-left:8px;	
		list-style: disc;
		font-family: 微软雅黑;
	}
	
	.article-abstract-p{
		height: 5px;
		width: 100%;
	}
	
	
	footer{
		
    	padding: 40px 0 30px;
    	background: #333;
		
		line-height: 24px;
		font-weight: 300;
		height: 204px;
		width: 100%;
	}
	
	
	footer p{
		color:hsla(0,0%,100%,.3);
		font-weight: 300;
		font-size: 15px;
	}
	
	footer a{
		color: hsla(0,0%,100%,.5);
		text-decoration: none!important;
		font-size: 15px;
		font-family: Gotham, Helvetica Neue, Helvetica, Arial," sans-serif";
		font-weight: 300!important;
		transition: color 0.3s;
		
	}
	
	footer a:hover{
		color:rgb(91, 192, 235);
	}
	
	.footer-icon{
		font-size: 30px;
		margin-bottom: 15px;
	}
	.article-img img{
		width: 100%;
		height: 335px;
	}
	
	</style>

<body>
<!--	导航条样式		-->
<nav class="navbar navbar-default  navbar-fixed-top">
	<div class="container">	
	<div class="navbar-header">		
		<div class="row ">
			<div class="col-xs-3">
				<div class="img">
					<img src="/Home/images/logo.png" height="60%"	>
					
					<!--<img src="/Home/images/123.jpg" height="70%" class="i">-->
				</div>
			
			</div>
			<div class="col-xs-5 text-center">
				<!--手机端导航条中间位置暂留空位-->
			</div>
			<div class="col-xs-4 ">
				
					<button class="navbar-toggle collapsed " data-toggle="collapse" data-target="#mynavbar">
					<span class="icon-bar"></span>	
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>	
				
			</div>

		</div>
	</div>
	 <div id="mynavbar" class="collapse navbar-collapse">		
		<ul class="nav navbar-nav navbar-right">				
			<li class="navli "><a href="/">首页</a></li>
			<li class="navli"><a href="/opus">作品</a></li>
			<li class="navli"><a href="/experience">经验</a></li>
			<li class="navli"><a href="/notes">笔记</a></li>
			<li class="navli"><a href="/radio">我的电台</a></li>
			<li><a href="/aboutme">关于我</a></li>
		</ul>

	 </div>
	</div>
<div class="" style="clear: both"></div>
</nav>

<!--	主体内容	-->

<div class="container">
	<div class="row">
		<div class="col-md-8">
		
			
			@foreach($sql as $key=>$val)
			
			<?php

			$num=DB::table("myblog_comment")->where("id","=",$val->uid)->count();
	
			
			?>
			<div class="article" id="{{$val->uid}}">
				<div class="article-img">
					<img src="/Uploads/{{$val->img}}">
				</div>
				<div class="article-title">
					<h1><a>{{$val->title}}</a></h1>
				</div>
				<div class="article-time">
					<a><span class="glyphicon glyphicon-calendar"></span><span>{{date('Y-m-d H:i',$val->time)}}</span></a>
					<a><span class="glyphicon glyphicon-tag"></span><span>{{$val->types}}</span></a>
					<a><span class="glyphicon glyphicon-user"></span><span>{{$num}}条评论</span></a>
				</div>
				<div class="article-abstract">
					<p>{{$val->abstract}}</p>
					<p class="article-abstract-p"></p>
				</div>
				
			</div>
			
			
			
			@endforeach
			
			<div class="row text-center">
			{{$sql->links()}}	<!--  分页显示 -->
		</div>	
		</div>
		
		
		
		
		
		<div class="col-md-4">
			<div class="opus">
				<h4 class="page-header">作品列表</h4>
				<p><a>晴川学院晴川百科</a></p>
				<p><a>晴川学院二手市场</a></p>
				<p><a>晴川学院校内通讯录</a></p>
				<p><a>晴川学院匿名聊天室</a></p>
				<p><a>晴川学院邮箱表白墙</a></p>
				<p><a>晴川学院创业书院官网</a></p>
			</div>
			
			<div class="recently-article">
				<h4 class="page-header">近期文章</h4>
				<ul style="list-style: none">
				
				@foreach($recently as $key=>$val)
				
					<li><a href="/article/{{$val->uid}}"><span class="glyphicon glyphicon-pencil"></span>{{$val->title}}</a>
					</li>
	
				@endforeach
				
				</ul>
			</div>
			
			<div class="total">
				<h4 class="page-header">博客统计</h4>
				<ul>
					<li><a class="enter">{{$enterTotal}} </a><a>点击次数</a></li>
				</ul>
			</div>
			
		</div>
	</div>

</div>



<!--	底部	-->
<footer class="text-center  ">
	
	<p class="footer-icon"><span class="glyphicon glyphicon-globe"></span></p>
	<a href="http://www.miitbeian.gov.cn/" target="_blank">赣ICP备19001642号-1</a>
	<p>© 2019 <a href="https://laravel.com/" target="_blank">Blizzard - 前端、后端、Linux技术博客</a> </p>
	
</footer>


</body>
<script>
	
		function formatCurrency(num) {

}
	
	
	$(function(){
		if(/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
			$(".img img").css({"height":"40%","margin-top":"10px"});
			$(".article-img img").css({height:"155px"});
			$(".col-md-4").hide();
			
		} else {
			
			$(".navli").removeClass("navli");
			
		}
	
		
		$(".article").click(function(){
			id=$(this).attr("id");
			window.location="/article/"+id;
		})

		
			
		
	})
	

	
	
	
	
	</script>






</html>