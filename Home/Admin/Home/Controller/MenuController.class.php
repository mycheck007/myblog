<?php
namespace Home\Controller;
use Think\Controller;
class MenuController extends Controller {
    public function index(){
        $menu = M('Menu')->where('id = 1')->find();
    	$topmenu = $menu['head_menu'];
        $topmenu = json_decode($topmenu);
    	$this->assign('menu',$topmenu);
    	$this->display();
   }
   public function saveTopMenu()
    {
    	$topmenu = $_POST['topmenu'];
        $topmenu = json_encode($topmenu);
    	$data['head_menu'] = $topmenu;
    	$res = M('Menu')->where('id = 1')->data($data)->save();
    	if($res){
    		$this->success("菜单编辑成功!");
    	}else{
    		$this->error("菜单编辑失败!");
    	}
    }
}