<?php
/* Smarty version 3.1.29, created on 2016-08-08 16:43:49
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Admin\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a846453a29e0_12377395',
  'file_dependency' => 
  array (
    'c1d6557eebdd9cd81401dd9f3f824d395a6c308e' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Admin\\tpl\\index.tpl',
      1 => 1470645824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_57a846453a29e0_12377395 ($_smarty_tpl) {
?>
<html>
  <head>
 
 <!--������ҳ����ʽ-->
 <link type="text/css" rel="stylesheet" href="<?php echo @constant('ADMIN_CSS_URL');?>
index.css"/>
  <!--����jquery�����ļ�-->
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ADMIN_JS_URL');?>
jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ADMIN_JS_URL');?>
menu.js"><?php echo '</script'; ?>
>
  <!--��������������js�ļ�-->
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ADMIN_JS_URL');?>
formState.js"><?php echo '</script'; ?>
>
<!--����鿴���������js�ļ�-->
   <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ADMIN_JS_URL');?>
OpenWindow.js"><?php echo '</script'; ?>
>
<!--����ɾ����Ʒ��js�ļ�-->
   <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ADMIN_JS_URL');?>
DeleteShop.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ADMIN_JS_URL');?>
admin.js"><?php echo '</script'; ?>
>
<!--���ڹ����js�ļ�-->
   <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ADMIN_JS_URL');?>
public.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ADMIN_JS_URL');?>
OpenUser.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ADMIN_JS_URL');?>
class.js"><?php echo '</script'; ?>
>
 <!--�����������ӵ�js�ļ�-->
 <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ADMIN_JS_URL');?>
link.js"><?php echo '</script'; ?>
>
 <!--���ڻ�Ա������js�ļ�-->
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ADMIN_JS_URL');?>
user.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div id="div_Top">
    </div>
    <div id="div_Middle">
       <div id="div_Middle_Left">
       <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       </div>
       <div id="div_Middle_Right">
       <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['url']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

       </div>
    </div>
    <div id="div_Footer">
   
    </div>
  </body>
</html><?php }
}
