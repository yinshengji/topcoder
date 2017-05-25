<?php /* Smarty version Smarty-3.1.6, created on 2017-05-17 15:26:06
         compiled from "/var/www/html/Topcoder/Home/View/Project/suanfa.html" */ ?>
<?php /*%%SmartyHeaderCode:876521884591bfb0ea82494-80452564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '478389581facb5b1811f0e4183a634cb53b6539d' => 
    array (
      0 => '/var/www/html/Topcoder/Home/View/Project/suanfa.html',
      1 => 1482209881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '876521884591bfb0ea82494-80452564',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_591bfb1040d70',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591bfb1040d70')) {function content_591bfb1040d70($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<title>算法组</title>
<link href="<?php echo @css;?>
/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link rel="bookmark"  type="image/x-icon"  href="<?php echo @image;?>
/logo.ico"/>
<link rel="shortcut icon" href="<?php echo @image;?>
/logo.ico"> 
<link rel="icon" href="<?php echo @image;?>
/logo.ico">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo @js;?>
/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo @css;?>
/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Lobortis Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.useso.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo @js;?>
/move-top.js"></script>
<script type="text/javascript" src="<?php echo @js;?>
/easing.js"></script>

	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<!---- animated-css ---->
		<link href="<?php echo @css;?>
/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="<?php echo @js;?>
/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!---- animated-css ---->
<style type="text/css">
	.navg ul li a.active{
		text-decoration:none;
		color:#fff;
		background: url(<?php echo @images;?>
/nav-back.png)no-repeat 0px -3px;
		background-size:initial;
		transition: 0.5s all;
		-webkit-transition: 0.5s all;
		-moz-transition:  0.5s all;
		-o-transition:  0.5s all;
	}
	/*学习天地*/
	.projects_add{
		margin:20px 0 0 0;
		padding:20px;
		/*background: url(<?php echo @images;?>
/slid-bg.jpg);*/
		background:#E0E0E0;
		box-shadow:2px 2px 3px #ccc; 
	}
	/*.projects-inform {
		margin:20px 0 0 20px;
	}*/
	.projects-inform .row{
		/*background:url(<?php echo @images;?>
/slid-bg.jpg);*/
	}
	.projects-inform ul.ftr-list li{
		border-bottom:0;
	}
	.projects-inform h3{
		color:#666;
	}
	.projects-inform h3{
		font-size: 1.2em;
	}
	.projects-inform .col_text{
		background: url(<?php echo @images;?>
/slid-bg.jpg);
		box-shadow: 3px 3px 5px #eee;
		padding:20px 0 10px 0;
	}
	.projects-inform .text ul{
		list-style: none;
		padding:0;
	}
	.projects-inform .text ul li{
		margin:3px 0 3px 0;
		font-size: 0.9em;
		color:#333;
	}
	.project-text p {
		color:#666;
	}
	.project-text h4{
		color:#000;
	}
	.self{
			padding:15px;
			margin-top:10px;
		}
		@media (max-width: 768px) {
			.col_text{
				text-align: center;
			}
		}
		@media (max-width: 414px) {
			#hidden{
				display:none;
			}
			.ftr-list{
				font-size:13px;
			}
			.text{
				font-size:15px;
				line-height:1.7;
			}
		}
</style>
</head>
<body>
<!--header start here-->
<div class="header">
	<div class="container head-nav-back">
		<div class="header-main">
			<div class="logo wow bounceIn" data-wow-delay="0.4s">
				<a href="index.html"> <img src="<?php echo @images;?>
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
					<li><a class="active" href="<?php echo @__APP__;?>
/Project/suanfa.html">算法</a></li>
					<li><a href="<?php echo @__APP__;?>
/Project/single.html">项目</a></li>
					<li><a href="<?php echo @__APP__;?>
/Project/project.html">相册</a></li>
					<li><a href="<?php echo @__APP__;?>
/Project/contact.html">加入我们</a></li>
				</ul>
				 <script>
                              $( "span.menu").click(function() {
                                                                $(  "ul.res" ).slideToggle("slow", function() {
                                                                 // Animation complete.
                                                                 });
                                                                 });
                 </script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->
