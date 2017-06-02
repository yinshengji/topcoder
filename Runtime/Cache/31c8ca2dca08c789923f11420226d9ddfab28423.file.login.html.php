<?php /* Smarty version Smarty-3.1.6, created on 2017-06-02 23:25:33
         compiled from "F:/wamp/www/topcoder/Home/View\Inform\login.html" */ ?>
<?php /*%%SmartyHeaderCode:290755931836d3b8920-40426327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31c8ca2dca08c789923f11420226d9ddfab28423' => 
    array (
      0 => 'F:/wamp/www/topcoder/Home/View\\Inform\\login.html',
      1 => 1492482766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290755931836d3b8920-40426327',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5931836d5e815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5931836d5e815')) {function content_5931836d5e815($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<title>用户登录</title>
	<link rel="stylesheet" type="text/css" href="<?php echo @css;?>
/style1.css">
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
						<span class="reg_span">验证码：</span>
						<div class="login_input">
						    <input type="text" placeholder="请输入验证码" name="verify" style="width:100px; float:left; margin-right:10px;" class="input">
							    <img src="<?php echo @__APP__;?>
/Inform/verifyImg" onclick="this.src='<?php echo @__APP__;?>
/Inform/verifyImg?k='+Math.random()" style="float:left;" />
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