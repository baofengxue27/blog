<?php
namespace app\Http\Controllers\Home;


use Illuminate\Http\Request;

use DB;

class IndexController{
	
	public function index(){	//前端首页
		
		
		$sql=DB::table("myblog_article")->orderBy("time","desc")->paginate(5);
		
		
		$recently=DB::table("myblog_article")->orderBy("time","desc")->limit(6)->get();		//近期文章
		
		$enterNum=DB::table("myblog_index_num")->where("uid","=","1")->limit(1)->get();
		
		$oldNum=$enterNum[0]->num;		
		
		$oldNum++;		//访客数+1
		
		DB::table("myblog_index_num")->where("uid","=",1)->update(["num"=>$oldNum]);
		
		$oldNum=number_format($oldNum);
		
		
		return view("Home/index")->with("sql",$sql)->with("recently",$recently)->with("enterTotal",$oldNum);
		
	}
	
	public function opus(){	//作品
		
		$recently=DB::table("myblog_article")->orderBy("time","desc")->limit(6)->get();		//近期文章
		
		$sql=DB::table("myblog_article")->where("types","=","作品")->orderBy("time","desc")->get();
		
		$enterNum=DB::table("myblog_index_num")->where("uid","=","1")->limit(1)->get();
		
		$oldNum=$enterNum[0]->num;		
		
		$oldNum++;		//访客数+1
		
		DB::table("myblog_index_num")->where("uid","=",1)->update(["num"=>$oldNum]);
		
		$oldNum=number_format($oldNum);
		
		return view("Home/opus")->with("sql",$sql)->with("recently",$recently)->with("enterTotal",$oldNum);
	}
	
	public function experience(){	//经验
		
		$recently=DB::table("myblog_article")->orderBy("time","desc")->limit(6)->get();		//近期文章
		
		$sql=DB::table("myblog_article")->where("types","=","经验")->orderBy("time","desc")->get();
		
		$enterNum=DB::table("myblog_index_num")->where("uid","=","1")->limit(1)->get();
		
		$oldNum=$enterNum[0]->num;		
		
		$oldNum++;		//访客数+1
		
		DB::table("myblog_index_num")->where("uid","=",1)->update(["num"=>$oldNum]);
		
		$oldNum=number_format($oldNum);
		
		return view("Home/experience")->with("sql",$sql)->with("recently",$recently)->with("enterTotal",$oldNum);
	}
	
	public function notes(){	//笔记
		
		$recently=DB::table("myblog_article")->orderBy("time","desc")->limit(6)->get();		//近期文章
		
		$sql=DB::table("myblog_article")->where("types","=","笔记")->orderBy("time","desc")->get();
		
		$enterNum=DB::table("myblog_index_num")->where("uid","=","1")->limit(1)->get();
		
		$oldNum=$enterNum[0]->num;		
		
		$oldNum++;		//访客数+1
		
		DB::table("myblog_index_num")->where("uid","=",1)->update(["num"=>$oldNum]);
		
		$oldNum=number_format($oldNum);
		
		return view("Home/notes")->with("sql",$sql)->with("recently",$recently)->with("enterTotal",$oldNum);
	}
	
	public function aboutme(){	//关于我
		
		$recently=DB::table("myblog_article")->orderBy("time","desc")->limit(6)->get();		//近期文章
		
		$comment=DB::table("myblog_comment")->where("id","=",-1)->get();		//评论
		
		$num=DB::table("myblog_comment")->where("id","=",-1)->count();		//评论数
		
		$enterNum=DB::table("myblog_index_num")->where("uid","=","1")->limit(1)->get();
		
		$oldNum=$enterNum[0]->num;		
		
		$oldNum++;		//访客数+1
		
		DB::table("myblog_index_num")->where("uid","=",1)->update(["num"=>$oldNum]);
		
		$oldNum=number_format($oldNum);
		
		return view("Home/aboutme")->with("comment",$comment)->with("num",$num)->with("recently",$recently)->with("enterTotal",$oldNum);
	}
	
	public function article(Request $request,$id=1){		//文章展示
		
		$recently=DB::table("myblog_article")->orderBy("time","desc")->limit(6)->get();		//近期文章
		
		$sql=DB::table("myblog_article")->where("uid","=",$id)->get();	//查找文章
		
		$comment=DB::table("myblog_comment")->where("id","=",$id)->get();		//评论
		
		$num=DB::table("myblog_comment")->where("id","=",$id)->count();		//评论数
		
		$enterNum=DB::table("myblog_index_num")->where("uid","=","1")->limit(1)->get();
		
		$oldNum=$enterNum[0]->num;		
		
		$oldNum++;		//访客数+1
		
		DB::table("myblog_index_num")->where("uid","=",1)->update(["num"=>$oldNum]);
		
		$oldNum=number_format($oldNum);
		
		
		return view("/Home/article")->with("sql",$sql[0])->with("comment",$comment)->with("num",$num)->with("recently",$recently)->with("enterTotal",$oldNum);
		
	}
	
	
	public function comment(Request $request){
		
		
		$me=$request->input('id');
		
		
		if($me=="me"){		//如果是关于我 的评论
			
			$arr=$request->except("_token");
			
			$arr['time']=time();
			
			$arr['id']=-1;
			
			$sql=DB::table("myblog_comment")->insert($arr);
			
			if($sql){
				echo 1;
			}
			
		}else{
			
			
			$arr=$request->except("_token");

			$arr['time']=time();

			$sql=DB::table("myblog_comment")->insert($arr);

			if($sql){
				echo 1;
			}

			
			
		}
		
		
	
		
		
		
		
		
		
		
	}
	
	
	
	
	
	
}




?>