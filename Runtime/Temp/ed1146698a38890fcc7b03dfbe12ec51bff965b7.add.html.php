<?php /*%%SmartyHeaderCode:32574587482148f96a5-57859147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed1146698a38890fcc7b03dfbe12ec51bff965b7' => 
    array (
      0 => 'D:/wamp/www/XXXX/TC/Home/View\\Inform\\add.html',
      1 => 1483948871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32574587482148f96a5-57859147',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58748214df826',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58748214df826')) {function content_58748214df826($_smarty_tpl) {?> <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<title>创建用户信息</title>
	<link rel="stylesheet" type="text/css" href="/XXXX/TC/Public/css/style1.css">
</head>
<body>
	<div class="header">
		<div class="header_bar">
			<!-- <div class="logo_bar">
				<img src="logo.png">
			</div> -->
			<h1>Topcoder</h1>
			<h2> 欢迎登录！</h2>
		</div>
	</div>
	<div id="drop">
	    <form action="">
	        <input id="drops"   type="button" value="退出" />
	    </form>
	</div>
	<div class="regist">
		<div class="container">
			<form action="" name="myForm" method="post">
				<ul class="reg_box">
					<li class="reg_li">
						<span class="reg_span">姓名：</span>
						<div class="reg_input">
						    <input type="text" placeholder="请输入您的姓名" class="input">
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">性别：</span>
						<div class="reg_redio">
							<label for="male">
								<input type="radio" name="sex" id="male" checked> 男
							</label>&nbsp;&nbsp;&nbsp;
							<label for="female">
								<input type="radio" name="sex" id="female"> 女
							</label>
						 <select name="grade" id="grades" style="width:95px;margin-left: 10px;">
							    <option value="">选择年级</option>
							    <option value="">2011级</option>
							    <option value="">2012级</option>
							    <option value="">2013级</option>
							    <option value="">2014级</option>
							    <option value="">2015级</option>
							    <option value="">2016级</option>
							    <option value="">2017级</option>
							    <option value="">2018级</option>
							    <option value="">2019级</option>
							    <option value="">2020级</option>
							    <option value="">2021级</option>
							    <option value="">2022级</option>
							    <option value="">2023级</option>
							    <option value="">2024级</option>
							    <option value="">2025级</option>
							</select>
							<select name="" id="grades" style="width:95px;margin-left: 10px;">
								<option value="">选择组别</option>
								<option value="">算法组</option>
								<option value="">项目组</option>
							</select>
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">手机号：</span>
						<div class="reg_input">
						    <input type="text" placeholder="请输入您的手机号" class="input">
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">QQ：</span>
						<div class="reg_input">
						    <input type="text" placeholder="请输入您的QQ号" class="input">
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">微信：</span>
						<div class="reg_input">
						    <input type="text" placeholder="请输入您的微信号" class="input">
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">邮箱：</span>
						<div class="reg_input">
						    <input type="text" placeholder="请输入您的邮箱" class="input">
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">工作地址：</span>
						<div class="reg_input">
						    <input type="text" placeholder="请输入您的工作地址" class="input">
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">学习经历：</span>
						<div class="reg_input">
						    <input type="text" placeholder="请输入您的学习经历" class="input">
						</div>
					</li>
					<li class="reg_text">
						<span class="reg_span">工作经历：</span>
						<div class="reg_input">
						    <textarea cols="35" rows="6" style="padding:3px;"></textarea>
						</div>
					</li>
					<li class="reg_text">
						<span class="reg_span">寄语：</span>
						<div class="reg_input">
						    <textarea cols="35" rows="6" style="padding:3px;"></textarea>
						</div>
					</li>
					<li class="reg_auto">
		                <a href="show.html"><input type="button" value="提交" class="reg_btn"/></a>
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