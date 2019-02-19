<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/Home/bs/css/bootstrap.min.css">
<script src="/Home/bs/js/jquery.min.js"></script>
<script src="/Home/bs/js/bootstrap.min.js"></script>

</head>

<body>
<div class="container">
<h2 class="page-header">后台登录</h2>
<form method="post" action="/admin/check">
	{{csrf_field()}}
<div class="form-group">
	<label>账号</label>
	<input type="text" name="id" class="form-control">
</div>
<div class="form-group">
	<label>密码</label>
	<input type="password" name="pass" class="form-control">
</div>
<div class="form-group">
	<input type="submit" value="登录" class="btn btn-info btn-block">
</div>
</div>
</form>


</body>
</html>