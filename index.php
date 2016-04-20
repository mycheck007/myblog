<?php

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

//定义CSS JS IMG常量





// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
	define('APP_DEBUG',True);
	define('APP_NAME', 'Home');
	define('APP_PATH', './Home/');

	require './ThinkPHP/ThinkPHP.php';
	// App::run();

// 亲^_^ 后面不需要任何代码了 就是如此简单