<!--about start here-->
<div class="projects">
	<div class="container">
		<div class="projects-main">
			  <div class="projects-top">
			  	<h3 style="color:#333;">TopCoder算法组</h3>
			  	<p style="color:#666;">TopCoder算法组成立于2010年，主要从事算法学习和算法竞赛，通过参加全球的TopCoder 或 ACM等算法竞赛的形式，检验自己的学习成果。作为成立较晚，但发展最快的算法组，俨然已成为学院团队中最璀璨，最耀眼的一颗新星。从2012年参加算法竞赛至今，工作室已取得惊人的成绩！TopCoder算法组云集了一群热爱算法，追求卓越的coder（编程员），我们的目标就是成为TopCoder（顶级编程员）。奋斗吧，少年们！</p>
			  </div>
			  <div class="projects-inform projects_add wow bounceInLeft" data-wow-delay="0.4s">
				 <div class="project-img">
					<img src="<?php echo @image;?>
/show_2.jpg" alt=""/>
				 </div>
				 <div class="project-text">
				 	<h4>我追求</h4>
					<p class="p1">梦想不是用来空想的，而是用来追求的，我们是一群为梦想而生的有志青年。</p><p class="p2">我们参加敢死队集训，以优异赛绩进入工作室，努力学习算法，进行创新型优化，从最基础的C语言入手，逐步学习更高端的算法知识，【背包】、【贪心】、【矩阵】、【图论】、【搜索】、【数学】等，我们参加寒暑假集训，在其他同龄人享受短暂假期带来的休憩时，我们选择了奋斗，我们在一点一滴的努力着、进步着，我们不再犹豫，因为TC团队教会了我们如何去追求自己的梦想；我们不再孤独，因为TC团队给了我们奋斗路上最好的陪伴！</p>
				 </div>
				 <div class="clearfix"> </div>
			  </div>
			  <div class="projects-inform projects_add wow bounceInRight" data-wow-delay="0.4s">
				 <div class="project-img" style="float:right;">
					<img src="<?php echo @image;?>
