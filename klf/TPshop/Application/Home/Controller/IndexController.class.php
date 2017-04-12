<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		//导航栏	
		$nav = M("nav")->select();
		// var_dump($nav);
		$this->assign("nav",$nav);
        // 加载首页模板
		$this -> display();
    }
}