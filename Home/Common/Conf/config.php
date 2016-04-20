<?php
return array(
	//数据库和路由的基本配置
    'DB_TYPE'               => 'mysql',						// 数据库类型
	'DB_HOST'               => 'localhost',					// 服务器地址
    'DB_NAME'               => 'shop',                      // 数据库名
	'DB_USER'               => 'root',                      // 用户名
	'DB_PWD'                => '741734224',                 // 密码
	'DB_PORT'               => 3306,						// 端口
	'DB_PREFIX'             => 'ya_',					    // 数据库表前缀
	'DB_CHARSET'            => 'utf8',						// 字符集
	//'MODULE_ALLOW_LIST'     => array ('Home','User'),		//默认分组可以省略Home
    'DEFAULT_MODULE'		=> 'Home',						//默认模块省略Home
    'DEFAULT_ACTION'        => 'index',						// 默认操作名称
    'URL_HTML_SUFFIX'       => '',							// URL伪静态后缀设置，消除url的.html
    //'DB_FIELDS_CACHE'       => true,                         //启用字段缓存 
    // 'TMPL_ENGINE_TYPE'      => 'Smarty',                    //设置默认模板引擎


    //'TMPL_ACTION_ERROR'     =>  'Tpl/Admin/Admin/dispatch_jump', // 默认错误跳转对应的模板文件
    //'TMPL_ACTION_SUCCESS'   =>  'Tpl/Admin/Admin/dispatch_jump', // 默认成功跳转对应的模板文件
);