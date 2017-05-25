<?php /* Smarty version Smarty-3.1.6, created on 2017-05-17 21:11:34
         compiled from "/var/www/html/Topcoder/Home/View/Inform/register.html" */ ?>
<?php /*%%SmartyHeaderCode:1775015519591c4c06d0bc40-28176803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f9e5bac2331f14f4e35f35bcc76d33d94c6b143' => 
    array (
      0 => '/var/www/html/Topcoder/Home/View/Inform/register.html',
      1 => 1484013671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1775015519591c4c06d0bc40-28176803',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_591c4c06d224d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591c4c06d224d')) {function content_591c4c06d224d($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<title>用户注册</title>
	<link rel="stylesheet" type="text/css" href="<?php echo @css;?>
/style1.css">
</head>
<body>
	<div class="header">
		<div class="header_bar">
			<h1>Topcoder</h1>
			<h2> 欢迎注册！</h2>
		</div>
	</div>
	<div class="login_bar">
		<div class="container">
			<form action="<?php echo @__SELF__;?>
" name="myForm" method="post">
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
						<span class="reg_span">确认密码：</span>
						<div class="login_input">
						    <input type="password" placeholder="请再次输入密码" name="confirmpassword" class="input">
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">邮 箱：</span>
						<div class="login_input">
						    <input type="email" placeholder="请输入你的邮箱" name="email" class="input">
						</div>
					</li>
					<li class="login_auto submit">
		                <input type="submit" value="提交" class="login_btn"><br/>
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