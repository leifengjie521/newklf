<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
       
	   //加载后台首页模板
	   $this -> display("index");
	 
    }
	
}