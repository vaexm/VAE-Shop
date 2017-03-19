<?php
/* Smarty version 3.1.29, created on 2016-08-07 14:42:35
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Admin\tpl\test.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a6d85b6db903_36246055',
  'file_dependency' => 
  array (
    'bf3af262b9f723471c30f0df9b29d6c29f2a393b' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Admin\\tpl\\test.tpl',
      1 => 1470552100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a6d85b6db903_36246055 ($_smarty_tpl) {
?>
 <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('ADMIN_JS_URL');?>
jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 type="text/javascript">
 $(function(){
 $("#a1").click(function(){
   if(window.confirm("ÄãÈ·¶¨ÒªÉ¾³ýÂð?")){
      alert(22);
   }else{
   alert(111);
   }
   
 });
 });
 <?php echo '</script'; ?>
>
<a href="#" id="a1">É¾³ý</a><?php }
}