/show_3.jpg" alt=""/>
				 </div>
				 <div class="project-text" style="float:left;">
				 	<h4>我创新</h4>
					<p class="p1">认真是一种态度，而创新却是保证我们始终矗立于顶峰的不二途径。</p><p class="p2"> 想出新办法的人在他的办法没有成功以前，人家总说他是异想天开，而我们正是一个善于创新的团队。我们努力学习，我们思维缜密，我们奔赴于各所高校，不愿错过任何一场比赛，我们始终在探索着，不断寻求更好的解题思路。赛场上，我们争分夺秒，全力调动脑细胞，寻求最优解题方法，排行榜不断刷新，我们为团队荣誉而战。赛后，我们归纳总结，同样全力以赴。TopCoder就是这样一个大写的团队！</p>
				 </div>
				 <div class="clearfix"> </div>
			  </div>
			  <div class="projects-inform self wow bounceInLeft " data-wow-delay="0.4s" >
			  	<div class="row col_text">
			  		<div class="col col-md-4">
			  		   
			  		    <div class="footer-grid" style="margin-top:20px;"> 
			  		    	<h3 style="margin-top:-20px">大赛奖项</h3>
				  			<ul class="ftr-list">
				  				<li>2012年河南省第五届ACM程序设计大赛金奖</li>
				  				<li>2012年河南省第五届ACM程序设计大赛金奖</li>
				  				<li>2013年河南省第六届ACM程序设计大赛银奖</li>
				  				<li>2014年河南省第七届ACM程序设计大赛金奖</li>
				  				<li>2014年河南省第七届ACM程序设计大赛银奖</li>
				  				<li>2015年河南省第八届ACM程序设计大赛金奖</li>
				  				<li>2015年河南省第八届ACM程序设计大赛银奖</li>
				  			</ul>
			  			</div>
			  		</div>
			  		<div class="text col col-md-8">
			  		    <h3>学习天地</h3>
			  			<div class="col-md-8 col-sm-8" style="padding:0;">
			  				<div class="col-md-6 col-sm-6">
							    <h4>计算几何</h4>
	                            <ul>
	                                <li><a target="_blank" href="http://www.cppblog.com/RyanWang/archive/2009/02/09/73275.aspx">计算几何入门题目推荐</a></li>
	                                <li><a target="_blank" href="http://blog.csdn.net/zxy_snow/article/details/6952052">计算几何题目分类</a></li>
	                                <li><a target="_blank" href="http://dev.gameres.com/Program/Abstract/Geometry.htm">计算几何基础算法概览</a></li>
	                                <li><a target="_blank" href="http://www.cnblogs.com/Booble/archive/2011/04/03/2004865.html">计算几何凸包之旋转卡壳</a></li>
	                            </ul>
					  		</div>
					  		<div class="col-md-6 col-sm-6">
    							<h4>数论</h4>
                                <ul>
                                    <li><a target="_blank" href="http://blog.csdn.net/jackfirst86/article/details/6635016">欧几里得及扩展欧几里得</a></li>
                                    <li><a target="_blank" href="http://rihkdd.sinaapp.com/?p=134">欧几里得及扩展欧几里得</a></li>
                                    <li><a target="_blank" href="http://www.matrix67.com/blog/archives/276">矩阵乘法应用</a></li>
                                    <li><a target="_blank" href="http://www.cnblogs.com/void/category/294006.html">数论+大数</a></li>
                                </ul>
                		    </div>
    			  			<div class="col-md-6 col-sm-6">	
    		  				    <h4>图论</h4>
    							<ul> 
    							    <li><a target="_blank"  href="http://www.cnblogs.com/aiyelinglong/archive/2012/03/26/2418707.html">最小生成树和最短路</a></li>
    								<li><a target="_blank" href=" http://www.cppblog.com/MatoNo1/archive/2011/05/29/147627.aspx">次小生成树</a></li>
    								<li><a target="_blank"  href="http://www.csie.ntnu.edu.tw/~u91029/Path.html">图论算法</a></li>
    								<li><a target="_blank" href="http://chuanwang66.iteye.com/blog/1450715">最大流 SAP算法</a></li>
    								<li><a target="_blank"  href="http://blog.sina.com.cn/s/blog_4f3b79d00100ao4z.html">最短路之SPFA算法</a></li>
    							</ul>
                		    </div>
    			  			<div class="col-md-6 col-sm-6" id="hidden">
    			  				<h4>数据结构</h4>
    						    <ul>
    							    <li><a target="_blank" href=" http://sjjg.js.zwu.edu.cn/SFXX/index.html">数据结构学习系统</a></li>
    							    <li><a target="_blank" href="http://blog.csdn.net/akof1314/article/details/4388722">图—邻接表</a></li>
    							    <li><a target="_blank" href="http://blog.csdn.net/feixiaoxing/article/category/878822">数据结构与算法</a></li>
    							    <li><a target="_blank" href="http://www.cnblogs.com/dongsheng/articles/2628935.html">线段树初级讲解</a></li>
    							    <li><a target="_blank" href="http://www.notonlysuccess.com/index.php/segment-tree-complete/">完全版线段树</a></li>
    						    </ul>
    			  			</div>
            		    </div>
			  			<div class="col-md-4 col-sm-4" id="hidden">
			  				<h4>一些综合性博客</h4>
	                        <ul>               
	                            <li><a target="_blank"  href=" http://blog.acmicpc.info/" >Acmer博客流</a></li>
	                            <li><a target="_blank"  href="http://www.zjtg.cn/itjs/suanfa/default.asp">信息学竞赛</a></li>
	                            <li><a target="_blank"  href="http://coolshell.cn/articles/4990.html">程序员练级攻略</a></li>
	                            <li><a target="_blank"  href="http://www.1point3acres.com/bbs/forum-84-1.html">一亩三分地</a></li>
	                            <li><a target="_blank"  href="http://hi.baidu.com/jacky_liye/item/f4087f435e9c9416886d1048">关于算法学习的感悟</a></li>
	                            <li><a target="_blank"  href="http://www.zlinkin.com/?paged=2">LOST OF MY LIFE</a></li>
	                            <li><a target="_blank"  href="http://community.topcoder.com/tc?module=Static&d1=tutorials&d2=alg_index">TopCoder算法教程</a></li>
	                        	<!-- <li><a target="_blank"  href="http://www.codecademy.com/#!/exercises/0">学习编程</a></ li>
	                            <li><a target="_blank"  href="http://www.csie.ntnu.edu.tw/~u91029/index.html">演算法笔记（好东西）</a></li>
	                            <li><a target="_blank"  href="http://www.cnblogs.com/chinazhangjie/archive/2012/08/17/2644628.html"> 那些年读过的好书</a></li> -->
	                            <li><a target="_blank"  href=" http://codeforces.com/">算法界的CF</a></li>
	                            <li><a target="_blank"  href="http://shaidaima.com/">晒代码</a></li>
	                            <li><a target="_blank"  href="http://www.learncpp.com/">learncpp（C++学习）</a></li>
	                            <li><a target="_blank"  href="http://www.cplusplus.com/">Cplusplus（C++学习）</a></li>
	                            <!--<li><a target="_blank"  href="http://www.pudn.com/">程序员联合开发</a></li>!-->
	                        </ul>
			  			</div>	
			  		</div>
			  	</div>
				<div class="clearfix"> </div>
			  </div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--about end here-->
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
</html>


<?php }} ?>