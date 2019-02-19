@extends('layout/admin/index')

@section('main')

<form method="post" action="/admin/add" enctype="multipart/form-data">
	{{csrf_field()}}

<div class="form-group">
	<label>文章标题</label>
	<input type="text" name="title" class="form-control">
</div>


 <div class="form-group">
 	<label>文章描述</label>
 	<input type="text" class="form-control" name="abstract">
 </div>
  <div class="form-group">
	<label>选择分类</label>
	<select name="types" class="form-control">
		<option value="作品">作品</option>	<!--作品-->
		<option value="经验">经验</option>	<!--经验-->
		<option value="笔记">笔记</option>	<!--笔记-->
	</select>
</div>
 
  <div class="form-group">
  	<input type="file" name="img"  class="form-control">
  </div>

  <!-- 加载编辑器的容器 -->
    <script id="container" name="content" type="text/plain">
        
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



@endsection