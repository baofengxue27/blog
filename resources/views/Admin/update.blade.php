<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>文章修改</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/Home/bs/css/bootstrap.min.css">
<script src="/Home/bs/js/jquery.min.js"></script>
<script src="/Home/bs/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
<form method="post" action="/admin/article/updateExe" enctype="multipart/form-data">
	{{csrf_field()}}

<div class="form-group">
	<label>文章标题</label>
	<input type="text" name="title" class="form-control" value="{{$sql->title}}">
</div>


 <div class="form-group">
 	<label>文章描述</label>
 	<input type="text" class="form-control" name="abstract" value="{{$sql->abstract}}">
 </div>
<div class="form-group">
	<label>选择分类</label>
	<select name="types" class="form-control types" value="{{$sql->types}}" >
		<option value="作品" id="opus">作品</option>	<!--作品-->
		<option value="经验" id="experience">经验</option>	<!--经验-->
		<option value="笔记" id="notes">笔记</option>	<!--笔记-->
	</select>
</div>
 <input hidden="" value="{{$sql->uid}}" name="id">
  <div class="form-group">
  	<input type="file" name="img"  class="form-control">
  </div>

  <!-- 加载编辑器的容器 -->
    <script id="container" name="content" type="text/plain">
        {!!$sql->content!!}
    </script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="/Home/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/Home/ueditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script>
		<p style=""><input type="submit" value="提交" class="btn btn-block btn-info" ></p>
	</form>

</div>	


<script>
	
	
	$(function(){
		types=$(".types").attr("value");
		
		if(types=="经验"){
			
			$("#experience").attr("selected","true");	
		}else if(types=="作品"){
			
			$("#opus").attr("selected","true");	
		}else if(types=="笔记"){
			$("#notes").attr("selected","true");	
		}
		
		
	})
	
	</script>
</body>
</html>