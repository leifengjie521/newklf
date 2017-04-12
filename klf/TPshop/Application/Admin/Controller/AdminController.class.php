<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends CommonController {
    public function lists(){
		
		if($_REQUEST["Adminname"]){
			//按name搜索 
			$name = $_REQUEST["Adminname"];
			//分页显示输出 搜索成功继续显示分页功能
			$Admin = M("Admin");

			$count      = $Admin->where("name = '$name'")->count();// 查询满足要求的总记录数
			
			//取得一页显示多少条
			$numPerPage = empty($_REQUEST["numPerPage"])?15:$_REQUEST["numPerPage"];
			
			$Page       = new \Think\Page($count,$numPerPage);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $Admin->where("name = '$name'")->limit($Page->firstRow.','.$Page->listRows)->select();
			//当前数据
			$this -> assign("listsa",$list);
			
			//总条数
			$this -> assign("totalCount",$count);
			
			//每页显示多少条$numPerPage
			$this -> assign("numPerPage",$numPerPage);
			
			//页标数字多少个$Page->totalPages
			$this -> assign("pageNumShown",$Page->totalPages);
			
			//当前显示第几页
			$page = empty($_REQUEST["pageNum"])?1:$_REQUEST["pageNum"];
			$this -> assign("currentPage",$page);
			$this -> assign("Adminname",$name);
		}else{
			//分页显示输出
			$Admin = M("Admin");
			$count      = $Admin->count();// 查询满足要求的总记录数
			
			//取得一页显示多少条
			$numPerPage = empty($_REQUEST["numPerPage"])?15:$_REQUEST["numPerPage"];
			
			$Page       = new \Think\Page($count,$numPerPage);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $Admin->limit($Page->firstRow.','.$Page->listRows)->select();
			//当前数据
			$this -> assign("listsa",$list);
			
			//总条数
			$this -> assign("totalCount",$count);
			
			//每页显示多少条$numPerPage
			$this -> assign("numPerPage",$numPerPage);
			
			//页标数字多少个$Page->totalPages
			$this -> assign("pageNumShown",$Page->totalPages);
			
			//当前显示第几页
			$page = empty($_REQUEST["pageNum"])?1:$_REQUEST["pageNum"];
			$this -> assign("currentPage",$page);
		}
		
		//加载添加用户模板
		$this -> display();
	}
	//添加
	public function addAction(){
		$info = M("yangsheng")->add($_POST);
		// var_dump($info);
		if($info){
			//成功
			$this->success("添加成功");
		}else{
			//失败
			$this->error("添加失败");
			
		}
		
	}
	//删除
	public function del(){
		$id = $_GET["uid"];
		
		$info = M("Admin")->where("id = $id")->delete();
		
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
		
		$info = M("Admin")->where("id = $id")->find();
		
		$this->assign("info",$info);
		//加载模板
		$this->display();
		
	}
	
	public function editAction(){
		//修改数据
		$id = $_POST["id"];
		
		$info = M("Admin")->where("id = $id")->save($_POST);
		
		if($info){
			
			$this->success("修改成功");
			
		}else{
			
			$this->error("修改失败");
			
		}
		
	}
}	