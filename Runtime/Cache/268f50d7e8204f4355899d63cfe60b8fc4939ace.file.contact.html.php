<?php /* Smarty version Smarty-3.1.6, created on 2017-06-02 23:22:50
         compiled from "F:/wamp/www/topcoder/Home/View\Project\contact.html" */ ?>
<?php /*%%SmartyHeaderCode:2579859317e292177a5-72584709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '268f50d7e8204f4355899d63cfe60b8fc4939ace' => 
    array (
      0 => 'F:/wamp/www/topcoder/Home/View\\Project\\contact.html',
      1 => 1496416079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2579859317e292177a5-72584709',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59317e29710ed',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59317e29710ed')) {function content_59317e29710ed($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<title>联系我们</title>

<style type="text/css">
    *{font-family:Microsoft YaHei;}

</style>

<link rel="bookmark"  type="image/x-icon"  href="<?php echo @image;?>
/logo.ico"/>
<link rel="shortcut icon" href="<?php echo @image;?>
/logo.ico"> 
<link rel="icon" href="<?php echo @image;?>
/logo.ico">

<link href="<?php echo @css;?>
/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="<?php echo @css;?>
/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="topcoder, tc, topcoder工作室, tc工作室, 算法, 项目, 南阳理工" />
  
<style>
   input{
   	border-radius: 4px;
   }

    @media (max-width: 768px){
    	.footer-grid p{margin-bottom:-20px;}
    	input{margin-bottom:15px;}
    }
     @media (max-width: 425px){
     	.input{margin-bottom:30px;}
     	.textarea{width:100%;}
     	.text{width:300px;margin:0 auto;}
     }
     @media (max-width: 320px){
     	.textarea{width:100%;}
     	.text{width:270px;margin:0 auto;}
     }
      @media (max-width: 768px){
      	.textarea{width:100%;}
     	.text{width:600px;margin:0 auto;}
      }
</style>
   

</head>
<body>
<!--header start here-->
<div class="header">
	<div class="container head-nav-back">
		<div class="header-main">
			<div class="logo wow bounceIn" data-wow-delay="0.4s">
				<a href="$smarty.const.__APP__}/Index/index.html"> <img src="<?php echo @images;?>
/logo1.png" alt=""/> </a>
			</div>
			<div class="navg">
				<span class="menu"> <img src="<?php echo @images;?>
/icon.png" alt=""/></span>
				<ul class="res"> 
					<li><a href="<?php echo @__APP__;?>
/Index/index.html">首页</a></li>
					<li><a href="<?php echo @__APP__;?>
/Project/about.html">简介</a></li>
					<li><a href="<?php echo @__APP__;?>
/Project/suanfa.html">算法</a></li>
					<li><a href="<?php echo @__APP__;?>
/Project/single.html">项目</a></li>
					<li><a href="<?php echo @__APP__;?>
/Project/project.html">相册</a></li>
					<li><a class="contactive " href="<?php echo @__APP__;?>
/Project/contact.html">加入我们</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h3>加入我们</h3>
				<p style="font-size:17px;">我们在7号教学楼116室&nbsp;&nbsp;TopCoder工作室等着你们！</p>
			</div>
			<div class="col-md-6 contact-left footer-grid wow bounceIn" data-wow-delay="0.4s">
				<h3>我们的誓言</h3>
				<h4>全力以赴，追求卓越</h4>
				<p>空想会想出很多绝妙的主意，但却办不成任何事情。</p>
                <p>当你还不能对自己说今天学到了什么东西时，你就不要去睡觉。</p>
                <p>一个有信念者所开发出的力量，大于99个只有兴趣者。</p>

			</div>
			
			<div class="col-md-6 contact-right footer-grid wow bounceIn" data-wow-delay="0.4s">
				<h3>报名个人信息</h3>
				<form action="<?php echo @__SELF__;?>
" method="post">
					<input class="input" type="text" value="姓名" name="n_name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '姓名';}"/>
					<input type="text" value="学号" name="n_sno" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '学号';}"/>
                	<input type="text" value="班级" name="n_grade" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '班级';}" />
                	<input type="text" value="QQ号" name="n_qq" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'QQ号';}" />
                	<input type="text" value="手机号" name="n_phone" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '手机号';}" />
                	<div class="text">
                		<textarea class="textarea" name="n_why" placeholder="加入我们的原因"></textarea>
                	</div>
					<input type="submit" value="提交">
				</form>
				
			</div>
			
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--contact end here-->

<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-4 footer-grid wow bounceIn" data-wow-delay="0.4s">
			  <h3>校内友情链接</h3>
			  <ul class="ftr-list">
			  	<li><a href="http://www.nyist.net/">南阳理工学院 </a></li>
			  	<li><a href="http://cie.nyist.edu.cn/">计算机与信息工程学院</a></li>
			  	<li><a href="http://book.nyist.net/">图书馆 </a></li>
			  	<li><a href="http://172.31.31.34/jwweb/">教务管理系统</a></li>
			  	<li><a href="http://acm.nyist.net/">ACM在线测评系统</a></li>
			  	<li><a href="http://weibo.com/u/3969932680?is_hot=1#_loginLayer_1479735030734">南工ACM校训队微博</a></li>
			  	<li><a href="http://soft-bysj.nyist.net/fm360/">校园导航</a></li>
			  </ul>
			</div>
			<div class="col-md-4 footer-grid wow bounceIn" data-wow-delay="0.4s">
			  <h3>如何成为优秀程序员？</h3>
			  <img src="<?php echo @images;?>
/c4.jpg" alt=""/>
			  <p>秉持对编程的乐趣和激情，你最需要的是坚持和努力，而不是机遇。一个优秀的程序员就是那种即使是过单行道都要往两边看的人。——Doug Linder</p>
			  <div class="ftr-bwn">
			<a href="http://www.codeceo.com/article/10-effective-way-good-programmer.html" class="hvr-pulse">Read More</a>
			  </div>
			</div>
			<div class="col-md-4 footer-grid wow bounceIn" data-wow-delay="0.4s">
			  <h3>TopCoder工作室-专业创新团队</h3>
			  <P>我们有梦想，有追求，拥有学习算法的热情或者学习web设计和开发的强烈兴趣。我们拥有执着的精神和为梦想勇于拼搏的勇气。我们拥有强烈的上进心和责任心，以及具有团队中不可或缺的交流和分享能力！</P>
			  <h5>前辈： <a href="<?php echo @__APP__;?>
/Inform/add">录入信息</a> 
			  	
			  </h5>
			  <h5>QQ群：209157082</h5> 
			  <h5>博客：<a href="http://blog.sina.com.cn/u/3969932680">南工ACM校集训队</a></h5>
			  <h5>地址：计算机与信息工程学院7#116</h5>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--footer end here-->
<!--copyrights start here-->
<div class="copyright">
	<div class="container">
		<div class="copyright-main wow bounceInLeft" data-wow-delay="0.4s">
			<p>Copyrights &copy; 2016 Afford All rights reserved | Designed by Topcoder</a></p>
		</div>
	</div>
</div>
<!--copyrights end here-->

</body>
</html><?php }} ?>