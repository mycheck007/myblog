<?php
namespace Model;
use Think\Model;
class AdminModel extends Model {
    //制作一个方法对用户名和密码进行校验
    public function checkNamePwd($name,$pwd){
    	//1.根据$name查询是否有此记录
    	//select * from sw_manager where mg_mame=$name
    	//select find()
    	//根据指定字段进行查询getByXXX();getByMg_name($name);
    	$info = $this->getByAdmin_name($name);
    	//$info = null 说明用户名错误
    	//$info=  以为数组  正确
    	if ($info!=null) {
    		//验证密码（查询出来的密码与用户输入的密码进行比较）
    		if ($info['admin_pwd']!=$pwd) {
    			return false;
    		}else{
    			return $info;
    		}
    	}else{
    		return false;
    	}
    }
}