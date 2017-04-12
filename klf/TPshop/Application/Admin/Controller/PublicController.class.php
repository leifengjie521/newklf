<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
	//验证码
	public function yzm(){
		
		$config =    array(
			'fontSize'    =>    50,    // 验证码字体大小
			'length'      =>    3,     // 验证码位数
			'useNoise'    =>    false, // 关闭验证码杂点
		);
		$Verify =     new \Think\Verify($config);
		$Verify->entry();
	}
	//加载登陆页面
	public function login(){
		$this -> display();
		
	}
	//登陆判断
	public function logincheck(){
		//获取登陆信息
		$name = $_POST["name"];
		$pass = $_POST["pass"];
		// $verify = new \Think\Verify();
		// $panduan =  $verify->check($_POST['yzm']);
		$user = M("admin")->where("name = '$name' and pass = '$pass'")->select();
		
		 if(!empty($user)){
			session('name',$name);
			$this -> redirect("Admin/Index/index");
			
		}else{
			// $this -> redirect("Admin/public/login");
			$this -> error("账号或密码错误，请重新输入");
			
		}
		
		
	}
	
	//退出登录
	public function loginout(){
		
        session('name',null);
		
        $this->success('退出成功',U('public/login'));
    }
	
}