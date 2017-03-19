<?php
/* Smarty version 3.1.29, created on 2016-08-02 18:11:39
  from "E:\PHP\Apache\htdocs\2016-08-02-VAE-SHOP\Front\tpl\link.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a071db3eec69_20029561',
  'file_dependency' => 
  array (
    '6fd5041696c5808ecf23c241eeed5561d161ba0f' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-08-02-VAE-SHOP\\Front\\tpl\\link.tpl',
      1 => 1470132695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a071db3eec69_20029561 ($_smarty_tpl) {
?>
<div id="div_Link">
<div id="div_Link1">
<?php
$_from = $_smarty_tpl->tpl_vars['link']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_l_0_saved_item = isset($_smarty_tpl->tpl_vars['l']) ? $_smarty_tpl->tpl_vars['l'] : false;
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$__foreach_l_0_saved_local_item = $_smarty_tpl->tpl_vars['l'];
?>
<span><a href="<?php echo $_smarty_tpl->tpl_vars['l']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['l']->value['name'];?>
</a></span><br/><br/>
<?php
$_smarty_tpl->tpl_vars['l'] = $__foreach_l_0_saved_local_item;
}
if ($__foreach_l_0_saved_item) {
$_smarty_tpl->tpl_vars['l'] = $__foreach_l_0_saved_item;
}
?>
</div>
</div><?php }
}
