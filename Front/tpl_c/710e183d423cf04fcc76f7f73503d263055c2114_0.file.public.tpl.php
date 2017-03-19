<?php
/* Smarty version 3.1.29, created on 2016-08-02 17:39:44
  from "E:\PHP\Apache\htdocs\2016-08-02-VAE-SHOP\Front\tpl\public.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a06a601e37a2_97443216',
  'file_dependency' => 
  array (
    '710e183d423cf04fcc76f7f73503d263055c2114' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-08-02-VAE-SHOP\\Front\\tpl\\public.tpl',
      1 => 1470130780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a06a601e37a2_97443216 ($_smarty_tpl) {
?>
<div id="div_Public">
<table style="padding-top:47px;">
<?php
$_from = $_smarty_tpl->tpl_vars['public']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_p_0_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_p_0_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>
<tr><td><img src="<?php echo @constant('FONT_PICS_URL');?>
images/man.JPG"/><a href="#">
<?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
</a></td></tr>
<?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_0_saved_local_item;
}
if ($__foreach_p_0_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_0_saved_item;
}
?>
</table>
</div><?php }
}
