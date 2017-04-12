<?php
namespace Home\Controller;
use Think\Controller;
class ProductsController extends Controller {
    
	
	//产品列表
	public function lists(){
		//查看列表
		$nav = M("nav")->select();
		$listinfo = M("listinfo")->select();
		//数据赋值
		$this->assign("nav",$nav);
		$this->assign("listinfo",$listinfo);
		
	
		
        // 加载列表页模板
		$this -> display();
    }
	//产品详情
	public function info(){
		$nav = M("nav")->select();
		$this->assign("nav",$nav);
		$this -> display();
	}
}