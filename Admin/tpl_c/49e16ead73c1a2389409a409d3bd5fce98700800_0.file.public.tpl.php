<?php
/* Smarty version 3.1.29, created on 2016-08-07 22:00:28
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Admin\tpl\public.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a73efcd3d771_82613478',
  'file_dependency' => 
  array (
    '49e16ead73c1a2389409a409d3bd5fce98700800' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Admin\\tpl\\public.tpl',
      1 => 1470578368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a73efcd3d771_82613478 ($_smarty_tpl) {
?>
<style type="text/css">
table{
  width:240px;
  border-collapse:collapse;
  }
 table  tr th, table  tr  td{
  border:solid 1px #996633;
  text-align:center;
  }
 #div1{
 padding-left:280px;
 }
 </style>
<table align="center">
<tr bgcolor="#996633" height="30px"><th colspan="2">查看公告</th></tr>
<tr height="30xp"><td>删除</td><td>公告标题</td></tr>
<?php
$__section_rp_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_rp']) ? $_smarty_tpl->tpl_vars['__smarty_section_rp'] : false;
$__section_rp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['resPub']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_rp_0_total = $__section_rp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_rp'] = new Smarty_Variable(array());
if ($__section_rp_0_total != 0) {
for ($__section_rp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rp']->value['index'] = 0; $__section_rp_0_iteration <= $__section_rp_0_total; $__section_rp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rp']->value['index']++){
?>
<tr height="30px">
<td><input type="checkbox" name="items" id="chk<?php echo $_smarty_tpl->tpl_vars['resPub']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rp']->value['index'] : null)]['id'];?>
"/></td>
<td><?php echo $_smarty_tpl->tpl_vars['resPub']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rp']->value['index'] : null)]['title'];?>
</td>
</tr>
<?php
}
}
if ($__section_rp_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_rp'] = $__section_rp_0_saved;
}
?>
</table><br/>
<div id="div1">
<a href="#" id="chAll">全选</a>&nbsp;&nbsp;<a href="#" id="chRes">反选</a>
&nbsp;&nbsp;
<a href="#" id="chNo">全不选</a>&nbsp;&nbsp;
<a href="#" id="deletePublic">删除选择</a>
</div><?php }
}
