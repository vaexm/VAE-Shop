<?php
/* Smarty version 3.1.29, created on 2016-08-07 19:58:01
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Admin\tpl\admin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a722493074b4_65490651',
  'file_dependency' => 
  array (
    '7f37857f8a3f2b1c2c0e8981fea6812359b2a416' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Admin\\tpl\\admin.tpl',
      1 => 1470570977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a722493074b4_65490651 ($_smarty_tpl) {
?>
<style>
table{
width:300px;
border-collapse:collapse;
}
table tr th,table tr td{
border:1px solid #996633;
text-align:center;
}
#tb1 a{
text-decoration:none;
color:#996633;
}
#tb1 a:hover{
color:red;
}
</style>
<!--<?php echo $_smarty_tpl->tpl_vars['resAdmin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index'] : null)]['name'];?>
,<?php echo $_smarty_tpl->tpl_vars['resAdmin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index'] : null)]['pwd'];?>
-->
<table id="tb1" align="center">
<tr bgcolor="#996633" height="30px">
<th colspan="5"><font color="white">管理员管理</font></th>
<?php
$__section_ad_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_ad']) ? $_smarty_tpl->tpl_vars['__smarty_section_ad'] : false;
$__section_ad_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['resAdmin']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ad_0_total = $__section_ad_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ad'] = new Smarty_Variable(array());
if ($__section_ad_0_total != 0) {
for ($__section_ad_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index'] = 0; $__section_ad_0_iteration <= $__section_ad_0_total; $__section_ad_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index']++){
?>
<tr height="30px">
<td><?php echo $_smarty_tpl->tpl_vars['resAdmin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index'] : null)]['id'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['resAdmin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index'] : null)]['name'];?>
</td>
<td><a href="#" onclick="showTable()">添加</a></td>
<td><a href="#" onclick="show('<?php echo $_smarty_tpl->tpl_vars['resAdmin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index'] : null)]['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['resAdmin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index'] : null)]['pwd'];?>
')">修改</a></td>
<td><a href="#" onclick="Delete('<?php echo $_smarty_tpl->tpl_vars['resAdmin']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ad']->value['index'] : null)]['name'];?>
')">删除</a></td>
</tr>
<?php
}
}
if ($__section_ad_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_ad'] = $__section_ad_0_saved;
}
?>
</table><br/><br/><br/>
<table id="tbAdd" align="center" style="display:none;">
<tr  bgcolor="#996633" height="30px"><th colspan="2"><font color="white">添加管理员</font></th></tr>
<tr height="30px"><td>账号:</td><td><input type="text" id="txtId"/></td></tr>
<tr height="30px"><td>密码:</td><td><input type="password" id="txtPwd"/></td></tr>
<tr height="30px"><td>确认密码:</td><td><input type="password" id="txtPwd1"/></td></tr>
<tr height="30px"><td colspan="2"><input type="button" name="btnAdd" value="添加" onclick="Add()"/></td></tr>
</table>

<table id="tbUpdate" align="center"  style="display:none;">
<tr  bgcolor="#996633" height="30px"><th colspan="2"><font color="white">修改管理员密码</font></th></tr>
<tr height="30px"><td>原密码:</td><td><input type="text" id="OldPwd"/></td></tr>
<tr height="30px"><td>新密码:</td><td><input type="password" id="NewPwd"/></td></tr>
<tr height="30px"><td>确认密码:</td><td><input type="password" id="NewPwd1"/></td></tr>
<tr height="30px"><td colspan="2"><input type="button" name="btnUpdate" value="修改" onclick="Update()"/></td></tr>
</table>
<?php }
}
