<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{{$sql->title}}</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/Home/bs/css/bootstrap.min.css">
<script src="/Home/bs/js/jquery.min.js"></script>
<script src="/Home/bs/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/Home/font/css/font-awesome.min.css">
<link rel="stylesheet" href="/Home/styles/atelier-cave-dark.css">
<script src="/Home/highlight.pack.js"></script>

<script>hljs.initHighlightingOnLoad();</script> 

	<script>
	
	$(function(){
    $('pre code').each(function(){
    	texts = $(this).text().replace(/&(?!#?[a-zA-Z0-9]+;)/g, '&amp;')
        .replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/'/g, '&#39;').replace(/"/g, '&quot;')        
        var codetext = texts.split('\n');
        var code = '';
        $(codetext).each(function(v){
        	code += '<li>'+codetext[v]+'</li>';
        })        
        code = '<ol>'+code+'</ol>';
        $(this).html(code);
    });
});
	
	</script>
	
	
	<style>

		ol{
			padding: 0;
		}
	pre {
    position: relative;
    margin-bottom: 0px;
    border-radius: 3px;
    border: 1px solid #C3CCD0;
    background: #FFF;
   
}

code {
  display: block;
  padding: 12px 24px;
  overflow-y: auto;
  font-weight: 300;
  
  font-size: 0.8em;
}
.hljs ol li{
	margin-left: 40px;
    list-style-type: decimal-leading-zero;
	padding-left: 10px;
}
	</style>
<style>
	
	pre{
		padding: 0;
	}
	
	pre code{
		white-space: pre;
	}
	
	#mycode{
		
			-webkit-overflow-scrolling : touch;		/*	调试滚动速度	*/
			word-wrap:normal;
			word-break: normal;
			
			
		
		}
		
		
	
	a{
		text-decoration: none;
	}
	
	body{
		background: #f9f9f9;
		
		padding-top: 50px;
		
	
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
		color: #FFFFFF;
		font-size: 25px;
		font-family:Gotham, Helvetica Neue, Helvetica, Arial," sans-serif";
		text-decoration: none;
		transition: color 0.3;
		cursor: pointer;
	}
	
	.article-time{
		margin-top: 30px;
	}
	.article-time a{
		font-family:Gotham, Helvetica Neue, Helvetica, Arial," sans-serif";
		color: #FFFFFF;
		transition: color 0.3;
		cursor: pointer;
		margin-right: 10px;
		text-decoration: none;
		font-weight: 500;
		font-size: 16px;
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
	
	
	.types{
		width: 100%;
		height: 80px;
		box-shadow: 0 1px 2px rgba(0,0,0,.1);	
		background: #ffffff;
		margin-bottom: 30px;
	}
	.total{
		margin-bottom: 30px;
	}
	
	.types h1{
		line-height: 1.5;
		font-size: 24px;
	}
	
	.types{
		padding-left: 15px;
		padding-top: 4px;
		line-height: 24px;
	}
	
	.col-md-8{
		padding-left: 0;
		padding-right: 0;
	}
	
	</style>
	<style>
		.bg-img{
			background: url(/Home/images/123.jpg) no-repeat;
			background-position: center;
			background-size: 100%;
			height: 280px;
			width: 100%;
			margin-bottom: 30px;
			padding: 100px;
			color: #FFFFFF;
			font-family:Gotham, Helvetica Neue, Helvetica, Arial," sans-serif";
		}
		
		.article-info{
			background: #FFFFFF;
			box-shadow: 0 1px 2px rgba(0,0,0,.1);
			
		}
		
		.article-info p{
			word-break:break-all;
			font-family: Gotham, Helvetica Neue, Helvetica, Arial," sans-serif";
			font-size: 16px;
			padding: 15px;
			margin-bottom: 0;
			
		}
		
		.ulicon-wrap li:nth-child(1){
			border: 1px solid #3496e6;
			float: left;
			color: #3496e6;
			padding: 7px;
			width: 40%;
			margin-left: 20px;
		}
		
		.ulicon-wrap li:nth-child(2){
			border: 1px solid #e87461;
			float: left;
			color: #e87461;
			padding: 7px;
			width: 40%;
			margin-left: 20px;
		}
		.i li{
			float: left;
			padding: 7px;
			width: 40%;
			margin-left: 20px;
			
		}
		
		
		.i li:nth-child(1){
			border: 1px solid #3496e6;
			color: #3496e6;
		}
		.i li:nth-child(2){
			border: 1px solid #38ad5a;
			color: #38ad5a ;
		}
		
		.icon-wrap ul{
			padding-left: 0;
		}
		.icon-wrap{
			padding: 15px;
			margin-bottom: 30px;
			background: #FFFFFF;
			border-top: 1px solid rgb(238, 238, 238);
		}
		textarea{
			width: 100%!important;
			height: 100px!important;
			resize: none;
			overflow: auto;
			
		}
		
		
		.form{
			background: #FFFFFF;
			box-shadow:  0 1px 2px rgba(0,0,0,.1);
			padding: 15px;
			
		}
		.form h4{
			margin-top: 0;
			color:rgb(90, 90, 90);
			font-weight: 500;
		}
		
		
		.article-info img{
			width: 100%;
			
			max-height: 600px;
			
		}
		
		
		.comment{
			background: #FFFFFF;
			box-shadow:  0 1px 2px rgba(0,0,0,.1);
			padding: 15px 15px 8px 15px;
			
			margin-bottom: 30px;
			margin-top: 30px;
			word-break: break-all;
		}
		
		
	</style>
</head>

<body>

<!--	导航条样式		-->
<nav class="navbar navbar-default  navbar-fixed-top">
	<div class="container">	
	<div class="navbar-header">		
		<div class="row ">
			<div class="col-xs-3">
				<div class="img">
					<img src="/Home/images/logo.png" height="60%">		
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


<div class="bg-img text-center">
	<h2>@yield('aboutme'){{$sql->title}}</h2>
	<div class="article-time">
		<a><span class="glyphicon glyphicon-calendar"></span><span>{{date('Y-m-d H:i',$sql->time)}}</span></a>
		<a><span class="glyphicon glyphicon-tag"></span><span>{{$sql->types}}</span></a>
		<a><span class="glyphicon glyphicon-user"></span><span>{{$num}}条评论</span></a>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8">
		<div class="article-info" id="{{$sql->uid}}">
				@yield('main'){!!$sql->content!!}		<!--	文章主题内容	-->
				
		</div>
		<div class="some-opus">
			@yield('some-opus')	<!--	关于我的作品	-->
		</div>
		
		<div class="icon-wrap text-center">
			<ul style="list-style: none" class="ulicon-wrap">
				<li class="money"><i class="fa fa-bitcoin"> 打赏</i></li>
				<li class="share"><i class="fa fa-share-alt-square" aria-hidden="true"> 分享</i></li>
				<div style="clear: both"></div>
			</ul>
			<ul style="list-style: none" class="i" hidden="">
				<li class="qq">
					<i class="fa fa-qq"></i>
				</li>
				<li class="wx">
					<i class="fa fa-weixin"></i>
				</li>
				<div style="clear: both"></div>
			</ul>
		</div>

		<!--	评论	-->
		<div class="form">
			<h4 class="page-header">发表评论</h4>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
					<input type="text" class="form-control" placeholder="昵称" id="name">
				</div>
       		</div>
       		<div class="form-group">
				<textarea class="form-control" style="" placeholder="" id="info"></textarea>
        	</div>
        	<div class="form-group ">
        		<button class="btn btn-info btn-block" id="submit">发表</button>
        	</div>
		</div>
		
		
		<!--	评论展示	-->
		@foreach($comment as $key=>$val)
			<div class="comment">
			<div class="row">
				<div class="col-xs-10">
					<p class="text-left text-info">用户:{{$val->user}}</p>
					
				</div>
				<div class="col-xs-2">
					<p class="text-right">{{$key+1}}楼</p>
					
				</div>
			</div>
			
			<div class="comment-info">
				<p class="" style="margin: 8px">{{$val->info}}</p>
				<p class="text-right" style="margin-bottom: 0">{{date('Y-m-d H:i',$val->time)}}</p>
			</div>
		</div>
		
		@endforeach
		
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
					<li><a>{{$enterTotal}} 点击次数</a></li>
				</ul>
			</div>
		</div>
	</div>

</div>


<!--	底部	-->
<footer class="text-center  ">
	
	<p class="footer-icon"><span class="glyphicon glyphicon-globe"></span></p>
	<p>© 2018 <a>Melancholy - 前端、后端、Linux技术博客</a> </p>
	<p>All Rights Reserved.</p>
	
	
	
</footer>




<!--	打赏弹窗-->

<div id="money" class="modal fade">		
	<div class="modal-dialog">		<!--	加上.modal-lg控制大小		.modal-dialog理解成是弹窗对话框	-->
		<div class="modal-content">

			<div class="modal-body">
				<img src="/Home/images/money.jpg" width="100%">
			</div>

		</div>
	</div>
</div>
	
<!--微信弹窗-->
<div id="wx" class="modal fade">		
	<div class="modal-dialog">		<!--	加上.modal-lg控制大小		.modal-dialog理解成是弹窗对话框	-->
		<div class="modal-content">

			<div class="modal-body text-center">
				<div id="qrcode"></div>
				<p>打开微信“扫一扫”，打开网页后点击屏幕右上角分享按钮</p>
			</div>

		</div>
	</div>
</div>	




</body>

<script>
	
	
	
	$(function(){
		if(/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
			$(".img img").css({"height":"40%","margin-top":"10px"});
			$(".article-img img").css({height:"155px"});
			$(".col-md-4").hide();
			
			$(".bg-img").css({"padding":"60px 10px 0 10px ",height:"280px","margin-bottom":"0px"})
			
			
			//$(".article-info img").css({maxHeight:"300px",width:"100%"});/*图片最大高度不超过300px*/
				$(".article-info img").css({maxHeight:"600px",width:"100%"});/*图片最大高度不超过300px*/
			
		} else {
			
			$(".navli").removeClass("navli");
			
		}
	
		
		$(".money").click(function(){
			$("#money").modal("show");
		})
		
		$(".share").click(function(){
			$(".i").fadeToggle(300);
		})
		
		url=window.location.href;
		
		title=$("title").text();
		
		$(".qq").click(function(){
			window.location="https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url="+url+"&title="+title+"&site={{100*100}}"+"&pics=http://imgsrc.baidu.com/forum/w%3D580/sign=dc978af4afc379317d688621dbc5b784/e22fe924b899a901e86f13c41d950a7b0308f58e.jpg";
		});
		
		$(".wx").click(function(){
			$("#qrcode").html("");
			 jQuery(function(){
				   jQuery('#qrcode').qrcode(url);
			   })
			$("#wx").modal("show");
		})
		
		
		
		$("#submit").click(function(){		/*	评论	*/
			
			name=$("#name").val();
			
			info=$("#info").val();
			
			id=$(".article-info").attr("id");
			
			
			
			if((name.length==0)||(info.length==0)){
				alert("请补全信息再发布喔~");
			}else{
				$.ajax({
					type:"post",
					
					url:"/comment",
					
					data:{user:name,info:info,id:id,_token:"{{csrf_token()}}"},
					
					success:function(data){
						
						if(data==1){
							alert("评论成功");
							location.reload();
						}
					}
				})
			}
			
			
		})
		
		
		
		
		
		
		
	
	})
	

	</script>
	
	<script src="/Home/jquery.qrcode.min.js"></script>
	<script type="text/javascript">
	var allpre = document.getElementsByTagName("pre");
	for(i = 0; i < allpre.length; i++) 
	{
	    var onepre = document.getElementsByTagName("pre")[i];
	    var mycode = document.getElementsByTagName("pre")[i].innerHTML;
	    onepre.innerHTML = '<code id="mycode">'+mycode+'</code>';
	}
</script>

</html>