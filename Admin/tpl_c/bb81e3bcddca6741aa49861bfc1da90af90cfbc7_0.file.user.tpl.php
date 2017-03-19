<?php
/* Smarty version 3.1.29, created on 2016-08-08 17:21:36
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Admin\tpl\user.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a84f20bdc229_78916712',
  'file_dependency' => 
  array (
    'bb81e3bcddca6741aa49861bfc1da90af90cfbc7' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Admin\\tpl\\user.tpl',
      1 => 1470648084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a84f20bdc229_78916712 ($_smarty_tpl) {
?>
<style type="text/css">
table{
width:100%;
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
padding-left:180px;
}
</style>
<table align="center">
<tr>
<th colspan="5" bgcolor="#996633" height="30px"><font color="white">会员管理</font></th>
<tr height="30px"><td></td><td>id</td><td>昵称</td><td>状态</td><td>查看信息</td></tr>
<?php
$__section_lu_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_lu']) ? $_smarty_tpl->tpl_vars['__smarty_section_lu'] : false;
$__section_lu_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['resUser']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_lu_0_total = $__section_lu_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_lu'] = new Smarty_Variable(array());
if ($__section_lu_0_total != 0) {
for ($__section_lu_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index'] = 0; $__section_lu_0_iteration <= $__section_lu_0_total; $__section_lu_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index']++){
?>
<tr height="30px">
<td><input type="checkbox" name="items" id="<?php echo $_smarty_tpl->tpl_vars['resUser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index'] : null)]['id'];?>
"/></td>
<td><?php echo $_smarty_tpl->tpl_vars['resUser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index'] : null)]['id'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['resUser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index'] : null)]['name'];?>
</td>
<td>
<?php if ($_smarty_tpl->tpl_vars['resUser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index'] : null)]['isfreeze'] == 0) {?>
<a href="#" onclick="UserState(<?php echo $_smarty_tpl->tpl_vars['resUser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index'] : null)]['id'];?>
,1)">未冻结</a>
<?php } elseif ($_smarty_tpl->tpl_vars['resUser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index'] : null)]['isfreeze'] == 1) {?>
<a href="#" onclick="UserState(<?php echo $_smarty_tpl->tpl_vars['resUser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index'] : null)]['id'];?>
,0)">冻结</a>
<?php }?>
</td>
<td><a href="#" onclick="OpenWindow1(<?php echo $_smarty_tpl->tpl_vars['resUser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lu']->value['index'] : null)]['id'];?>
)">详细信息</a></td>
</tr>
<?php
}
}
if ($__section_lu_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_lu'] = $__section_lu_0_saved;
}
?>
</tr>
</table>
<div id="div1"><a href="#" id="chAll">全选</a>&nbsp;&nbsp;&nbsp;<a href="#" id="chRes">反选</a>&nbsp;&nbsp;&nbsp;
<a href="#" id="chNo">全不选</a>&nbsp;&nbsp;&nbsp;<a href="#">删除选择</a>&nbsp;&nbsp;&nbsp;
<a href="#" onclick="ChUsers(0)">解冻用户</a>&nbsp;&nbsp;&nbsp;
<a href="#" onclick="ChUsers(1)">冻结用户</a>
</div><?php }
}
