<?php
/* Smarty version 3.1.29, created on 2016-08-07 23:27:28
  from "E:\PHP\Apache\htdocs\2016-VAE-SHOP\Admin\tpl\UserDetails.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a75360920403_35597731',
  'file_dependency' => 
  array (
    'ef2efdaff47699356c29bd55823c6a8732f3f49f' => 
    array (
      0 => 'E:\\PHP\\Apache\\htdocs\\2016-VAE-SHOP\\Admin\\tpl\\UserDetails.tpl',
      1 => 1470583642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a75360920403_35597731 ($_smarty_tpl) {
?>
<style type="text/css">
table{
width:420;
border-collapse:collapse;
}
table tr th,table tr td{
border:1px solid #996633;
text-align:center;
}
</style>
<table align="center">
<tr>
<th colspan="2" bgcolor="#996633" height="30px"><font color="white">��Ա��Ϣ</font></th>
</tr>
<tr  height="30px"><td>��Ա���ƣ�</td><td><?php echo $_smarty_tpl->tpl_vars['res1']->value[0]['name'];?>
</td></tr>
<tr  height="30px"><td>�����ܶ</td><td><?php echo $_smarty_tpl->tpl_vars['res1']->value[0]['consume'];?>
</td></tr>
<tr  height="30px"><td>��ʵ����</td><td><?php echo $_smarty_tpl->tpl_vars['res1']->value[0]['realname'];?>
</td></tr>
<tr  height="30px"><td>���֤�ţ�</td><td><?php echo $_smarty_tpl->tpl_vars['res1']->value[0]['card'];?>
</td></tr>
<tr  height="30px"><td>�ƶ��绰��</td><td><?php echo $_smarty_tpl->tpl_vars['res1']->value[0]['tel'];?>
</td></tr>
<tr  height="30px"><td>�̶��绰��</td><td><?php echo $_smarty_tpl->tpl_vars['res1']->value[0]['phone'];?>
</td></tr>
<tr  height="30px"><td>Email:</td><td><?php echo $_smarty_tpl->tpl_vars['res1']->value[0]['Email'];?>
</td></tr>
<tr  height="30px"><td>QQ�ţ�</td><td><?php echo $_smarty_tpl->tpl_vars['res1']->value[0]['QQ'];?>
</td></tr>
<tr  height="30px"><td>�ʱࣺ</td><td><?php echo $_smarty_tpl->tpl_vars['res1']->value[0]['code'];?>
</td></tr>
<tr  height="30px"><td>��ַ:</td><td><?php echo $_smarty_tpl->tpl_vars['res1']->value[0]['address'];?>
</td></tr>
<tr  height="30px"><td>�Ƿ񶳽�:</td><td><?php echo $_smarty_tpl->tpl_vars['res1']->value[0]['fname'];?>
</td></tr>
<tr  height="30px"><td>ע��ʱ��:</td><td><?php echo $_smarty_tpl->tpl_vars['res1']->value[0]['addtime'];?>
</td></tr>
</table><?php }
}
