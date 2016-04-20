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

<style>
  .caroul li img{
      width: 400px;
      height: 140px;
  }
  .anchorbutton{
    text-align: center;
  }
  .headbar li img{
    width: 800px;
    height: 200px;
  }
  form p{
    text-align: center;
  }
</style>
  <div class="pageheader">
    <h1 class="pagetitle">图片更换</h1>
    <span class="pagedesc"></span>         
    <ul class="hornav">
      <li class="current"><a href="#caroul">首页轮播图</a></li>           
              
    </ul>
  </div>
  <!--pageheader-->
  <div id="contentwrapper" class="contentwrapper">
  <!--轮播图替换-->
    <div id="caroul" class="subcontent">
        <div class="contenttitle2">
          <h3>首页轮播图片替换</h3>
        </div><!--contenttitle-->
        
        <ul class="morephotolist caroul">
          <!-- <?php if(is_array($caroul)): foreach($caroul as $key=>$vo): ?>-->
          <li>
            <a href="javascript:void(0)"><img src="./../../../../../../Public/Uploads/<?php echo ($vo["img_path"]); ?>" alt="轮播图片" /></a>
            <br>
            <a href="javascript:void(0)" class="anchorbutton confirmbutton" onclick="changebtn(<?php echo ($vo["id"]); ?>)">点击替换</a>
          </li> 
          <!--<?php endforeach; endif; ?> -->
        </ul><!--morephotolist-->
        
    </div> 
  </div>
  <div id="popup_overlay" style="position: absolute;display:none; z-index: 99998; top: 0px; left: 0px; width: 100%; height: 602px; opacity: 0.01; background: rgb(255, 255, 255);"></div>
    <div id="popup_container" class="ui-draggable" style="position: fixed;display:none; z-index: 99999; padding: 0px; margin: 0px; min-width: 514px; max-width: 514px; top: 150px; left: 370.5px;">
      <h1 id="popup_title">选择替换的图片</h1>
      <div id="popup_content" class="confirm">
      <div id="popup_message">
      <form enctype="multipart/form-data">
        <p>
          <label>上传相关图片：</label>
          <span class="field">
            <input type="file" class="largeinput" id="uploadImgFile" name="photo">
            <input type="hidden" value="" class="id">
          </span>
        </p>
        <p><small class="desc" style="color:#FD9326;">*图片格式：jpg, gif, png, jpeg (最大不超过500kB)</small></p> 
        <div id="popup_panel">
          <input type="button" value="&nbsp;确认&nbsp;" id="popup_ok"> 
          <input type="button" value="&nbsp;取消&nbsp;" id="popup_cancel">
        </div>
    </form>
    </div>
  </div>
  </div>