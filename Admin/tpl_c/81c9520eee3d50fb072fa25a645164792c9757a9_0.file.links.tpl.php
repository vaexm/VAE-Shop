<?php
/* Smarty version 3.1.29, created on 2016-08-08 14:43:20
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Admin\tpl\links.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a82a08c7a610_65198753',
  'file_dependency' => 
  array (
    '81c9520eee3d50fb072fa25a645164792c9757a9' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Admin\\tpl\\links.tpl',
      1 => 1470638503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a82a08c7a610_65198753 ($_smarty_tpl) {
?>
<style type="text/css">
table{
width:500px;
border-collapse:collapse;
}
table tr th,table tr td{
border:1px solid #996633;
text-align:center;
}
table a{
text-decoration:none;
color:#996633;
}
table a:hover{
color:red;
}
#div1{
padding-left:260px;
font-size:13px;
}

</style>
<table align="center">
<th colspan="4" bgcolor="#996633" height="30px"><font color="white">查看链接</font></th>
<tr>
<td>删除</td>
<td>链接网站</td>
<td>URL</td>
<td>修改</td>
</tr>
<?php
$__section_rk_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_rk']) ? $_smarty_tpl->tpl_vars['__smarty_section_rk'] : false;
$__section_rk_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['resLinks']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_rk_0_total = $__section_rk_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_rk'] = new Smarty_Variable(array());
if ($__section_rk_0_total != 0) {
for ($__section_rk_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rk']->value['index'] = 0; $__section_rk_0_iteration <= $__section_rk_0_total; $__section_rk_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rk']->value['index']++){
?>
<tr  height="30px">
<td><input type="checkbox" name="items" id="chk<?php echo $_smarty_tpl->tpl_vars['resLinks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rk']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rk']->value['index'] : null)]['id'];?>
"/></td>
<td><input type="text" id="links1" value="<?php echo $_smarty_tpl->tpl_vars['resLinks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rk']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rk']->value['index'] : null)]['name'];?>
"/></td> 
<td><input type="text" id="links" value="<?php echo $_smarty_tpl->tpl_vars['resLinks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rk']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rk']->value['index'] : null)]['url'];?>
"/></td> 
<td><a href="#" onclick="UpLinks(<?php echo $_smarty_tpl->tpl_vars['resLinks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rk']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rk']->value['index'] : null)]['id'];?>
)">修改</a></td>
</tr>
<?php
}
}
if ($__section_rk_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_rk'] = $__section_rk_0_saved;
}
?>
</table>
<div id="div1"><a href="#" id="chAll">全选</a>&nbsp;&nbsp;&nbsp;<a href="#" id="chRes">反选</a>&nbsp;&nbsp;&nbsp;
<a href="#" id="chNo">全不选</a>&nbsp;&nbsp;&nbsp;<a href="#">删除选择</a></div><?php }
}
