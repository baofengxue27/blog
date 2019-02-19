<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Session;

class IndexController{
	
	public function index(){	//登录操作
		
		return view("Admin/index");
		
		
	}
	
	public function check(Request $request){
		
		$id=$request->input('id');
		
		$pass=$request->input('pass');
		
		$count=DB::table("myblog_admin")->where([["id","=",$id],["pass","=",$pass]])->get()->count();
		
		if($count){
			
			Session::put('pass', 'true');
			
			return redirect("/admin/admin");
			
		}else{
			return redirect("/admin");
		}
		
	}
	
	
	public function admin(){
		
		return view("Admin/admin");		//后台界面
		
		
	}
	
	
	public function add(Request $request){
		
		
		$arr=$request->except('_token','img');

		$img=$request->file('img');

		$ext=$request->file('img')->getClientOriginalExtension();//	获取文件的后缀名

		$time=time();

		$newName=$time.".".$ext;

		$arr["img"]=$newName;
		
		
		$arr['time']=$time;
		

		$img->move('Uploads',$newName);

		
		$sql=DB::table("myblog_article")->insert($arr);
		
		return redirect("/admin/article/manage");
		
	}	//增加文章
	
	
	public function manage(){	//文章管理界面
		
		
		$sql=DB::table("myblog_article")->orderBy("time","desc")->paginate(10);
		
		return view("Admin/manage")->with("sql",$sql);
	}
	
	
	public function update($id=1){	//修改文章
		
			$value =Session::get('pass');	
	
	
	if(empty($value)){
		echo "<script>location='/admin';</script>";
	}
		
		
		$sql=DB::table("myblog_article")->where("uid","=",$id)->get();
		
		
		return view("Admin/update")->with("sql",$sql[0]);

	}
	
	
	public function updateExe(Request $request){	//修改文章执行
		
		
		$img=$request->hasFile('img');//	判断文件是否上传		//返回true或者false
		
		if($img){	//如果有封面上传上传
			
			
			
			$arr=$request->except('_token');
			
			$img=$request->file('img');	//	获取上传文件基本信息
			
			$ext=$request->file('img')->getClientOriginalExtension();//	获取文件的后缀名
			
			$time=time();
			
			$arr['img']=$time.".".$ext;	//图片名字
			
			$id=$arr['id'];
			
			
			$sql=DB::table("myblog_article")->where("uid","=",$id)->pluck("img")[0];//获取之前封面的名字
			
			unlink("./Uploads/".$sql);	//删除图片
			
			unset($arr['id']);
			
			DB::table("myblog_article")->where("uid","=",$id)->update($arr);//修改数据
			
			$img->move('Uploads',$arr['img']);	
			
			return redirect("/admin/article/manage");
			
		}else{
			
			
			
			$id=$request->input('id');
				
			$arr=$request->except('_token','id');	
			
			DB::table("myblog_article")->where("uid","=",$id)->update($arr);//修改数据
			
			return redirect("/admin/article/manage");
			
		}
		
		
	}
	
	
	public function delete($id){	//删除文章操作
		
		$sql=DB::table("myblog_article")->where("uid","=",$id)->pluck("img")[0];//获取之前封面的名字
		
		unlink("./Uploads/".$sql);	//删除图片
		
		
		
		DB::table("myblog_comment")->where("id","=",$id)->delete();	//删除评论
		
		DB::table("myblog_article")->where("uid","=",$id)->delete();	//删除文章
		
		return redirect("/admin/article/manage");
		
	}
	
}




?>