<?php /*%%SmartyHeaderCode:174015874821141b345-77998037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64f4cf59f4e5477f05f93ebe9a82b4f248aee552' => 
    array (
      0 => 'D:/wamp/www/XXXX/TC/Home/View\\Inform\\login.html',
      1 => 1484028735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174015874821141b345-77998037',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5874821170cec',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5874821170cec')) {function content_5874821170cec($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<title>用户登录</title>
	<link rel="stylesheet" type="text/css" href="/XXXX/TC/Public/css/style1.css">
</head>
<body>
	<div class="header">
		<div class="header_bar">
			<h1>Topcoder</h1>
			<h2> 欢迎登录！</h2>
		</div>
	</div>
	<div class="login_bar">
		<div class="container">
			<form action="/XXXX/TC/index.php/Inform/login" name="myForm" method="post">
				<ul class="reg_box">
					<li class="reg_li">
						<span class="reg_span">用户名：</span>
						<div class="login_input">
						    <input type="text" placeholder="请输入用户名" name="username" maxlength="6" class="input">
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">密 码：</span>
						<div class="login_input">
						    <input type="password" placeholder="请输入密码" name="password" class="input">
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">验证码：</span>
						<div class="login_input">
						    <input type="text" placeholder="请输入验证码" name="verifyImg" maxlength="6" class="input">
						    <img src="/XXXX/TC/index.php/home/inform/verifyImg" />
						</div>
					</li>
					<li class="login_auto">
		                <input type="submit" value="登录" class="login_btn"><br/>
		            </li>
		            <li class="reg_li">
						<a href="register.html" class="reg">快速注册！</a>
					</li>
				</ul>
			</form>
		</div>
	</div>
	<div class="footer">
	    <p class="foot_p">
	    	<a href="#">TopCoder网站</a>
	    	 &nbsp;|&nbsp; 
	    	<a href="http://weibo.com/u/3969932680?is_hot=1#_loginLayer_1479735030734">南工ACM校训队微博</a> &nbsp;|&nbsp; 
	    	<a href="http://blog.sina.com.cn/u/3969932680">南工ACM校集训队博客</a>
	    </p>
		<h5>地址：计算机与信息工程学院7#116</h5>
		<p>Copyrights &copy; 2016 Afford All rights reserved | Designed by Topcoder</p>
	</div>
</body>
</html><?php }} ?>