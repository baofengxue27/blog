<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*	首页*/


Route::get('/',"Home\IndexController@index");

Route::get("/opus","Home\IndexController@opus");	//作品

Route::get("/experience","Home\IndexController@experience");	//经验

Route::get("/notes","Home\IndexController@notes");	//笔记

Route::get("/aboutme","Home\IndexController@aboutme");	//关于我

Route::any("/article/{id?}","Home\IndexController@article");	//文章展示

Route::post("/comment","Home\IndexController@comment");	//评论

Route::get("/radio",function(){
	return view("/Home/radio");
});


/*	后台	*/


Route::get("/admin","Admin\IndexController@index");//	后台登录界面

Route::post("/admin/check","Admin\IndexController@check");//	后台登录界面

Route::get("/admin/admin","Admin\IndexController@admin");//	管理界面

Route::any("/admin/add","Admin\IndexController@add");//	增加文章

Route::any("/admin/article/manage","Admin\IndexController@manage");//	文章管理

Route::get("/admin/article/update/{id?}","Admin\IndexController@update");//	文章修改跳转

Route::post("/admin/article/updateExe","Admin\IndexController@updateExe");//	文章修改上传

Route::get("/admin/article/delete/{id?}","Admin\IndexController@delete");//	删除文章

