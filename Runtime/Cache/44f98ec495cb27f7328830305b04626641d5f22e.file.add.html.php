<?php /* Smarty version Smarty-3.1.6, created on 2017-05-19 10:56:07
         compiled from "/var/www/html/Topcoder/Home/View/Inform/add.html" */ ?>
<?php /*%%SmartyHeaderCode:884989471591c4bce1b0be3-39019414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44f98ec495cb27f7328830305b04626641d5f22e' => 
    array (
      0 => '/var/www/html/Topcoder/Home/View/Inform/add.html',
      1 => 1495162561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '884989471591c4bce1b0be3-39019414',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_591c4bce1dfe0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591c4bce1dfe0')) {function content_591c4bce1dfe0($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<title>创建用户信息</title>
	<link rel="stylesheet" type="text/css" href="<?php echo @css;?>
/style1.css">
	<link rel="stylesheet" type="text/css" href="<?php echo @css;?>
/style2.css">
	<script src="<?php echo @js;?>
/jQuery.js" type="text/javascript"></script>
        	
<script type="text/javascript">
$(function(){
	
	$("#divQQbox").hover(function(){
		$(this).stop(true,false);
		$(this).animate({left:0},300);	
	},function(){
		$(this).animate({left:-162},300);	
	});
	
});
</script>


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
	    <form action="<?php echo @__SELF__;?>
" method="post">
	        <input id="drops" name="drop"  type="submit" value="退出" />
	    </form>
        <a id="drops" style="background:#DDDDDD;line-height:32px;" href="<?php echo @__APP__;?>
/Inform/share">分享平台</a>
	</div>
	<div class="regist">
		<div class="container">
			<form action="<?php echo @__SELF__;?>
" name="myForm" method="post">
				<ul class="reg_box">
					<li class="reg_li">
						<span class="reg_span">姓名：</span>
						<div class="reg_input">
						    <input type="text" placeholder="请输入您的姓名" name="name" class="input">
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">性别：</span>
						<div class="reg_redio">
							<label for="male">
								<input type="radio" name="sex" value="男" id="male" checked> 男
							</label>&nbsp;&nbsp;&nbsp;
							<label for="female">
								<input type="radio" name="sex"  value="女" id="female"> 女
							</label>
						 <select name="grade" id="grades" style="width:95px;margin-left: 10px;">
							    <option value="">选择年级</option>
							    <option value="2011级">2011级</option>
							    <option value="2012级">2012级</option>
							    <option value="2013级">2013级</option>
							    <option value="2014级">2014级</option>
							    <option value="2015级">2015级</option>
							    <option value="2016级">2016级</option>
							    <option value="2017级">2017级</option>
							    <option value="2018级">2018级</option>
							    <option value="2019级">2019级</option>
							    <option value="2020级">2020级</option>
							    <option value="2021级">2021级</option>
							    <option value="2022级">2022级</option>
							    <option value="2023级">2023级</option>
							    <option value="2024级">2024级</option>
							    <option value="2025级">2025级</option>
							</select>
							<select name="groups" id="grades" style="width:95px;margin-left: 10px;">
								<option value="">选择组别</option>
								<option value="算法组">算法组</option>
								<option value="项目组">项目组</option>
							</select>
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">手机号：</span>
						<div class="reg_input">
						    <input type="text" placeholder="请输入您的手机号" name="phone" class="input">
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">QQ：</span>
						<div class="reg_input">
						    <input type="text" placeholder="请输入您的QQ号" name="qq" class="input">
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">微信：</span>
						<div class="reg_input">
						    <input type="text" placeholder="请输入您的微信号" name="wechat" class="input">
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">邮箱：</span>
						<div class="reg_input">
						    <input type="text" placeholder="请输入您的邮箱" name="email" class="input">
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">工作地址：</span>
						<div class="reg_input">
						    <input type="text" placeholder="请输入您的工作地址" name="address" class="input">
						</div>
					</li>
					<li class="reg_li">
						<span class="reg_span">学习经历：</span>
						<div class="reg_input">
						    <input type="text" placeholder="请输入您的学习经历" name="l_exp" class="input">
						</div>
					</li>
					<li class="reg_text">
						<span class="reg_span">工作经历：</span>
						<div class="reg_input">
						    <textarea cols="35" rows="6" name="W_exp" style="padding:3px;"></textarea>
						</div>
					</li>
					<li class="reg_text">
						<span class="reg_span">寄语：</span>
						<div class="reg_input">
						    <textarea cols="35" rows="6" name="motto" style="padding:3px;"></textarea>
						</div>
					</li>
					<li class="reg_auto">
		                <input type="submit" name="submit" value="提交" class="reg_btn"/>
		            </li>
		            <li style="margin-left:200px;margin-top:20px;"><a href="<?php echo @__APP__;?>
/Inform/show">查看成员信息</a></li>
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
<div id="divQQbox" class="QQbox">
	<div id="divOnline" class="Qlist">
		<div class="OnlineLeft">
			<div class="con">
				<ul>
                    <li><a href="<?php echo @__APP__;?>
">首页</a></li>
                    <li><a href="<?php echo @__APP__;?>
/Inform/share">分享平台</a></li>
                    <li><a href="<?php echo @__APP__;?>
/Inform/show">信息展示</a></li>
                    <li><a href="<?php echo @__APP__;?>
/Inform/userlist">管理用户</a></li>
					
				</ul>
			</div>
		</div>
		<div class="OnlineBtn" style="font-size:20px;word-wrap:;break-word;letter-spacing:20px;">导航栏</div>
	</div>
</div>
	
<script type="text/javascript">
$(function(){
	
	$("#divQQbox").hover(function(){
		$(this).stop(true,false);
		$(this).animate({left:0},300);	
	},function(){
		$(this).animate({left:-162},300);	
	});
	
});
</script>

</body>
</html><?php }} ?>