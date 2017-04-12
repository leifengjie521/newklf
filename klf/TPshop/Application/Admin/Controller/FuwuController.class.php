<?php
namespace Admin\Controller;
use Think\Controller;
class FuwuController extends CommonController {
	   public function lists(){
		//分页显示输出
		$User = M("fuwu");
		$list      = $User->select();// 查询满足要求的总记录数
		
		// $pid = M("keshi")->select();
		// var_dump($pid);
		//当前数据
		$this -> assign("listsa",$list);
		
		
		//加载添加用户模板
		$this -> display();
	   }
	//添加
	public function add(){
		$arr = M("keshi")->select();
		
		$this -> assign("arr",$arr);
		$this -> display();
	}
	public function addAction(){
		$info = M("Fuwu")->add($_POST);
		// var_dump($_POST);
		if($info){
			//成功
			$this->success("添加成功");
			// echo 1;
		}else{
			//失败
			$this->error("添加失败");
			// echo 2;
			
		}
		
	}
	//删除
	public function del(){
		$id = $_GET["uid"];
		
		$info = M("Fuwu")->where("id = $id")->delete();
		
		if($info){
			
			$this->success("删除成功");
		}else{
			$this->error("删除失败");
			
		}
	}
	//修改
	public function edit(){
		
		//获取id
		$id = $_GET["uid"];
		
		$arr = M("keshi")->select();
		$info = M("Fuwu")->where("id = $id")->find();
		
		$this->assign("info",$info);
		$this->assign("arr",$arr);
		//加载模板
		$this->display();
		
	}
	
	public function editAction(){
		//修改数据
		$id = $_POST["id"];
		 // var_dump($_POST);
		$info = M("Fuwu")->where("id = $id")->save($_POST);
		// var_dump($info);
		if($info){
			
			$this->success("修改成功");
			
		}else{
			
			$this->error("修改失败");
			
		} 
		
	}
}	