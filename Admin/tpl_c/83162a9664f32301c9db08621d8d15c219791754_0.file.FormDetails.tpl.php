<?php
/* Smarty version 3.1.29, created on 2016-08-07 16:49:53
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Admin\tpl\FormDetails.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a6f631817225_30969597',
  'file_dependency' => 
  array (
    '83162a9664f32301c9db08621d8d15c219791754' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Admin\\tpl\\FormDetails.tpl',
      1 => 1470559782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a6f631817225_30969597 ($_smarty_tpl) {
?>
<style>
#tb{
width:400px;
border-collapse:collapse;
}
#tb tr th,#tb tr td{
text-align:center;
border:1px solid #996633;
}
</style>
<table id="tb" align="center">
<tr height="35px"><th colspan="4" bgcolor="#996633"><font color="white">�����鿴</font></th></tr>
<tr height="35px"><td>������</td><td><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['formid'];?>
</td>
<td>����ʱ��</td><td><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['formtime'];?>
</td></tr>
<tr height="35px"><td>�µ���</td><td><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['vendee'];?>
</td>
<td>�ջ���</td><td><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['taker'];?>
</td></tr>
<tr height="35px"><td>��ַ</td><td colspan="3"><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['address'];?>
</td>
<tr height="35px"><td>�ͻ���ʽ</td><td><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['del_method'];?>
</td>
<td>���ʽ</td><td><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['pay_method'];?>
</td></tr>
</table>
<br/><br/>
<table id="tb" align="center">
<tr height="35px"><th colspan="5" bgcolor="#996633"><font color="white">��������</font></th></tr>
<tr>
<td>��Ʒ��</td><td>����</td><td>�۸�</td><td>�ۿ���</td><td>�ϼ�</td>
</tr>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['commo_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['commo_num'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['agoprice'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['fold'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['total'];?>
</td>
</tr>
</table><?php }
}
