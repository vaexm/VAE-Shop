<?php
/* Smarty version 3.1.29, created on 2016-08-08 18:12:15
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Admin\tpl\classAdd.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a85aff5fe780_73473249',
  'file_dependency' => 
  array (
    '08ed71c10596d93febb5ccaf9bc69ba9ade366f9' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Admin\\tpl\\classAdd.tpl',
      1 => 1470650599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a85aff5fe780_73473249 ($_smarty_tpl) {
?>
<style type="text/css">
#tb1{
width:250px;
border-collapse:collapse;
}
#tb1 tr th,#tb1 tr td{
text-align:center;
border:1px solid #996633;
}
</style>
<table id="tb1" align="center">
<tr bgcolor="#996633" height="30px"><th colspan="2">添加商品类别</th></tr>
<tr height="30px"><td>类别名称</td><td><input type="text" size="15"/></td></tr>
<tr height="30px"> <td>类别等级</td><td>
<select>
<option value="2">二级类别</option>
<option value="1">一级类别</option>
</select>
</td></tr>
<tr height="30px"><td>父级类别</td>
<td>
<select>
<?php
$__section_fm_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_fm']) ? $_smarty_tpl->tpl_vars['__smarty_section_fm'] : false;
$__section_fm_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['firstMenu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_fm_0_total = $__section_fm_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_fm'] = new Smarty_Variable(array());
if ($__section_fm_0_total != 0) {
for ($__section_fm_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index'] = 0; $__section_fm_0_iteration <= $__section_fm_0_total; $__section_fm_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['firstMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['firstMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fm']->value['index'] : null)]['name'];?>
</option>
<?php
}
}
if ($__section_fm_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_fm'] = $__section_fm_0_saved;
}
?>
</select>
</td>
</tr>
</table><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" name="btnAdd" value="添加"/><?php }
}
