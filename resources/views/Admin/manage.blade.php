@extends('layout/admin/index')


@section('main')

<style>

	.img img{
		height: 100px;
		width: 100px;
	}

</style>
<table class="table table-hover table-bordered">
	<tr>
		<td>uid</td>
		<td>标题</td>
		<td>封面</td>
		<td>分类</td>
		<td colspan="3">操作</td>
		
	</tr>
	
	@foreach($sql as $key=>$val)
	
		<tr>
			<td>{{$val->uid}}</td>
			<td>{{$val->title}}</td>
			<td class="img"><img src="/Uploads/{{$val->img}}"></td>
			<td>{{$val->types}}</td>
			<td><a class="" href="/article/{{$val->uid}}">查看文章</a></td>
			<td>
			<a class="update" id="{{$val->uid}}" href="/admin/article/update/{{$val->uid}}">修改</a></td>
			<td>
				<a href="/admin/article/delete/{{$val->uid}}">删除</a>
			</td>
		</tr>

	@endforeach
		
	
	
</table>

		<div class="row text-center">
			{{$sql->links()}}	<!--  分页显示 -->
		</div>	
<script>

$(function(){
	$(".manage").addClass("active");
	$(".manage").siblings().removeClass("active");
})
</script>
@endsection