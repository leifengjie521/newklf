<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
   
	
	public function _initialize(){
       
		$data = session('name');
		$this ->assign("data",$data);
		if(empty($data)){
			$this -> redirect("public/login");
		}
		
		
    }
	
}