<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>雨爱博客后台管理系统－－首页</title>
<link rel="stylesheet" href="/myblog/admin/Public/css/style.default.css" type="text/css" />
<link rel="stylesheet" href="/myblog/admin/Public/css/mytool.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="/myblog/admin/Public/ueditor/themes/default/css/ueditor.css">
<script type="text/javascript" charset="utf-8" src="/myblog/admin/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/myblog/admin/Public/ueditor/ueditor.all.js"></script>
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="/myblog/admin/Public/css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="/myblog/admin/Public/css/style.ie8.css"/>
<![endif]-->
</head>
<style type="text/css">
    .clear {
      clear: both;
    }
</style>
<body class="withvernav">
<div class="bodywrapper">
    <div class="topheader">
        <div class="left">
            <h1 class="logo">雨爱blog.<span>admin</span></h1>
            <span class="slogan">后台管理系统</span>
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
            <div class="userinfo">
            	<img src="/myblog/admin/Public/images/thumbs/avatar.png" alt="" />
                <span>管理员</span>
            </div><!--userinfo-->
            
            <div class="userinfodrop">
            	<div class="avatar">
                	<a href=""><img src="/myblog/admin/Public/images/thumbs/avatarbig.png" alt="" /></a>
                    <div class="changetheme">
                    	切换主题: <br />
                    	<a class="default"></a>
                        <a class="blueline"></a>
                        <a class="greenline"></a>
                        <a class="contrast"></a>
                        <a class="custombg"></a>
                    </div>
                </div><!--avatar-->
                <div class="userdata">
                	<h4>Juan</h4>
                    <span class="email">youremail@yourdomain.com</span>
                    <ul>
                    	<li><a href="editprofile.html">个人资料</a></li>
                        <li><a href="accountsettings.html">账号设置</a></li>
                        <li><a href="#">帮助</a></li>
                        <li><a href="/myblog/admin/index.php/home/admin/login">退出</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
    	<ul class="headermenu">
        	<li class="current"><a href="/myblog/admin/index.php/home/Index/index"><span class="icon icon-flatscreen"></span>首页</a></li>
             <li><a href="/myblog/admin/index.php/home/Img/changeImg"><span class="icon icon-chart"></span>图片更换</a></li>
            <li><a href="/myblog/admin/index.php/home/Secondary/news"><span class="icon icon-pencil"></span>新闻发布</a></li>
            <!-- <li><a href="reports.html"><span class="icon icon-chart"></span>统计报表</a></li> -->
        </ul>      
    </div><!--header-->
    
    <div class="vernav2 iconmenu">
    	<ul>
        	<li><a href="#menusub" class="editor"> <a href="/myblog/admin/index.php/home/Menu/index">菜单编辑</a>
            	
            </li>
            <li><a href="#productsub" class="elements"> 产品介绍</a>
                <span class="arrow"></span>
                <ul id="productsub">
                    <li><a href="/myblog/admin/index.php/home/Secondary/product"> 编辑产品信息</a></li>
                    <li><a href="/myblog/admin/index.php/home/Secondary/productList"> 产品列表</a></li>
                </ul>
            </li>
            <li><a href="#suggestion" class="widgets">解决方案</a>
                <span class="arrow"></span>
                <ul id="suggestion">
                    <li><a href="/myblog/admin/index.php/home/Secondary/suggestion"> 编辑解决方案</a></li>
                    <li><a href="/myblog/admin/index.php/home/Secondary/suggestionList"> 解决方案列表</a></li>
                </ul>
            </li>
            <li><a href="#market" class="calendar">市场活动</a>
                <span class="arrow"></span>
                <ul id="market">
                    <li><a href="/myblog/admin/index.php/home/Secondary/marketList"> 活动列表</a></li>
                    <li><a href="/myblog/admin/index.php/home/Secondary/addmarket"> 添加一个活动</a></li>
                </ul>
            </li>
            <li><a href="/myblog/admin/index.php/home/Secondary/newsList" class="support">新闻中心</a></li>
            <li><a href="#case" class="typo">用户案例</a>
                <span class="arrow"></span>
                <ul id="case">
                    <li><a href="/myblog/admin/index.php/home/Secondary/caseEdit"> 新建案例</a></li>
                    <li><a href="/myblog/admin/index.php/home/Secondary/caselist"> 用户案例汇总</a></li>
                </ul>
            </li>
			<li><a href="/myblog/admin/index.php/home/Secondary/aboutUs" class="buttons">关于我们</a></li>
            <li><a href="#Plan" class="addons">大学计划</a>
            	<span class="arrow"></span>
            	<ul id="Plan">
                    <li><a href="/myblog/admin/index.php/home/Plan/blocks">相关模块介绍</a></li>
                </ul>
            </li>
            <li><a href="#addons" class="error">其他页面</a>
            	<span class="arrow"></span>
            	<ul id="addons">
               		<li><a href="/myblog/admin/index.php/home/Admin/editInfo">管理员信息修改</a></li>
                    <li><a href="/myblog/admin/index.php/home/Admin/addAdmin">申请管理员</a></li>
                </ul>
            </li>
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->
    <div class="centercontent">

    <div>
        这里编辑内容
    </div>
   </div><!-- centercontent -->    
    
</div><!--bodywrapper-->

</body>


<script type="text/javascript" src="/myblog/admin/Public/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/myblog/admin/Public/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="/myblog/admin/Public/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="/myblog/admin/Public/js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="/myblog/admin/Public/js/plugins/jquery.validate.min.js"></script>
<script type="text/javascript" src="/myblog/admin/Public/js/plugins/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="/myblog/admin/Public/js/plugins/charCount.js"></script>
<script type="text/javascript" src="/myblog/admin/Public/js/plugins/ui.spinner.min.js"></script>
<script type="text/javascript" src="/myblog/admin/Public/js/plugins/chosen.jquery.min.js"></script>
<script type="text/javascript" src="/myblog/admin/Public/js/custom/general.js"></script>
<script type="text/javascript" src="/myblog/admin/Public/js/custom/forms.js"></script>
</html>