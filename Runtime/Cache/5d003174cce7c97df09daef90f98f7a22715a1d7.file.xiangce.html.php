<?php /* Smarty version Smarty-3.1.6, created on 2017-06-02 23:11:26
         compiled from "F:/wamp/www/topcoder/Home/View\Project\xiangce.html" */ ?>
<?php /*%%SmartyHeaderCode:255965931801e479447-69816045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d003174cce7c97df09daef90f98f7a22715a1d7' => 
    array (
      0 => 'F:/wamp/www/topcoder/Home/View\\Project\\xiangce.html',
      1 => 1495508544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255965931801e479447-69816045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'v' => 0,
    'info' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5931801ee0a71',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5931801ee0a71')) {function content_5931801ee0a71($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>相册照片</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 新增 -->
 <link rel="stylesheet" href="<?php echo @css;?>
/bootstrap.min.css">
 <!-- 标题图标 -->
 <link rel="bookmark"  type="image/x-icon"  href="<?php echo @image;?>
/logo.ico"/>
<link rel="shortcut icon" href="<?php echo @image;?>
/logo.ico"> 
<link rel="icon" href="<?php echo @image;?>
/logo.ico">
<!-- 标题图标 -->
<!-- 新增 -->
<link rel="stylesheet" href="<?php echo @css;?>
/baguettebox.min.css">
<link rel="stylesheet" href="<?php echo @css;?>
/stylee.css">

<script src="<?php echo @js;?>
/baguettebox.min.js"></script>

<link href="<?php echo @css;?>
/bootstrap.css" rel="stylesheet" type="text/css" media="all">


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
<!--
<link href='http://fonts.useso.com/css?family=Source+Sans+Pro:200,300,300,600,700,900,200italic,300italic,300italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
-->
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
    .container{
        padding-bottom: 20px;
    }
    .col-photo{
        margin-top:20px;
    }
    .col-photo a{
        width:90%;
    }
    .col-photo img{
        width:100%;
        height:175px;
    }
    .row{
      margin:auto 0;
    }
    .close{
      display:none;
    }
    #close{
      position:relative;
      top:-190px;
      left:5px;
      background:red; 
      color:white;
      border-radius:50px;
      width:22px; 
      height:22px;
    }
    #pages{
      width:600px;
      height:70px;
      margin:0 atuo;
      position:relative;
      left:620px;
      top:30px;
    }
</style>

</head>
<body>

<body>
<!--header start here-->
<div class="header">
    <div class="container head-nav-back">
        <div class="header-main">
            <div class="logo wow bounceIn" data-wow-delay="0.3s">
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

<div class="shangchuan">
  <div class="container">
    <div class="row">
      <div class="col col-md-1 col-sm-2 col-xs-4">
        <button class="btn disabled" id="name" type="button"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</button>
      </div>
      <div class="col col-md-1 col-sm-2 col-xs-4">
        <button class="btnn btn btn-primary" id="upload" type="button">上传照片</button>
      </div>
      <div class="col col-md-1 col-sm-2 col-xs-4">
        <button class="btn btn1 btn-primary" id="delete" type="button">删除照片</button>
        <div class="modal down" id="mymodal" >
                <div class="modal-dialog">
                    <div class="modal-content">
                       <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                           <h4 class="modal-title">删除照片</h4>
                        </div>
                     <div class="modal-body"> 
                        <div style="width:270px;height:100px;margin:0 auto;">
                         <p style="margin-left:60px;">你确认要删除照片吗？</p>
                         <button style="margin-left:40px;" class="btn btn-primary" type="button"><a href="<?php echo @__SELF__;?>
&de=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="Delete()">是</a></button>
                         <button style="margin-left:40px;" class="btn btn-primary" type="button">否</button>
                       </div>       
                     </div>
                 </div>
                </div>
              </div>
      </div>
    </div>
  </div>
   <div class="modal up" id="mymodal">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                   <h3 class="modal-title">上传照片</h3>
                </div>
              <div class="modal-body">
                 <form action="<?php echo @__SELF__;?>
" method="post" class="form-horizontal" enctype="multipart/form-data">
                     <div class="form-group">
                         <label for="" class="col-sm-2 control-label">选择文件</label>
                         <div class="col-sm-10">
                             <input type="file" class="form-control" name="file" />
                         </div>
                         <label for="" class="col-sm-2 control-label">图片名称</label>
                         <div class="col-sm-10" style="margin-top:10px;">
                             <input type="text" class="form-control" name="img_name"/>
                         </div>
                     </div>
                      <div class="modal-footer">
                 <input type="submit" class="btn btn-primary" name="submit" id="logo"/>
              </div>
                 </form>
              </div>
             
            </div>
        </div>
    </div> 
</div>

<div class="container">
    <div class="row baguetteBoxOne">
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
        <div class="col col-md-3 col-sm-3 col-xs-6 col-photo" id="pho1">
            <a href="<?php echo @BT;?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['small_image'];?>
" title="第<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
张图片"><img src="<?php echo @BT;?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['src_image'];?>
" id="alert"></a>
            <button class="close close1" id="close" onclick="Delete()">
              <span>&times;</span>
            </button>
              
        </div>
        <?php } ?>
        
       
            <!-- <button class="close" id="close" >
             <span >&times;</span>
            </button> -->
        </div>
    </div>

<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</div>

<script type="text/javascript">
baguetteBox.run('.baguetteBoxOne', {
    animation: 'fadeIn',
});
</script>
<!--footer start here-->
<div class="footer">
  <div class="container">
    <div class="footer-main">
      <div class="col-md-4 footer-grid wow bounceIn" data-wow-delay="0.3s">
        <h3>校内友情链接</h3>
        <ul class="ftr-list">
          <li><a href="http://www.nyist.net/">南阳理工学院 </a></li>
          <li><a href="http://cie.nyist.edu.cn/">计算机与信息工程学院</a></li>
          <li><a href="http://book.nyist.net/">图书馆 </a></li>
          <li><a href="http://172.31.31.33/jwweb/">教务管理系统</a></li>
          <li><a href="http://acm.nyist.net/">ACM在线测评系统</a></li>
          <li><a href="http://weibo.com/u/3969932680?is_hot=1#_loginLayer_1379735030733">南工ACM校训队微博</a></li>
          <li><a href="http://soft-bysj.nyist.net/fm360/">校园导航</a></li>
        </ul>
      </div>
      <div class="col-md-4 footer-grid wow bounceIn" data-wow-delay="0.3s">
        <h3>如何成为优秀程序员？</h3>
        <img src="<?php echo @images;?>
/c3.jpg" alt=""/>
        <p>秉持对编程的乐趣和激情，你最需要的是坚持和努力，而不是机遇。一个优秀的程序员就是那种即使是过单行道都要往两边看的人。——Doug Linder</p>
        <div class="ftr-bwn">
      <a href="http://www.codeceo.com/article/10-effective-way-good-programmer.html" class="hvr-pulse">Read More</a>
        </div>
      </div>
      <div class="col-md-4 footer-grid wow bounceIn" data-wow-delay="0.3s">
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
    <div class="copyright-main wow bounceInLeft" data-wow-delay="0.3s">
      <p>Copyrights &copy; 2016 Afford All rights reserved | Designed by Topcoder</a></p>
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
    $(".btnn").click(function(){
      $(".up").modal("toggle");
    });
  });
$(function(){
    $(".close1").click(function(){
      $(".down").modal("toggle");
    });
  });
// $(function Delete(){
//     var s = $("#pho1 a");
//     var t = s.id;
//     alert(t);
//   });
</script>
<script type="text/javascript">
  $("#delete").click(function(){
    $('.close').show();
  });
</script>
</body>
</html><?php }} ?>