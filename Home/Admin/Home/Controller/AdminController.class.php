<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html; charset=utf-8");
class AdminController extends Controller {
    public function login(){
        $this->display();
    }
    public function checkLogin(){
    	
    	$user=$user = new \Model\AdminModel();
        $rst=$user->checkNamePwd($_POST['mg_username'],$_POST['mg_password']);
    	
    	if ($rst === false) {
    		$this->error("登陆失败,请重新登录!");
    	}else{
    		$_SESSION['Mg']=$rst;
    		$this->success('登录成功!','../Index/index',2);
    	}
    }
} 