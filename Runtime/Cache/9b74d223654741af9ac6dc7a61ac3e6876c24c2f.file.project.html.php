<?php /* Smarty version Smarty-3.1.6, created on 2017-05-17 15:26:10
         compiled from "/var/www/html/Topcoder/Home/View/Project/project.html" */ ?>
<?php /*%%SmartyHeaderCode:731962382591bfb12c28692-52790141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b74d223654741af9ac6dc7a61ac3e6876c24c2f' => 
    array (
      0 => '/var/www/html/Topcoder/Home/View/Project/project.html',
      1 => 1483677883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '731962382591bfb12c28692-52790141',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_591bfb12c66d1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591bfb12c66d1')) {function content_591bfb12c66d1($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>相册</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 标题图标 -->
<link rel="bookmark"  type="image/x-icon"  href="<?php echo @image;?>
/logo.ico"/>
<link rel="shortcut icon" href="<?php echo @image;?>
/logo.ico"> 
<link rel="icon" href="<?php echo @image;?>
/logo.ico">
<!-- 标题图标 -->
<link rel="stylesheet" href="<?php echo @css;?>
/baguettebox.min.css">
<link rel="stylesheet" href="<?php echo @css;?>
/stylee.css">
<link href="<?php echo @css;?>
/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<script src="<?php echo @js;?>
/baguettebox.min.js"></script>


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


        <style>
        *{
          font-family:Mrisoft YaHei;
        }
           .kuang{
            width:80%;
            height:205px;
            border:1px solid black;
            background:#F8F8FF;
            border-radius:4px;
        
           }
           .projects-inform button{
            width:80px;
            height:35px;
            background:#4682B4; 
            border-radius:3px;
            box-shadow: 0 0 4px -1px #000;
           }
            
           .kuang a{
            text-decoration:none;
            display: block;
            width:90%;
            height:150px;
            /*border:1px solid #666;*/
            margin-top:10px;
            margin:10px 5% 0 5%;
           }
           .kuang p{
             margin-top:7px;
             font-size:15px;
             color:#191970; 
             text-align:center;
           }
           .photo{
            margin-top: 20px;
           }
           @media (max-width: 375px){
            .kuang{width:100%;height:200px;}
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
          <li><a href="<?php echo @__APP__;?>
/Project/suanfa.html">算法</a></li>
          <li><a href="<?php echo @__APP__;?>
/Project/single.html">项目</a></li>
          <li><a class="active" href="<?php echo @__APP__;?>
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
            <h3>Our family</h3>
        </div>
      <div class="projects-inform wow bounceInLeft" data-wow-delay="0.4s">
                <button class="btn btn-primary" type="button">用户登录</button>
          </br></br>
        <div class="project-text" style="float:none;width:100%"> 
                    <div class="row">
                        <div class="col col-md-3 col-sm-4 col-xs-6 photo">
                            <div class="kuang">
                                <a href="xiangce?im=1" ><img src="<?php echo @images;?>
/1-1.jpg" style="width:100%; height:100%;"></a>
                                <p>TC环境</p>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-4 col-xs-6 photo">
                            <div class="kuang">
                                <a href="xiangce?im=2"><img src="<?php echo @images;?>
/1-1.jpg"  style="width:100%; height:100%;"></a>
                                <p>户外活动</p>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-4 col-xs-6 photo">
                            <div class="kuang">
                                <a href="xiangce?im=3"><img src="<?php echo @images;?>
/1-1.jpg" style="width:100%; height:100%;"></a>
                                <p>小聚餐</p>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-4 col-xs-6 photo">
                            <div class="kuang">
                                <a href="xiangce?im=4"><img src="<?php echo @images;?>
/1-1.jpg" style="width:100%; height:100%;"></a>
                                <p>新生培训</p>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-4 col-xs-6 photo">
                            <div class="kuang">
                                <a href="xiangce?im=5"><img src="<?php echo @images;?>
/1-1.jpg" style="width:100%; height:100%;"></a>
                                <p>寒暑假集训</p>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-4 col-xs-6 photo">
                            <div class="kuang">
                                <a href="xiangce?im=6" ><img src="<?php echo @images;?>
/1-1.jpg" style="width:100%; height:100%;"></a>
                                <p>每周例会</p>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-4 col-xs-6 photo">
                            <div class="kuang">
                                <a href="xiangce?im=7"><img src="<?php echo @images;?>
/1-1.jpg"  style="width:100%; height:100%;"></a>
                                <p>TC藏书</p>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-4 col-xs-6 photo">
                            <div class="kuang">
                                <a href="xiangce?im=8"><img src="<?php echo @images;?>
/1-1.jpg" style="width:100%; height:100%;"></a>
                                <p>成员风貌</p>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
               <h3 class="modal-title">登录操作</h3>
            </div>
          <div class="modal-body">
             <form  class="form-horizontal" action="<?php echo @__SELF__;?>
" method="post">
                 <div class="form-group">
                     <label for="" class="col-sm-2 control-label">用户名</label>
                     <div class="col-sm-10">
                         <input type="text" name="username" class="form-control" placeholder="请输入用户名"/>
                     </div>
                     <label for="" class="col-sm-2 control-label">密码</label>
                     <div class="col-sm-10" style="margin-top:10px;">
                         <input type="password" class="form-control" name="password" placeholder="请输入密码"/>
                     </div>
                 </div>
                    <div class="modal-footer">
             <!-- <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> -->

             <input type="submit" class="btn btn-primary" id="logo" name="submit" />
          </div>
             </form>
          </div>
       
        </div>
    </div>
</div>



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
            <p>Copyrights &copy; 2016 Afford All rights reserved | Designed by Topcoder</p>
        </div>
    </div>
</div>
<!--copyrights end here-->
<script src="<?php echo @js;?>
js/jquery.min.js"></script>
<script src="<?php echo @js;?>
js/bootstrap.min.js"></script>
<script>
  $(function(){
    $(".btn").click(function(){
      $("#mymodal").modal("toggle");
    });
  });
baguetteBox.run('.baguetteBoxOne', {
    animation: 'fadeIn',
});
</script>
</body>
</html>


<?php }} ?>