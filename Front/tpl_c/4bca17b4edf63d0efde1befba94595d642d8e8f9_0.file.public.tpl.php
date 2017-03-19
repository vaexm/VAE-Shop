<?php
/* Smarty version 3.1.29, created on 2016-08-02 22:59:17
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Front\tpl\public.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a0b54572aed0_44753013',
  'file_dependency' => 
  array (
    '4bca17b4edf63d0efde1befba94595d642d8e8f9' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Front\\tpl\\public.tpl',
      1 => 1470130780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a0b54572aed0_44753013 ($_smarty_tpl) {
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
