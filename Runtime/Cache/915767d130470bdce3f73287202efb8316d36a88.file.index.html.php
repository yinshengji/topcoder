<?php /* Smarty version Smarty-3.1.6, created on 2017-05-23 11:09:24
         compiled from "F:/wamp/www/Topcoder/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:194705922b9eaec5b23-33918345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '915767d130470bdce3f73287202efb8316d36a88' => 
    array (
      0 => 'F:/wamp/www/Topcoder/Home/View\\Index\\index.html',
      1 => 1495508890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194705922b9eaec5b23-33918345',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5922b9eb4c8d0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5922b9eb4c8d0')) {function content_5922b9eb4c8d0($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
    <title>首页</title>
    <link href="<?php echo @css;?>
/bootstrap.css" rel="stylesheet" type="text/css" media="all">

    <link rel="bookmark" type="image/x-icon" href="<?php echo @image;?>
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
    <link href="<?php echo @css;?>
/hover.css" rel="stylesheet" media="all">
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--<script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>-->
    <meta name="keywords"
          content="topcoder, team"/>
    <!--Google Fonts-->
    <!--<link href='http://fonts.useso.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>-->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="<?php echo @js;?>
/move-top.js"></script>
    <script type="text/javascript" src="<?php echo @js;?>
/easing.js"></script>
    <!--
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    -->
    <!-- //end-smoth-scrolling -->
    <!---- animated-css ---->
    <link href="<?php echo @css;?>
/animate.css" rel="stylesheet" type="text/css" media="all">
   <!-- <script src="<?php echo @js;?>
/wow.min.js"></script>-->
    <script>
        /*new WOW().init();*/
    </script>
    <!---- animated-css ---->
    <script src="<?php echo @js;?>
/jquery-1.11.0.min.js"></script>
    <style type="text/css">

        /* header */
        /*.head-nav-back{
            background: url(images/header-container.PNG) no-repeat bottom center;
            background-size:100%;
            -webkit-background-size:100%;
            height:120px;
        }*/
        /*首页小轮播*/
        .grid img {
            width: 250px;
            height: 150px;
        }

        /*导航栏*/
        .navg ul li a.active {
            text-decoration: none;
            color: #fff;
            background: url(<?php echo @images;?>
/nav-back.png) no-repeat 0 -3px;
            background-size: initial;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
        }

        
        @media (max-width: 375px) {
            .grid {
                padding-right: 20px;
            }
        }
        
        

        @media (max-width: 768px) {
            .info-bott h5 {
                margin-top: 15px;
            }
        }

        
    </style>
</head>
<body>
<!--header start here-->
<div class="header">
    <div class="container head-nav-back">
        <div class="header-main">
            <div class="logo">
                <a href="index.html"> <img src="<?php echo @images;?>
/logo1.png" alt=""/></a>
            </div>
            <div class="navg">
                <span class="menu"> <img src="<?php echo @images;?>
/icon.png" alt=""/></span>
                <ul class="res">
                    <li><a class="active" href="<?php echo @__APP__;?>
">首页</a></li>
                    <li><a href="<?php echo @__APP__;?>
/Project/about">简介</a></li>
                    <li><a href="<?php echo @__APP__;?>
/Project/suanfa.html">算法</a></li>
                    <li><a href="<?php echo @__APP__;?>
/Project/single.html">项目</a></li>
                    <li><a href="<?php echo @__APP__;?>
/Project/project.html">相册</a></li>
                    <li><a href="<?php echo @__APP__;?>
/Project/contact.html">加入我们</a></li>
                </ul>
                <script type="text/javascript">
                    $("span.menu").click(function () {
                        $("ul.res").slideToggle("slow", function () {

                            // Animation complete.
                        });
                    });
                </script>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--header end here-->
<!--banner start here-->
<!-- <div class="banner"> -->
<div id="mycarousel" data-ride="carousel" data-interval="4000" class="carousel slide">
    <ol class="carousel-indicators">
        <li class="active" data-target="#mycarousel" data-slide-to="0"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
        <li data-target="#mycarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active" style="background:#223240;">
            <img src="<?php echo @image;?>
/slide10.png" alt="第一张">
        </div>
        <div class="item" style="background:#F5E4DC;">
            <img src="<?php echo @image;?>
/slide8.png" alt="第二张">
        </div>
        <div class="item" style="">
            <img src="<?php echo @image;?>
/slide9.png" alt="第三张">
        </div>
    </div>
    <a href="#mycarousel" data-slide="prev" class="carousel-control left">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#mycarousel" data-slide="next" class="carousel-control right">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<!-- </div> -->
<!--banner end here-->
<!--info-grid start here-->
<div class="info-grid wow bounce" data-wow-delay="0.1s">
    <div class="container">
        <div class="info-grid-main">
            <div class="col-md-4 info-grids-cr wow bounceIn" data-wow-delay="0.4s">
                <div class="info-top">
                    <h3>nyist_飘谊 <span class="gd-clr">大神博客</span></h3>
                </div>
                <div class="info-bott">
                    <img src="<?php echo @images;?>
