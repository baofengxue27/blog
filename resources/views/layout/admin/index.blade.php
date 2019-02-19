<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>后台管理</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/Home/bs/css/bootstrap.min.css">
<script src="/Home/bs/js/jquery.min.js"></script>
<script src="/Home/bs/js/bootstrap.min.js"></script>
</head>


<?php
	
	
	$value =Session::get('pass');	
	
	
	if(empty($value)){
		echo "<script>location='/admin';</script>";
	}
	
	?>
<body>

<div class="container">
	<h1 class="page-header">用户管理中心</h1>
		<div class="row">
			<div class="col-xs-2">
				<ul class="nav nav-pills nav-stacked ">
					<li class="active"><a href="/admin/admin">添加文章</a></li>
					<li class="manage"><a href="/admin/article/manage">文章管理</a></li>
				</ul>
			</div>
			<div class="col-xs-10">
				@yield('main')		<!--	功能	-->
			</div>
		</div>
	</div>


</body>
<script>
	
$("li").mouseenter(function(){
	idx=$(this).index(".col-xs-2 li");
	
	$(".col-xs-10 p").eq(idx).show();
	
	$(".col-xs-10 p").not($(".col-xs-10 p").eq(idx)).hide();
})

	</script>
</html>