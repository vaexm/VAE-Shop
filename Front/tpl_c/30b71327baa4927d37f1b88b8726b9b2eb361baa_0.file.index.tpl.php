<?php
/* Smarty version 3.1.29, created on 2016-08-22 21:47:51
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Front\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57bb028753aec4_52210906',
  'file_dependency' => 
  array (
    '30b71327baa4927d37f1b88b8726b9b2eb361baa' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Front\\tpl\\index.tpl',
      1 => 1471873663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login.tpl' => 1,
    'file:public.tpl' => 1,
    'file:kefu.tpl' => 1,
    'file:link.tpl' => 1,
  ),
),false)) {
function content_57bb028753aec4_52210906 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\libs\\plugins\\modifier.date_format.php';
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="<?php echo @constant('FRONT_CSS_URL');?>
index.css"/>
 <!--����jquery�����ļ�-->
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('FRONT_JS_URL');?>
jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('FRONT_JS_URL');?>
jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
 <!--������´��ڵ�js�ļ�-->
 <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('FRONT_JS_URL');?>
Open.js"><?php echo '</script'; ?>
>
 <!--�����¼��js�ļ�-->
   <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('FRONT_JS_URL');?>
login.js"><?php echo '</script'; ?>
>
 <!--���빺�ﳵȫѡ����ѡ��js�ļ�-->
   <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('FRONT_JS_URL');?>
cart.js"><?php echo '</script'; ?>
>
<!--����֧����ʱ���js�ļ�-->
   <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('FRONT_JS_URL');?>
Pay.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id="div_Top">
<ul>
<li><a href="index.php?pageurl=Allthings">&nbsp;&nbsp;��ҳ</a></li>
<li><a href="index.php?pageurl=Newthings">������Ʒ</a></li>
<li><a href="index.php?pageurl=Commentthings">�Ƽ���Ʒ</a></li>
<li><a href="index.php?pageurl=Hotthings">������Ʒ</a></li>
<li><a href="#">������ѯ</a></li>
<li><a href="#"><?php echo smarty_modifier_date_format(time(),"Y-m-d");?>
</a></li>
</ul>
</div>
<div id="div_Middle">
<div id="div_Middle_L">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:kefu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<div id="div_Middle_R">
<div id="div_Middle_R_Top">
 <div  style="margin-left:200px;padding-top:180px;"><input type="text" placeholder="��������Ʒ����"/>
             <input type="button" value="������Ʒ"/>
             </div>
</div>
<div id="div_Middle_R_Bottom" style="width:100%;">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['url']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

          </div>
</div>
</div>
<div id="div_Foot">
</div>
</body>
</html><?php }
}
