<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
	
	//加载登陆页面
	public function login(){
		
		$this -> display();
		
	}
	//登陆判断
	public function logincheck(){
		//获取登陆信息
		// var_dump($_SESSION);
		$name = $_POST["name"];
		$pass = $_POST["pass"];
		
		$user = M("user")->where("name = '$name' and pass = '$pass'")->select();
		// var_dump($user);
		
		if(!empty($user)){
			session('name',$name);
			$this -> redirect("Home/Index/index");
			
		}else{
			$this -> redirect("Home/public/login");
			
		}
		
		
	}
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
	// 判断
	//用户注册
	public function register(){
		$this->display();
	}
	public function registers(){
		//获取地址信息
		
		// $province = $_POST["province"];//省
		// $city = $_POST["city"];//市
		// $county = $_POST["county"];//县
		// $dizhi = $province.$city.$county;
		$county = $_POST["county"];//县
		var_dump($dizhi);
		//获取添加时间
		$_POST["create_time"]= date("Y-m-d H:i:s",time());
		$info = M("user")->add($_POST);
		
		$verify = new \Think\Verify();
		$panduan =  $verify->check($_POST['yzm']);
		// var_dump($info);
		// var_dump($panduan);
		// if($info && $panduan){
			// $_SESSION["name"]=$_POST["name"];
			// $this -> success("注册成功",U('index/index'));
			
		// }else{
			// if(empty($panduan)){
				// echo '<script type="text/javascript">
						// alert("请输入验证码");
				// </script>';
				
			// }
			// $this -> error("注册失败",U('public/register'));
		// }
	}
	//退出登录
	public function loginout(){
		
        session('name',null);
		
        $this->success('退出成功',U('public/login'));
    }
	
}