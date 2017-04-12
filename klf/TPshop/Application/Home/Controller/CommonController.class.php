<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
   public function _initialize(){
       
		$data = session('name');
		// var_dump($data);
		$this ->assign("data",$data);
		if(empty($data)){
			$this -> redirect("public/login");
		}
		
		
    }
}