<?php /* Smarty version Smarty-3.1.6, created on 2017-06-02 23:30:52
         compiled from "F:/wamp/www/topcoder/Home/View\Inform\userlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1972593184ac778810-46515201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7ffec9ea29f34792ea852d7152a6c7b0122c083' => 
    array (
      0 => 'F:/wamp/www/topcoder/Home/View\\Inform\\userlist.html',
      1 => 1495160528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1972593184ac778810-46515201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_593184acd5a0c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593184acd5a0c')) {function content_593184acd5a0c($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<title>用户列表</title>
	<link rel="stylesheet" href="<?php echo @css;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo @css;?>
/style.css">
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

    <style type="text/css">
    *{
        margin:0px;
        padding:0px;
    }
        .container{
            margin-top:50px;
            height:500px;
        }
        .search1{
            text-align:right;
            display: inline-block;
            margin-bottom:10px;
            width: 100%;
        }
        .input-group{
            width:200px;
            border:0;
            float:right;
        }
        .input{
            padding:2px 5px;
            width:200px;
        }
        table th,td{
            text-align:center;
        }
        th{
            background:#B8B8B8;
        }
        table td a{
            display: inline-block;
            text-decoration: none;
            color:#404040;
        }
        .edit{
            margin-right:25px;
        }
        a:hover{
            text-decoration:none;
        }
        .keep{
            display:none;
        }   
        .footer{
            height:160px;
        }
    </style>
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
        <input type="hidden" name="doing" value="loginout">
            <input id="drops" name="drop"  type="submit" value="退出" />
        </form>
    </div>
    <div class="container">
        <div class="search1">
            <form action="<?php echo @__SELF__;?>
" method="post">
                <div class="input-group">
                    <input type="text" name="username" class="input">
                    <span class="input-group-btn">
                    <input type="hidden" name="doing" value="search">
                      
                        <input class="btn btn-primary btn-sm" type="submit" name="search">
                            <span class="glyphicon glyphicon-search"></span>
                    </span>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <form action="<?php echo @__SELF__;?>
" method="post">
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>用户编号</th>
                            <th>用户名</th>
                            <th>状态</th>
                            <th>等级</th>
                            <th>创建时间</th>
                            <th>操作</th>
                        </tr>
                    </thead> 
                 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                    <tbody>
                      
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
                            <td class="state"><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
                            <td class="power"><?php echo $_smarty_tpl->tpl_vars['v']->value['class'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['date'];?>
</td>
                            <td >
                                <a href="#" id="togg" class="edit">
                                <span class="glyphicon glyphicon-edit"></span>
                                <span style="color:blue;"> 编辑</span>
                                </a>
                                <a href="#" class="keep">
                                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                                    <span class="glyphicon glyphicon-saved"></span>
                                    <input type="submit"  value="保存" name="xiugai">
                                </a>
                            </td>
                        </tr> 
                     
                    </tbody> <?php } ?>
                </table>
                     
            </form><?php echo $_smarty_tpl->tpl_vars['page']->value;?>

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
<script src="<?php echo @js;?>
/jquery.min.js"></script>
<script src="<?php echo @js;?>
/bootstrap.min.js"></script>
<script type="text/javascript">

    $(function(){
        $(".edit").click(function(){
            $(this).parent("td").siblings(".state").html("<select name='status' id='select1'><option value='on'>on</option><option value='pass'>pass</option><option value='die'>die</option></select>");
            $(this).parent("td").siblings(".power").html("<select name='class' id='select2'><option value='common'>common</option><option value='manage'>manage</option><option value='super'>super</option></select>");
            // $(".keep").show();
            $(this).siblings(".keep").show();
        });
    });
    
</script>
</body>
</html><?php }} ?>