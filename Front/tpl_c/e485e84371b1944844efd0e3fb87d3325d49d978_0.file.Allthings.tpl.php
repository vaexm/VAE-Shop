<?php
/* Smarty version 3.1.29, created on 2016-08-02 19:37:36
  from "E:\PHP\Apache\htdocs\2016-08-02-VAE-SHOP\Front\tpl\Allthings.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a08600c40e39_41669698',
  'file_dependency' => 
  array (
    'e485e84371b1944844efd0e3fb87d3325d49d978' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-08-02-VAE-SHOP\\Front\\tpl\\Allthings.tpl',
      1 => 1470137850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a08600c40e39_41669698 ($_smarty_tpl) {
?>
<div id="div_Comment">
<div id="div_Comment_Top">
</div>
<div id="div_Comment_2">
 <?php
$_from = $_smarty_tpl->tpl_vars['comment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_n_0_saved_item = isset($_smarty_tpl->tpl_vars['n']) ? $_smarty_tpl->tpl_vars['n'] : false;
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
$__foreach_n_0_saved_local_item = $_smarty_tpl->tpl_vars['n'];
?> 

     <div style="width:150px;height:150px;float:left; text-align:center;font-size:13px;">
     <a href="#"><img src="<?php echo @constant('FONT_PICS_URL');
echo $_smarty_tpl->tpl_vars['n']->value['pics'];?>
" width="80px" height="80px"/></a><br/>
     <span><?php echo $_smarty_tpl->tpl_vars['n']->value['name'];?>
</span><br/>
     市场价:<span><?php echo $_smarty_tpl->tpl_vars['n']->value['m_price'];?>
</span><br/>
   会员价:<span><?php echo $_smarty_tpl->tpl_vars['n']->value['v_price'];?>
</span><br/>
     </div>
   <?php
$_smarty_tpl->tpl_vars['n'] = $__foreach_n_0_saved_local_item;
}
if ($__foreach_n_0_saved_item) {
$_smarty_tpl->tpl_vars['n'] = $__foreach_n_0_saved_item;
}
?>
</div>
</div>
<div id="div_Hot">
<div id="div_Hot_Top">
</div>
<div id="div_Hot_2">
 <?php
$_from = $_smarty_tpl->tpl_vars['hot']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_n_1_saved_item = isset($_smarty_tpl->tpl_vars['n']) ? $_smarty_tpl->tpl_vars['n'] : false;
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
$__foreach_n_1_saved_local_item = $_smarty_tpl->tpl_vars['n'];
?> 

     <div style="width:150px;height:150px;float:left; text-align:center;font-size:13px;">
     <a href="#"><img src="<?php echo @constant('FONT_PICS_URL');
echo $_smarty_tpl->tpl_vars['n']->value['pics'];?>
" width="80px" height="80px"/></a><br/>
     <span><?php echo $_smarty_tpl->tpl_vars['n']->value['name'];?>
</span><br/>
     市场价:<span><?php echo $_smarty_tpl->tpl_vars['n']->value['m_price'];?>
</span><br/>
   会员价:<span><?php echo $_smarty_tpl->tpl_vars['n']->value['v_price'];?>
</span><br/>
     </div>
   <?php
$_smarty_tpl->tpl_vars['n'] = $__foreach_n_1_saved_local_item;
}
if ($__foreach_n_1_saved_item) {
$_smarty_tpl->tpl_vars['n'] = $__foreach_n_1_saved_item;
}
?>
</div>
</div>
<div id="div_New">
<div id="div_New_Top">
</div>
<div id="div_New_2">
 <?php
$_from = $_smarty_tpl->tpl_vars['hot']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_n_2_saved_item = isset($_smarty_tpl->tpl_vars['n']) ? $_smarty_tpl->tpl_vars['n'] : false;
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
$__foreach_n_2_saved_local_item = $_smarty_tpl->tpl_vars['n'];
?> 

     <div style="width:150px;height:150px;float:left; text-align:center;font-size:13px;">
     <a href="#"><img src="<?php echo @constant('FONT_PICS_URL');
echo $_smarty_tpl->tpl_vars['n']->value['pics'];?>
" width="80px" height="80px"/></a><br/>
     <span><?php echo $_smarty_tpl->tpl_vars['n']->value['name'];?>
</span><br/>
     市场价:<span><?php echo $_smarty_tpl->tpl_vars['n']->value['m_price'];?>
</span><br/>
   会员价:<span><?php echo $_smarty_tpl->tpl_vars['n']->value['v_price'];?>
</span><br/>
     </div>
   <?php
$_smarty_tpl->tpl_vars['n'] = $__foreach_n_2_saved_local_item;
}
if ($__foreach_n_2_saved_item) {
$_smarty_tpl->tpl_vars['n'] = $__foreach_n_2_saved_item;
}
?>
</div>
</div><?php }
}
