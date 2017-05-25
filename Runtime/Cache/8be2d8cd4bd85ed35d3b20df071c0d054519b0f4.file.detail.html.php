<?php /* Smarty version Smarty-3.1.6, created on 2017-05-18 16:35:43
         compiled from "/var/www/html/Topcoder/Home/View/Inform/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:205790769591d102876acf7-86587000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8be2d8cd4bd85ed35d3b20df071c0d054519b0f4' => 
    array (
      0 => '/var/www/html/Topcoder/Home/View/Inform/detail.html',
      1 => 1495096544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205790769591d102876acf7-86587000',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_591d10287959c',
  'variables' => 
  array (
    'name' => 0,
    'info' => 0,
    'v' => 0,
    'comment' => 0,
    'vo' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591d10287959c')) {function content_591d10287959c($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>信息</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo @Bbs_css;?>
/style.css">
<link rel="stylesheet" href="<?php echo @Bbs_editor;?>
/themes/default/default.css" />
<script charset="utf-8" src="<?php echo @Bbs_editor;?>
/kindeditor-min.js"></script>
<script charset="utf-8" src="<?php echo @Bbs_editor;?>
/lang/zh_CN.js"></script>
<script>
  var editor;
  KindEditor.ready(function(K) {
    editor = K.create('textarea[name="content"]', {
      resizeType : 1,
      allowPreviewEmoticons : false,
      allowImageUpload : false,
      items : [
        'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
        'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
        'insertunorderedlist', '|', 'emoticons', 'image', 'link']
    });
  });
</script>

<style>
  .op_foot_but{font-size:16px;margin-top:10px;display:inline-block;padding:6px;margin-left:10px;background:;}
  .op_foot_but a:hover{color:#000;}
  .text-box .comment { border: 1px solid #ccc; display: block; height: 50px; width: 428px; padding: 5px; color: #000;margin-top:15px;}
       
        .text-box .btn-off { border: 1px solid #ccc; color: #ccc; background: #F7F7F7;}
       
       .btn{display:inline-block;margin-left:430px;margin-top:-60px;}
         .comment{ height: 100px; color: #000;}
       
        
        
</style>

</head>
<body>
<div class="contaner">
  <div class="s_header">
      <ul>
        <li class="a" id="">
          <a href="">分享平台</a>
        </li>
      </ul>
 </div>
 <!--    <div id="drop">
        <button type="button" id="drops"><a href="<?php echo @__SELF__;?>
?lg=logout">退出</a></button>
        <button type="button" id="drops"><a href="<?php echo @__APP__;?>
/Inform/login">登陆</a></button>
        <div style="float:right;margin-top:6px">
          <marquee class="mar" loop="-1" behavior="scroll" direction="right">欢迎<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
登陆！</marquee>
        </div>
        
    </div> -->
    <div class="s_search">
      <form action="" method="post" style="height:45px">
        <div id="" style="float:left;">
          <input id="searchs_input" type="text" name="content" placeholder="请输入帖子内容关键字" />
        </div>
        <div style="float:left;height:45px;margin-left:-5px;margin-top:27px;">
          <input type="submit" value="" name="search" id="s_but" />
        </div>
      </form>
    </div>
    <div class="op_head">
        <a class="head_a" href="#">全部主题</a>
        <div class="op_a2 op_a">
          <a class="op_a2" href="">发表时间</a>
        </div>
        <div class="op_a1 op_a">
          <a href="" class="op_a1">作者</a>
        </div>
    </div>
</div>
 

<div class="panel-group" id="accordion">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <div class="title">
                  <img src="<?php echo @Bbs_images;?>
/ann_icon.gif" alt=""/>
                 <strong style="font-size:14px;margin-left:5px;">最新：</strong>
                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
"  ><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>

                  </a>
                </div>
                
                <div id="op_t">
                   <a href="" class="author"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
                   <a href="" class="time"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['date'];?>
<?php $_tmp1=ob_get_clean();?><?php echo date('Y-m-d',$_tmp1);?>
 </a>
                </div>
            </h4>
        </div>
         
        <div id="collapse<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
" class="panel-collapse collapse ">
            <div class="panel-body">
                <a href="#"><span class="mes_peo">发表人：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
               <span class="mes_span"><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</span>
              <div id="list">
                 <div class="text-box">
                    <form action="" method="post">
                    <textarea class="comment" autocomplete="off" placeholder="评论…"></textarea>
                    <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"/>
                    <input type="hidden" name="pid" value="0"/>
                    <input type="submit" value="评论" name="commit" class="btn" />
                    </form>
                 </div>
               </div>
                
                 <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
                  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['vo']->value['uid'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp2==$_tmp3){?>
             <div style="padding-left:<?php echo $_smarty_tpl->tpl_vars['vo']->value['level']+1;?>
cm;margin-top:10px;">

               <div>
                   <span style="color:#2770C0;"><?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['vo']->value['grade'];?>
-<?php echo $_smarty_tpl->tpl_vars['vo']->value['tc_group'];?>
</span>
                   <span style="margin:0 50px;"><?php echo $_smarty_tpl->tpl_vars['vo']->value['content'];?>
</span> 
                  <span>时间 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['vo']->value['date'];?>
<?php $_tmp4=ob_get_clean();?><?php echo date('Y-m-d',$_tmp4);?>
</span>
                  <a href="#" style="font-size:16px; margin-left:20px;" onclick="showdiv(this);" >回复</a> 
                </div>


                <div class="comment" style="display:none;">
                      <a href="#" style="float:left;font-size:16px;margin-right:20px;"  >回复</a>
                      <span style="color:#2770C0;"><?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['vo']->value['grade'];?>
-<?php echo $_smarty_tpl->tpl_vars['vo']->value['tc_group'];?>
</span>
                      <span style="margin:0 50px;"><?php echo $_smarty_tpl->tpl_vars['vo']->value['content'];?>
</span> 
                       时间 <?php echo $_smarty_tpl->tpl_vars['vo']->value['date'];?>
<br />
                      <a href="#" class="btn" onclick="hidediv(this);">取消回复</a>
                      <form action="" method="post">
                          <textarea name="content" ></textarea>
                          <input type="hidden" type="text" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"/>
                          <input type="hidden" type="text" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"/>
                        <input type="submit" value="回复" name="response" class="btn" style="margin:20px 0px 10px 470px;" />
                      </form>
                </div>

              </div>
              <?php }else{ ?> <?php }?>
              <?php } ?>
               
               
            </div>
          </div>

        </div>
         <?php } ?>
    </div>
       

       <div style="font-size:16px;display:inline-block;width:100%;height:20px;line-height:20px;text-align:center;"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</div> 
      

       
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
    
    // $(function(){
    //   $('#huifu<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
').click(function(){
    //     $('.comment').toggle();
    //   });
    // });
     

      var time = 300;
        var h = 40;
        function showdiv(obj) {

            //obj.parentNode.nextSibling.nextSibling.style.display = "block";
            var x = obj.parentNode.nextSibling;
            //包含众多空格作为文本节点，因此在我们使用nextSibling和previousSibling时就会出现问题。
            //因为FireFox会把文本节点误当做元素节点的兄弟节点来处理。我们可以添加nodeType来判断。
            //当上一节点或者是下一节点为文本节点时，就继续寻找，直到找到下一个元素节点。
            //  其中nodeType的值主要有以下几种：
            // 
            // 元素节点的nodeType值为1
            // 属性节点的nodeType值为2
            // 文本节点的nodeType值为3
            if (x.nodeType != 1) {
                x = x.nextSibling;
            }
            x.style.display = "block";
            obj.parentNode.style.display = "none";
        }
        function hidediv(obj) {

            obj.parentNode.style.display = "none";
            var x = obj.parentNode.previousSibling;
            if (x.nodeType != 1) {
                x = x.previousSibling;
            }
            x.style.display = "block";
        }
 

</script>
</body>
</html><?php }} ?>