<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>登录</title>

<link rel="stylesheet" href="/myblog/Public/admin/css/normalize.css">

</head>

<body>

<div class="login">
	<h1>后台登录</h1>
	<form method="post" action="/myblog/admin.php/Home/Admin/checkLogin">
		<input type="text" name="mg_username" id="admin_user" placeholder="用户名" required="required" />
		<input type="password" name="mg_password"  id="admin_psd" placeholder="密码" required="required" />
		<button type="submit" class="btn btn-primary btn-block btn-large">登录</button>
	</form>
</div>



</body>
</html>