/c1.jpg" alt=""/>
                    <p>文章分类：PQJ、 NYOJ、 数据结构、 字符串处理、动态规划、&nbsp; 乱七八糟 、贪心、 搜索、 数论、&nbsp; 矩阵、&nbsp; 图论、 Game、 ACMer、 树状数组、
                        线段数、</p>
                    <h5>访问：142249次&nbsp;&nbsp;&nbsp;&nbsp; 积分：2440</h5>
                </div>
                <div class="infogrid-bwn">
                    <a href="http://blog.csdn.net/piaoyi0208">READ MORE</a>
                </div>
                <!-- <div class="gd-tl-tip"> </div> -->
            </div>
            <div class="col-md-4 info-grids-cr wow bounceIn" data-wow-delay="0.4s">
                <div class="info-top">
                    <h3>nyist_xiaod <span class="gd-clr">大神博客</h3></span>
                </div>
                <div class="info-bott">
                    <img src="<?php echo @images;?>
/c2.jpg" alt=""/>
                    <p>
                        文章分类：点点滴滴、学习笔记、比赛总结、动态规划、计算几何、字符串、模拟、贪心、搜索、&nbsp;博弈、Template、图论、OfferKiller、&nbsp;&nbsp;数学、数据结构</p>
                    <h5>访问：335078次&nbsp;&nbsp;&nbsp;&nbsp; 积分：6431</h5>
                </div>
                <div class="infogrid-bwn">
                    <a href="http://blog.csdn.net/dgq8211">READ MORE</a>
                </div>
                <!-- <div class="gd-tl-tip"> </div> -->
            </div>
            <div class="col-md-4 info-grids-cr wow bounceIn" data-wow-delay="0.4s">
                <div class="info-top">
                    <h3>Chris-Chang <span class="gd-clr">大神博客</h3></span>
                </div>
                <div class="info-bott">
                    <img src="<?php echo @images;?>
/c3.jpg" alt=""/>
                    <p>文章分类：PHP详解、PHP问题解决、Linux详解、Linux问题解决、C和指南针、数据结构、Git&Svn、Kettle、MySQL详解、环境配置、Smarty、ThinkPHP</p>
                    <h5>访问：37002次&nbsp;&nbsp;&nbsp;&nbsp; 积分：1206</h5>
                </div>
                <div class="infogrid-bwn">
                    <a href="http://blog.csdn.net/the_victory?viewmode=contents">READ MORE</a>
                </div>
                <!-- <div class="gd-tl-tip"> </div> -->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--info-grid end here-->
<!--movergrid start here-->

<div class="flex-slider  wow bounceInLeft" data-wow-delay="0.4s">
    <div class="container">
        <ul id="flexiselDemo4">
            <li>
                <div class="grid col-md-4">
                    <img src="<?php echo @image;?>
/prize_1.png" alt="prize_1">
                </div>
            </li>
            <li>
                <div class="grid col-md-4">
                    <img src="<?php echo @image;?>
/prize_2.png" alt="prize_2">
                </div>
            </li>
            <li>
                <div class="grid col-md-4">
                    <img src="<?php echo @image;?>
/prize_3.png" alt="prize_3">
                </div>
            </li>
            <li>
                <div class="grid col-md-4">
                    <img src="<?php echo @image;?>
/prize_4.png" alt="prize_4">
                </div>
            </li>
            <li>
                <div class="grid col-md-4">
                    <img src="<?php echo @image;?>
/prize_5.png" alt="prize_5">
                </div>
            </li>
            <li>
                <div class="grid col-md-4">
                    <img src="<?php echo @image;?>
/prize_6.png" alt="prize_6">
                </div>
            </li>
            <li>
                <div class="grid col-md-4">
                    <img src="<?php echo @image;?>
/prize_7.png" alt="prize_7">
                </div>
            </li>
        </ul>
    </div>
    <script type="text/javascript">
        $(window).load(function () {
            $("#flexiselDemo4").flexisel({
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 3
                    }
                }
            });

        });
    </script>
    <script type="text/javascript" src="<?php echo @js;?>
/jquery.flexisel.js"></script>
</div>
<!--movegrid end here-->
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
                    <a href="http://www.codeceo.com/article/10-effective-way-good-programmer.html" class="hvr-pulse">Read
                        More</a>
                </div>
            </div>
            <div class="col-md-4 footer-grid wow bounceIn" data-wow-delay="0.4s">
                <h3>TopCoder工作室-专业创新团队</h3>
                <P>我们有梦想，有追求，拥有学习算法的热情或者学习web设计和开发的强烈兴趣。我们拥有执着的精神和为梦想勇于拼搏的勇气。我们拥有强烈的上进心和责任心，以及具有团队中不可或缺的交流和分享能力！</P>
                <h5>QQ群：209157082</h5>
                <h5>博客：<a href="http://blog.sina.com.cn/u/3969932680">南工ACM校集训队</a></h5>
                <h5>地址：计算机与信息工程学院7#116</h5>
            </div>
            <div class="clearfix"></div>
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
<script src="<?php echo @js;?>
/bootstrap.min.js"></script>
</body>
</html><?php }} ?>