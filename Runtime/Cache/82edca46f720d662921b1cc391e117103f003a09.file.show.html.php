<?php /* Smarty version Smarty-3.1.6, created on 2017-05-19 10:26:33
         compiled from "/var/www/html/Topcoder/Home/View/Inform/show.html" */ ?>
<?php /*%%SmartyHeaderCode:2016499206591d101d70cfc0-26282210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82edca46f720d662921b1cc391e117103f003a09' => 
    array (
      0 => '/var/www/html/Topcoder/Home/View/Inform/show.html',
      1 => 1495160523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2016499206591d101d70cfc0-26282210',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_591d101d76cda',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591d101d76cda')) {function content_591d101d76cda($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
      <title>用户信息展示</title>
      <link rel="stylesheet" type="text/css" href="<?php echo @css;?>
/style1.css">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo @css;?>
/style1.css">
      <script type="text/javascript" src="<?php echo @js;?>
/jquery.js"></script> 
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
 
      <style>
      .collapsing
      {
      height:0;
      -webkit-transition:height 0s ;
      overflow:none;
      -webkit-transition-duration:0s;
      }
      </style>
    </head>
    <body>
    <div class="header">
      <div class="header_bar">
        <h1>Topcoder</h1>
        <h2> 欢迎登录！</h2>
      </div>
    </div>
        <div id="container">
            <div id="drop">
                <form action="<?php echo @__SELF__;?>
" method="post">
                    <input id="drops" name="drop"  type="submit" value="退出" />
                </form>
            </div>
            <div class="head-header">
                <div id="set">
                  <a href="add.html">
                    <input id="sett" type="button" value="创建用户信息">
                  </a>
                </div>
                <form action="<?php echo @__SELF__;?>
" method="post">
                    <span class="span">信息搜索：</span>
                    <select name="grade" id="grade">
                        <option value="">所在年级</option>
                        <option value="2009级">2009级</option>
                        <option value="2010级">2010级</option>
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
                    <select name="groups" id="grade" style="margin-left:20px;">
                        <option value="">选择组别</option>
                        <option value="算法组">算法组</option>
                        <option value="项目组">项目组</option>
                    </select>
                    <input class="search-text" name="name" style="margin-left:20px;font-size:14px;" type="text" placeholder="请填入姓名" />
                    <input class="search" type="submit" value="搜索"  />
                </form> 
            </div>
          
            
            <div class="head-main" style="height:260px;">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <div class="panel-heading">
                         <h4 class="panel-title">
                         <div class="message1"><span>姓名：<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span></div>
                          <div class="message1"><span>性别：<?php echo $_smarty_tpl->tpl_vars['v']->value['sex'];?>
</span></div>
                          <div class="message1"><span>手机号：<?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</span></div>
                          <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="font-size:16px;margin-left:10px;">查看更多</a>
                          </h4>
                         </div>
                        <div id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="panel-collapse collapse  " >
                            <div class="panel-body">
                              <div class="show1">
                                  <div class="message1"><span>QQ：<?php echo $_smarty_tpl->tpl_vars['v']->value['qq'];?>
</span></div>
                                  <div class="message1"><span>微信：<?php echo $_smarty_tpl->tpl_vars['v']->value['wechat'];?>
</span></div>
                                  <div class="message1"><span>邮箱：<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</span></div>
                                  <br />
                                  <div class="message1"><span>工作地点：<?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</span></div>
                                  <div class="message1"><span>学习经历：<?php echo $_smarty_tpl->tpl_vars['v']->value['l_exp'];?>
</span></div>
                                  <br />
                                  <div class="message2"><span>工作经历：<?php echo $_smarty_tpl->tpl_vars['v']->value['w_exp'];?>
</span>
                                  </div>
                                  <div class="message2"><span>寄语：<?php echo $_smarty_tpl->tpl_vars['v']->value['motto'];?>
</span>
                                  </div>
                              </div>
                            </div>
                        </div> 
                        <?php } ?>       
                      </div> 
                    </div><?php echo $_smarty_tpl->tpl_vars['page']->value;?>

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
          <a href="#">TopCoder网站</a>
           &nbsp;|&nbsp; 
          <a href="http://weibo.com/u/3969932680?is_hot=1#_loginLayer_1479735030734">南工ACM校训队微博</a> &nbsp;|&nbsp; 
          <a href="http://blog.sina.com.cn/u/3969932680">南工ACM校集训队博客</a>
        </p>
      <h5>地址：计算机与信息工程学院7#116</h5>
      <p>Copyrights &copy; 2016 Afford All rights reserved | Designed by Topcoder</p>
    </div>


    <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html><?php }} ?>