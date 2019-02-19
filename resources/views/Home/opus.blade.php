@extends('layout/home/index')	


@section('types')	
<h1>分类:作品</h1>


@endsection


@section('main')	
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


@endsection