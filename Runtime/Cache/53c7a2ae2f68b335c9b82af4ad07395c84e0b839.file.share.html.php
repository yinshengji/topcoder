<?php /* Smarty version Smarty-3.1.6, created on 2017-05-19 10:54:30
         compiled from "/var/www/html/Topcoder/Home/View/Inform/share.html" */ ?>
<?php /*%%SmartyHeaderCode:583099243591d1025e1bc04-85056965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53c7a2ae2f68b335c9b82af4ad07395c84e0b839' => 
    array (
      0 => '/var/www/html/Topcoder/Home/View/Inform/share.html',
      1 => 1495162469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '583099243591d1025e1bc04-85056965',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_591d1028139ba',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591d1028139ba')) {function content_591d1028139ba($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<script charset="utf-8" src="<?php echo @Bbs_share_editor;?>
/editor/kindeditor.js"></script>
	<script charset="utf-8" src="<?php echo @Bbs_share_editor;?>
/editor/lang/zh_CN.js"></script>
	<title>分享平台</title>
	<link rel="stylesheet" type="text/css" href="<?php echo @Bbs_css;?>
/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo @css;?>
/style2.css">
    <script src="<?php echo @js;?>
/jQuery.js" type="text/javascript"></script>	

<script type="text/javascript">
$(document).ready(function (){
$("#divQQbox").hover(function(){
        $(this).stop(true,false);
        $(this).animate({left:0},300);  
    },function(){
        $(this).animate({left:-162},300);   
    });
});</script>

	<script>
	var editor;
	KindEditor.ready(function(K) {
	                window.editor = K.create('#editor_id');
	        });
	</script>

</head>
<body>
	<div class="header">
		<div class="header_bar">
			<h1>Topcoder</h1>
			<h2> 欢迎登录！</h2>
		</div>
	</div>
		    <div id="drop">
        <button type="button" id="drops"><a href="<?php echo @__SELF__;?>
?lg=logout">退出</a></button>
       
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=null){?>
        <div style="float:right;margin-top:6px">
          <marquee class="mar" loop="-1" behavior="scroll" direction="right">欢迎<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
登陆！</marquee>
        </div>
            <?php }else{ ?>
         <button type="button" id="drops"><a href="<?php echo @__APP__;?>
/Inform/login">登陆</a></button>
         <?php }?>
    </div>
	<div id="share">
		<div id="opinion">
			<div id="op_main">
				<iframe scrolling="" style="width:100%;height:100%;border-width:0px;" SRC="detail.html" ></iframe>
			</div>
			<div id="op_footer">
			</div>
		</div>
		<div id="public">
			<div class="pub_head">
				<h2>快速发帖</h2>
			</div>
			<div class="pub_main">
				<form action="<?php echo @__SELF__;?>
" method="post">
					<div class="pub">
						<input style="width:25em;height:20px;" name="bbs_title" type="text" placeholder="请输入标题" />
						<span style="margin-left:10px;">可输入80个字</span>
					</div>
					<div style="height:490px">
						<!-- <iframe scrolling="" style="width:100%;height:100%;border-width:0px;" SRC="shareEditor/fabugonggao.html" ></iframe> -->
						<div class="com">
						    <div class="menu">
						                <textarea id="editor_id" name="bbs_content" style="width:700px;height:300px;">文章内容
						                </textarea>
						    </div>        
						</div> 
					</div>
					<input type="hidden" name="pid" value="0" />
				<input style="width:100px;" type="submit">
					<div class="discuss">
						<input class="check" type="checkbox" name="bbs_conf" /><span style="margin-left:5px;">是否允许他人评论</span>
					</div>	
					
				</form>
			</div>
		</div>
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
	<div class="footer">
	    <p class="foot_p">
	    	<a class="foot_a" href="#">TopCoder网站</a>
	    	 &nbsp;|&nbsp; 
	    	<a class="foot_a" href="http://weibo.com/u/3969932680?is_hot=1#_loginLayer_1479735030734">南工ACM校训队微博</a> &nbsp;|&nbsp; 
	    	<a class="foot_a" href="http://blog.sina.com.cn/u/3969932680">南工ACM校集训队博客</a>
	    </p>
		<h5>地址：计算机与信息工程学院7#116</h5>
		<p>Copyrights &copy; 2016 Afford All rights reserved | Designed by Topcoder</p>
	</div>
</body>
</html><?php }} ?>